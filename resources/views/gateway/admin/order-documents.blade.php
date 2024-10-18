@extends('layouts.admin')

@section('title')
    Services [Product List] - AIS Gateway
@endsection

@section('content')

{{-- Ecommerce Products List --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">User Product Details</h2>
    <div class="card p-4 shadow-sm">
        <ol class="list-group">
            @if(isset($existingDocuments['employment_contract']))
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <i class="fas fa-file-signature"></i> Signed Employment Contract
                    </span>
                    <a href="{{ asset($existingDocuments['employment_contract']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                </li>
            @endif
            @if(isset($existingDocuments['candidate_form']))
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <i class="fas fa-user-edit"></i> Candidate Form
                    </span>
                    <a href="{{ asset($existingDocuments['candidate_form']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                </li>
            @endif
            @if(isset($existingDocuments['passport_copy']))
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <i class="fas fa-id-card"></i> Passport Copy
                    </span>
                    <a href="{{ asset($existingDocuments['passport_copy']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                </li>
            @endif
            @if(isset($existingDocuments['supporting_documents']))
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <i class="fas fa-file-alt"></i> Supporting Documents
                    </span>
                    <a href="{{ asset($existingDocuments['supporting_documents']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                </li>
            @endif
            @if(isset($existingDocuments['other_documents']))
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <i class="fas fa-file"></i> Other Documents
                    </span>
                    <a href="{{ asset($existingDocuments['other_documents']->file_path) }}" target="_blank" class="btn btn-link">View Document</a>
                </li>
            @endif
        </ol>
    </div>
</section>


@endsection
