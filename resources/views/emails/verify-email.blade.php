<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
</head>
<body>
    <h1>Verify Your Email Address</h1>
    <p>Thank you for registering. Please verify your email address by clicking the button below:</p>
    <a href="{{ $url }}" style="display:inline-block;padding:10px 20px;background-color:#4CAF50;color:#fff;text-decoration:none;">Verify Email Address</a>
    <p>If you did not create an account, no further action is required.</p>
    <p>Thanks,<br>{{ config('app.name') }}</p>
</body>
</html>