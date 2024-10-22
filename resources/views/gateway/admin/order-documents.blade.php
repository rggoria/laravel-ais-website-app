@extends('layouts.admin')

@section('title')
    Services [Product List] - AIS Gateway
@endsection

@section('content')

{{-- User Product Details --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">User Product Details</h2>
  
    @if(!$hasDocuments)
        <div class="alert alert-secondary text-center shadow-sm p-4">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <i class="fas fa-file fa-2x me-2"></i>
                <h4 class="alert-heading mb-0">Document List is Empty</h4>
            </div>
            <p>It appears that no documents have been uploaded for this order.</p>
            <hr>
            <p class="mb-0">Please ensure that the necessary documents are collected and uploaded to maintain accurate records.</p>
        </div>    
    @else
        <div class="card p-4 shadow-sm">
            <ol class="list-group">
                @if(isset($existingDocuments['employment_contract']))
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-file-signature"></i> Signed Employment Contract</span>
                        <a href="{{ asset($existingDocuments['employment_contract']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                    </li>
                @endif
                @if(isset($existingDocuments['candidate_form']))
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-user-edit"></i> Candidate Form</span>
                        <a href="{{ asset($existingDocuments['candidate_form']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                    </li>
                @endif
                @if(isset($existingDocuments['passport_copy']))
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-id-card"></i> Passport Copy</span>
                        <a href="{{ asset($existingDocuments['passport_copy']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                    </li>
                @endif
                @if(isset($existingDocuments['supporting_documents']))
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-file-alt"></i> Supporting Documents</span>
                        <a href="{{ asset($existingDocuments['supporting_documents']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                    </li>
                @endif
                @if(isset($existingDocuments['other_documents']))
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-file"></i> Other Documents</span>
                        <a href="{{ asset($existingDocuments['other_documents']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                    </li>
                @endif
            </ol>
        </div>
    @endif

</section>


@endsection
