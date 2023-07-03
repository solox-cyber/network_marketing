<!DOCTYPE html>
<html>
<head>
    <title>Account Activated</title>
</head>
<body>
    <h1>Account Activated Successfully</h1>
    <p>Your account has been successfully activated. You can now log in using the link below:</p>
    <a href="{{ route('login') }}">Login</a>
    {{ url('http://127.0.0.1:8000/login/') }}
    <p>If you have any questions, please contact our support team.</p>
</body>
</html>
