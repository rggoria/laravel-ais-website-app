@extends('gateway.layouts.app')

@section('title')
    Services [Product List] - AIS
@endsection

@section('content')

{{-- Eccomerce Products List --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">Product Details</h2>
    <div class="card p-4 shadow-sm">

        <p class="text-muted text-center">Please answer the following questions as accurately as possible.</p>

        <form>
            <div class="mb-4">
                <label class="form-label">Has the candidate ever studied, worked or stayed long-term (not as a tourist) in Singapore?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="singapore_experience" id="currently_in_sg" value="currently" required>
                    <label class="form-check-label" for="currently_in_sg">Yes, candidate is currently working/studying/staying in Singapore</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="singapore_experience" id="past_sg" value="past">
                    <label class="form-check-label" for="past_sg">Yes, candidate has worked/studied/stayed in Singapore in the past</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="singapore_experience" id="no_experience" value="no">
                    <label class="form-check-label" for="no_experience">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="singapore_experience" id="fin" value="fin">
                    <label class="form-check-label" for="fin">No, but candidate has a Foreign Identification Number (FIN) issued by Singapore</label>
                </div>
            </div>
        
            <div class="mb-4">
                <label class="form-label">Is the candidate a partner, sole proprietor or director of any Singapore-registered organisation?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="organisation_role" id="yes_role" value="yes" required>
                    <label class="form-check-label" for="yes_role">Yes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="organisation_role" id="no_role" value="no">
                    <label class="form-check-label" for="no_role">No</label>
                </div>
            </div>
        
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
        
            <div class="mb-4">
                <label class="form-label">2. Complete the <a href="https://www.mom.gov.sg/-/media/mom/documents/work-passes-and-permits/ep-and-s-pass-candidate-form.pdf" target="_blank">candidate’s form</a> from MOM’s website and upload it here.</label>
                <input class="form-control mt-2" type="file" name="candidate_form" accept=".pdf" required>
            </div>
        
            <div class="mb-4">
                <label class="form-label">3. Please upload a clear copy of the candidate’s passport page showing the personal particulars</label>
                <input class="form-control" type="file" name="passport_copy" accept=".jpg,.jpeg,.png,.pdf" required>
            </div>
        
            <div class="mb-4">
                <label class="form-label">
                    4. (Optional) If the name on the passport differs from other documents (e.g. Educational Certificate, National Identity Card), please upload supporting documents (e.g. deed poll, marriage certificate)
                </label>
                <input class="form-control" type="file" name="supporting_documents" accept=".jpg,.jpeg,.png,.pdf">
            </div>
        
            <div class="mb-4">
                <label class="form-label">
                    5. (Optional) Any other documents (such as Verification Proof)
                </label>
                <input class="form-control" type="file" name="other_documents" accept=".jpg,.jpeg,.png,.pdf">
            </div>
            
            <div class="row">
                <div class="col-6 offset-6">
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" onclick="saveAsDraft()">Save as Draft</button>
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
        function saveAsDraft() {
            // Implement save as draft functionality here
            alert("Your form has been saved as a draft.");
        }
    </script>
@endsection