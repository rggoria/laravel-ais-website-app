<?php

namespace App\Http\Controllers;

use App\Models\OrderDocument;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Order;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GatewayController extends Controller
{
    public function index() {
        $orders = Order::with('orderItems')->get();
        return view('gateway.client.index', compact('orders'));
    }

    public function pricing() {
        $productItems = Product::all();
        return view('gateway.client.pricing', compact('productItems'));
    }

    public function product_details($orderId) {
        $order = Order::where('order_id', $orderId)->firstOrFail();
        $existingDocuments = OrderDocument::where('order_id', $orderId)->get()->keyBy('document_type');
    
        return view('gateway.client.product-details', compact('order', 'orderId', 'existingDocuments'));
    }

    public function storeDocuments(Request $request, $orderId)
    {
        // Validate the request
        $validatedData = $request->validate([
            'employment_contract' => 'file|mimes:pdf,doc,docx|max:2048',
            'candidate_form' => 'file|mimes:pdf,doc,docx|max:2048',
            'passport_copy' => 'file|mimes:pdf,doc,docx|max:2048',
            'supporting_documents' => 'file|mimes:pdf,doc,docx|max:2048',
            'other_documents' => 'file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Create a folder named after the order ID
        $folderName = $orderId;
        $path = public_path('uploads/' . $folderName);
        
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        // Store the files
        $documentTypes = [
            'employment_contract',
            'candidate_form',
            'passport_copy',
            'supporting_documents',
            'other_documents',
        ];

        foreach ($documentTypes as $docType) {
            if ($request->hasFile($docType)) {
                $file = $request->file($docType);

                if (!$file->isValid()) {
                    return back()->withErrors(['upload' => 'File upload error for ' . $docType]);
                }

                $baseFileName = $docType . '_';
                $fileExtension = $file->extension();
                $fileName = $baseFileName . '.' . $fileExtension;

                $existingCount = OrderDocument::where('order_id', $orderId)
                    ->where('document_type', $docType)
                    ->where('file_name', $fileName)
                    ->count();

                if ($existingCount > 0) {
                    $i = 1;
                    while ($existingCount > 0) {
                        $fileName = $baseFileName . $i . '.' . $fileExtension;
                        $existingCount = OrderDocument::where('order_id', $orderId)
                            ->where('document_type', $docType)
                            ->where('file_name', $fileName)
                            ->count();
                        $i++;
                    }
                }

                $filePath = 'uploads/' . $folderName . '/' . $fileName;
                $file->move($path, $fileName);

                OrderDocument::create([
                    'order_id' => $orderId,
                    'file_name' => $fileName,
                    'file_path' => $filePath,
                    'document_type' => $docType,
                ]);
            }
        }

        // Check if all required documents are submitted
        $existingDocuments = OrderDocument::where('order_id', $orderId)->get()->keyBy('document_type');
        $requiredDocuments = ['employment_contract', 'candidate_form', 'passport_copy'];
        $hasRequiredDocuments = true;

        foreach ($requiredDocuments as $required) {
            if (!isset($existingDocuments[$required])) {
                $hasRequiredDocuments = false;
                break;
            }
        }

        // Update order status
        $order = Order::where('order_id', $orderId)->first();
        if ($request->input('action') === 'submit' && $hasRequiredDocuments) {
            $order->status = 'Completed';
        } else {
            $order->status = 'In Progress';
        }
        
        $order->save();

        return redirect()->back()->with('success', 'Documents uploaded and status updated successfully.');
    }



    protected function getDocumentDescription($type)
    {
        switch ($type) {
            case 'employment_contract':
                return 'Signed employment contract in PDF or Word format.';
            case 'candidate_form':
                return 'Completed candidate form from MOM\'s website in PDF format.';
            case 'passport_copy':
                return 'Clear copy of the candidate’s passport page showing personal particulars (JPG, PNG, PDF).';
            case 'supporting_documents':
                return 'Optional supporting documents (e.g., deed poll, marriage certificate) in JPG, PNG, or PDF format.';
            case 'other_documents':
                return 'Optional documents such as verification proof in JPG, PNG, or PDF format.';
            default:
                return null;
        }
    }

    public function profile() {        
        return view('gateway.client.profile');
    }
    
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'email' => 'required|email',
            'current_password' => 'required',
            'new_password' => 'nullable|min:8|confirmed', // Ensure 'confirmed' is included
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'mobile_number' => 'required|string',
        ]);

        // Check current password
        if (!password_verify($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update user details
        $user->email = $request->email;
        if ($request->new_password) {
            $user->password = bcrypt($request->new_password);
        }
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->mobile_number = $request->mobile_number;
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function dashboard() {
        $orderCount = OrderItem::count();
        $userCount = User::where('role', '!=', 'admin')->count();
        return view('gateway.admin.index', compact('orderCount', 'userCount'));
    }

    public function order() {
        $orders = Order::with('orderItems')->get();
        return view('gateway.admin.order', compact('orders'));
    }

    public function orderView($orderId) {
        $orders = Order::with('orderItems')->where('order_id', $orderId)->firstOrFail();
        $products = Product::all();
        return view('gateway.admin.order-view', compact('orders', 'products'));
    }

    public function orderUpdate(Request $request, $orderId)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'variant' => 'required|string|in:Standard,Express',
        ]);

        // Retrieve the existing order
        $order = Order::where('order_id', $orderId)->firstOrFail();

        // Get the product name from the products table
        $product = Product::find($request->product_id);
        $productName = $product->name;

        // Create order items based on the quantity
        for ($i = 0; $i < $validatedData['qty']; $i++) {
            OrderItem::create([
                'serial_number' => uniqid(),
                'order_id' => $orderId,
                'product_name' => $productName,
                'variant' => $validatedData['variant'],
            ]);
        }

        // Redirect or return response
        return redirect()->back()->with('success', 'Order updated successfully!');
    }

    public function orderDocuments($orderId) {
        $order = Order::where('order_id', $orderId)->firstOrFail();
        $existingDocuments = OrderDocument::where('order_id', $orderId)->get()->keyBy('document_type');
    
        return view('gateway.admin.order-documents', compact('order', 'orderId', 'existingDocuments'));
    }
}
