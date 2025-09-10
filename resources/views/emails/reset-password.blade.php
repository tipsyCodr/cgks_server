<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">

    <h2>Reset Password</h2>

    <p>You are receiving this email because we received a password reset request for your account.</p>

    <p style="margin: 30px 0;">
        <a href="{{ $url }}" style="display: inline-block; padding: 10px 20px; background-color: #4F46E5; color: white; text-decoration: none; border-radius: 5px;">
            Reset Password
        </a>
    </p>

    <p>This password reset link will expire in 60 minutes.</p>

    <p>If you did not request a password reset, no further action is required.</p>

    <p>Regards,<br>{{ config('app.name') }}</p>

    <hr>

    <p style="font-size: 0.875rem;">
        If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:<br>
        <a href="{{ $url }}">{{ $url }}</a>
    </p>

</body>
</html>
