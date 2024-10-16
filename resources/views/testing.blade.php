<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        body {
            background-color: #6c757d; /* Bootstrap secondary color */
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff; /* White background for the form */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Test Stripe Payment</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('testing.charge') }}" method="POST" id="payment-form">
            @csrf
            <div class="form-group">
                <label for="customer-name">Customer Name</label>
                <input type="text" class="form-control" name="customer_name" id="customer-name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount (in cents)</label>
                <input type="number" class="form-control" name="amount" id="amount" required>
            </div>

            <div class="form-group">
                <label for="card-number">Card Number</label>
                <div id="card-number" class="form-control"></div>
                <div id="card-errors" role="alert" class="text-danger mt-2"></div>
            </div>
            <div class="form-group">
                <label for="card-expiry">Expiry Date</label>
                <div id="card-expiry" class="form-control"></div>
            </div>
            <div class="form-group">
                <label for="card-cvc">CVC</label>
                <div id="card-cvc" class="form-control"></div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Pay</button>
        </form>
    </div>

    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        
        var style = {
            base: {
                color: '#32325d',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        var cardNumber = elements.create('cardNumber', {style: style});
        cardNumber.mount('#card-number');

        var cardExpiry = elements.create('cardExpiry', {style: style});
        cardExpiry.mount('#card-expiry');

        var cardCvc = elements.create('cardCvc', {style: style});
        cardCvc.mount('#card-cvc');

        cardNumber.on('change', function(event) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = event.error ? event.error.message : '';
        });

        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(cardNumber).then(function(result) {
                if (result.error) {
                    document.getElementById('card-errors').textContent = result.error.message;
                } else {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    this.appendChild(hiddenInput);
                    this.submit();
                }
            }.bind(this));
        });
    </script>
</body>
</html>