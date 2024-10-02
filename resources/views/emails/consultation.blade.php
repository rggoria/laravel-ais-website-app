<!DOCTYPE html>
<html>
<head>
    <title>Consultation Inquiry</title>
</head>
<body>
    <h1>Consultation Inquiry</h1>
    <p>
        <strong>Name:</strong> {{ $data['name'] }}
    </p>
    <p>
        <strong>Email:</strong> {{ $data['email'] }}
    </p>
    <p>
        <strong>Brief Description:</strong>
    </p>
    <p>
        {{ $data['description'] }}
    </p>
</body>
</html>