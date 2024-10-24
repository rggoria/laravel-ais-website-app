<!DOCTYPE html>
<html>
<head>
    <title>Reset Your AIS Password</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f4;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #333; text-align: center;">
            <img src="https://all-immigration.biz/asset/images/homepage/ais_logo.jpg" alt="Logo" style="width: 200px; height: auto;">
        </h1>
        <h2 style="color: #333;">Reset Your AIS Password</h2>
        <p>Hi {{ $user->first_name }},</p> <!-- Use the first name here -->
        <p>We're sending you this email because you requested a password reset. Click on the button below to create a new password:</p>
        <p style="text-align: center;">
            <a href="{{ url('password/reset/'.$token.'?email='.$user->email) }}" style="display: inline-block; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-weight: bold;">Set a New Password</a>
        </p>
        <p>If you didn't request a password reset, you can ignore this email. Your password will not be changed.</p>
        <footer style="margin-top: 20px; text-align: center; font-size: 0.9em; color: #666;">
            <p>From the All Immigration Services (AIS) Team</p>
        </footer>
    </div>
</body>
</html>
