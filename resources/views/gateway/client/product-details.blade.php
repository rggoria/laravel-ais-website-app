@extends('layouts.client')

@section('title')
    Services [Product List] - AIS
@endsection

@section('content')

{{-- Ecommerce Products List --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">Product Details</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card p-4 shadow-sm">

        <p class="text-muted text-center">Please answer the following questions as accurately as possible.</p>

        <form action="{{ route('store-documents', ['orderId' => $orderId]) }}" method="POST" enctype="multipart/form-data">
            @csrf            

            <div class="mb-4">
                <label class="form-label">1. Please upload the signed employment contract 
                    <a href="https://www.mom.gov.sg/faq/work-pass-general/why-must-i-get-a-foreigners-written-consent-before-applying-for-a-work-pass-for-them" target="_blank" 
                       data-bs-toggle="tooltip" 
                       title='<img src="{{ asset('asset/images/homepage/tooltip.png') }}" class="img-fluid" alt="Testing">' 
                       data-bs-html="true"> 
                       <i class="fas fa-info-circle"></i>
                    </a>
                </label>
                <input class="form-control" type="file" name="employment_contract" accept=".pdf,.doc,.docx">
                @if(isset($existingDocuments['employment_contract']))
                    <p>Existing Document: <a href="{{ asset($existingDocuments['employment_contract']->file_path) }}" target="_blank">{{ $existingDocuments['employment_contract']->file_name }}</a></p>
                @endif
            </div>

            <div class="mb-4">
                <label class="form-label">2. Complete the <a href="https://www.mom.gov.sg/-/media/mom/documents/work-passes-and-permits/ep-and-s-pass-candidate-form.pdf" target="_blank">candidate’s form</a> from MOM’s website and upload it here.</label>
                <input class="form-control mt-2" type="file" name="candidate_form" accept=".pdf,.doc,.docx">
                @if(isset($existingDocuments['candidate_form']))
                    <p>Existing Document: <a href="{{ asset($existingDocuments['candidate_form']->file_path) }}" target="_blank">{{ $existingDocuments['candidate_form']->file_name }}</a></p>
                @endif
            </div>

            <div class="mb-4">
                <label class="form-label">3. Please upload a clear copy of the candidate’s passport page showing the personal particulars</label>
                <input class="form-control" type="file" name="passport_copy" accept=".pdf,.doc,.docx">
                @if(isset($existingDocuments['passport_copy']))
                    <p>Existing Document: <a href="{{ asset($existingDocuments['passport_copy']->file_path) }}" target="_blank">{{ $existingDocuments['passport_copy']->file_name }}</a></p>
                @endif
            </div>

            <div class="mb-4">
                <label class="form-label">4. (Optional) If the name on the passport differs from other documents (e.g. Educational Certificate, National Identity Card), please upload supporting documents (e.g. deed poll, marriage certificate)</label>
                <input class="form-control" type="file" name="supporting_documents" accept=".pdf,.doc,.docx">
                @if(isset($existingDocuments['supporting_documents']))
                    <p>Existing Document: <a href="{{ asset($existingDocuments['supporting_documents']->file_path) }}" target="_blank">{{ $existingDocuments['supporting_documents']->file_name }}</a></p>
                @endif
            </div>

            <div class="mb-4">
                <label class="form-label">5. (Optional) Any other documents (such as Verification Proof)</label>
                <input class="form-control" type="file" name="other_documents" accept=".pdf,.doc,.docx">
                @if(isset($existingDocuments['other_documents']))
                    <p>Existing Document: <a href="{{ asset($existingDocuments['other_documents']->file_path) }}" target="_blank">{{ $existingDocuments['other_documents']->file_name }}</a></p>
                @endif
            </div>

            <div class="row">
                <div class="col-6 offset-6">
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary" name="action" value="submit">Submit</button>
                        <button type="submit" class="btn btn-secondary" name="action" value="draft">Save as Draft</button>
                        <a href="{{ route('gateway') }}" class="btn btn-light">Exit</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            // Initialize Bootstrap tooltips
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
