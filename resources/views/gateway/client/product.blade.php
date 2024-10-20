@extends('layouts.client')

@section('title')
    {{ $productItem->name }} - AIS Gateway
@endsection

@section('css')
    <style>           
        .form-check-input:checked + label {
            background-color: #343a40;
            color: white;
        }
    </style>
@endsection

@section('content')

{{-- Ecommerce Product Header Section --}}
<section class="container my-5">

    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <div class="row my-5">
        <div class="col-sm-12 col-md-12 col-lg-7">       
            <h1 class="fw-bolder">
                {{ $productItem->name }}
            </h1>  
            <p>
                {{ $productItem->description }}
            </p>
            <ul>
                @foreach (json_decode($productItem->details) as $detail)
                    <li>{{ $detail }}</li>
                @endforeach
            </ul>    
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-disclaimer-tab" data-bs-toggle="tab" data-bs-target="#nav-disclaimer" type="button" role="tab" aria-controls="nav-disclaimer" aria-selected="true">Disclaimer</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-disclaimer" role="tabpanel" aria-labelledby="nav-disclaimer-tab" tabindex="0">
                    <p>
                        {{ $productItem->disclaimer }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">       
            <h1 class="fw-bolder" id="price">
                S${{ $productItem->prices[0]->price }} (inclusive of S$365 government fees - MOM)
            </h1>
            <form id="addToCartForm">
                @csrf
                <input id="variant" type="hidden" name="variant" value="Standard">
                <div>
                    <h4 class="fw-bolder my-3">
                        Variant
                    </h4>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100 p-0">
                                <input class="form-check-input" type="radio" name="options" id="radio1" value="{{ $productItem->prices[0]->price }}" style="display: none;" autocomplete="off" checked>
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio1">
                                    <span>
                                        Standard Package
                                        <br>
                                        <small>Processed within 3 business days</small>                                        
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100 p-0">
                                <input class="form-check-input" type="radio" name="options" id="radio2" value="{{ $productItem->prices[1]->price }}" style="display: none;" autocomplete="off">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio2">
                                    <span>
                                        Express Package
                                        <br>                                  
                                        <small>Processed within 24 hours (Business days only)</small>                                        
                                    </span>
                                </label>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="my-3">
                            <h4 class="fw-bolder">
                                Quantity
                            </h4>
                            <input name="quantity" type="number" placeholder="Quantity" class="form-control" min="1" value="1" required>
                        </div>                        
                    </div>
                </div>            
                <button type="submit" class="btn btn-dark w-100 mb-3">Add to cart</button>
                <p class="text-center">Bulk order discounts available</p>
            </form>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {

        // SweetAlert for success messages
        @if(session('success'))
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        // Store the decoded prices in a variable
        var prices = {
            standard: parseFloat("{{ $productItem->prices[0]->price }}"),
            express: parseFloat("{{ $productItem->prices[1]->price }}")
        };
        $('#price').html('S$' + prices.standard.toLocaleString(undefined, { minimumFractionDigits: 2 }) + ' (inclusive of S$365 government fees - MOM)');
        $('input[name="options"]').change(function() {
            var selectedId = $(this).attr('id');
            if (selectedId === 'radio2') {
                $('#price').html('S$' + prices.express.toLocaleString(undefined, { minimumFractionDigits: 2 }) + ' (inclusive of S$365 government fees - MOM)');
                $('#variant').val("Express");
            } else {
                $('#price').html('S$' + prices.standard.toLocaleString(undefined, { minimumFractionDigits: 2 }) + ' (inclusive of S$365 government fees - MOM)');
                $('#variant').val("Standard");
            }
        });

        $('#addToCartForm').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the product ID, quantity, and variant
            let productId = "{{ $productItem->id }}";
            let quantity = $('input[name="quantity"]').val(); // Retrieve the entered quantity
            let price = $('input[name="options"]:checked').val(); // Ensure the correct value is selected
            let variant = $('#variant').val(); // Get the variant value

            $.ajax({
                type: 'POST',
                url: '{{ route("cart.add") }}', // Use the named route
                data: {
                    id: productId,
                    quantity: quantity,
                    price: price,
                    variant: variant,
                    _token: '{{ csrf_token() }}' // Include CSRF token for security
                },
                success: function(response) {
                    Livewire.dispatch('cartUpdated'); // Emit event to update cart count
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'Error!',
                        text: xhr.responseJSON.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>
@endsection