<!DOCTYPE html>
<html>
<head>
    <title>Consultation Inquiry</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f4;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #333; text-align: center;">
            <img src="http://18.143.174.43/asset/images/homepage/ais_logo.jpg" alt="Logo" style="width: 200px; height: auto;">
        </h1>
        <h2 style="color: #333;">Consultation Inquiry</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Brief Description:</strong></p>
        <p>{{ $data['description'] }}</p>
        <footer style="margin-top: 20px; text-align: center; font-size: 0.9em; color: #666;">
            <p>From the All Immigration Services (AIS) Team</p>
        </footer>
    </div>
</body>
</html>
