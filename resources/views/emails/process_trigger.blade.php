<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f4;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <p><strong>Dear {{ $order->candidate_name }},</strong></p>
        <p>
            Thank you for your order with All Immigration Services! We’re pleased to confirm that your payment was successfully processed.
        </p>
        <p>
            You now have access to our customer portal, <a href="http://18.143.174.43/login"><strong>AIS Gateway</strong></a>, where you can:
        </p>
        <ul>
            <li>Track the status of your current order</li>
            <li>Answer a few questions to help us process your order smoothly</li>
            <li>Upload any required documents</li>
            <li>Place additional orders if needed</li>
        </ul>
        <br>
        <p>
            <strong>To access AIS Gateway</strong>, please log in using the following credentials. You will be required to select a new password after logging in for the first time.
        </p>
        <br>
        <p>
            Website: <a href="http://18.143.174.43/login">www.gateway.all-immigration.com</a>
        </p>
        <p>
            Email address: {{ $order->candidate_email }}
        </p>
        <p>
            One-time password: <strong>{{ $otp }}</strong>
        </p>
        <br>
        <p>
            If you experience any issues or have questions, please feel free to reach out to us.
            Thank you for choosing All Immigration Services. We look forward to supporting you in your immigration journey!
        </p>
        <br>
        <p>Warm regards,</p>
        <p><strong>All Immigration Services Team</strong></p>
        <img src="http://18.143.174.43/asset/images/homepage/ais_logo.jpg" alt="Logo" style="width: 200px; height: auto;">
        <footer style="margin-top: 20px; text-align: center; font-size: 0.9em; color: #666;">
            <p>From the All Immigration Services (AIS) Team</p>
        </footer>
    </div>
</body>
</html>
