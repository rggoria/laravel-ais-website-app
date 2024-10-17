@extends('layouts.client')

@section('title')
    Services [Product List] - AIS
@endsection

@section('content')

{{-- Eccomerce Products List --}}
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

        <form id="multi-step-form" action="{{ route('store-documents', ['orderId' => $orderId]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Step 1 --}}
            <div class="step" id="step-1">
                <div class="mb-4">
                    <label class="form-label">1. Please upload the signed employment contract 
                        <a href="https://www.mom.gov.sg/faq/work-pass-general/why-must-i-get-a-foreigners-written-consent-before-applying-for-a-work-pass-for-them" target="_blank" 
                           data-bs-toggle="tooltip" 
                           title='<img src="{{ asset('asset/images/homepage/tooltip.png') }}" class="img-fluid" alt="Testing">' 
                           data-bs-html="true"> 
                           <i class="fas fa-info-circle"></i>
                        </a>
                    </label>
                    <input class="form-control" type="file" name="employment_contract" accept=".pdf,.doc,.docx" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
            </div>

            {{-- Step 2 --}}
            <div class="step" id="step-2" style="display: none;">
                <div class="mb-4">
                    <label class="form-label">2. Complete the <a href="https://www.mom.gov.sg/-/media/mom/documents/work-passes-and-permits/ep-and-s-pass-candidate-form.pdf" target="_blank">candidate’s form</a> from MOM’s website and upload it here.</label>
                    <input class="form-control mt-2" type="file" name="candidate_form" accept=".pdf,.doc,.docx" required>
                </div>
                <button type="button" class="btn btn-secondary" onclick="previousStep(1)">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
            </div>

            {{-- Step 3 --}}
            <div class="step" id="step-3" style="display: none;">
                <div class="mb-4">
                    <label class="form-label">3. Please upload a clear copy of the candidate’s passport page showing the personal particulars</label>
                    <input class="form-control" type="file" name="passport_copy" accept=".pdf,.doc,.docx" required>
                </div>
                <button type="button" class="btn btn-secondary" onclick="previousStep(2)">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextStep(4)">Next</button>
            </div>

            {{-- Step 4 --}}
            <div class="step" id="step-4" style="display: none;">
                <div class="mb-4">
                    <label class="form-label">
                        4. (Optional) If the name on the passport differs from other documents (e.g. Educational Certificate, National Identity Card), please upload supporting documents (e.g. deed poll, marriage certificate)
                    </label>
                    <input class="form-control" type="file" name="supporting_documents" accept=".pdf,.doc,.docx">
                </div>
                <div class="mb-4">
                    <label class="form-label">
                        5. (Optional) Any other documents (such as Verification Proof)
                    </label>
                    <input class="form-control" type="file" name="other_documents" accept=".pdf,.doc,.docx">
                </div>
                <button type="button" class="btn btn-secondary" onclick="previousStep(3)">Previous</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            <div class="row mt-4">
                <div class="col-6 offset-6">
                    <a href="{{ route('gateway') }}" class="btn btn-light">Exit</a>
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

        let currentStep = 1;

        function showStep(step) {
            $('.step').hide();
            $('#step-' + step).show();
        }

        function nextStep(step) {
            currentStep = step;
            showStep(currentStep);
        }

        function previousStep(step) {
            currentStep = step;
            showStep(currentStep);
        }

        // Show the first step on page load
        showStep(currentStep);

        function saveAsDraft() {
            // Implement save as draft functionality here
            alert("Your form has been saved as a draft.");
        }
    </script>
@endsection
