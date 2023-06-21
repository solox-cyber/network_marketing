<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Verification</title>
</head>
<body>
    <h1>Email Verification</h1>
    <p>Hello {{ $user->name }},</p>
    <p>Thank you for registering! Please click the link below to verify your email address and activate your account:</p>
    <p>Serial Number: {{ $serialNumber }}</p>
    <p><a href="{{ $verificationUrl }}">Verify Email Address</a></p>
    <p>If you did not create an account, you can safely ignore this email.</p>
</body>
</html>
