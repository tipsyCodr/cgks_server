<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f5f5f5;
            padding: 15px;
            text-align: center;
            border-bottom: 3px solid #3490dc;
        }
        .content {
            padding: 20px;
            background-color: #fff;
        }
        .footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #2f2f2f;
            border-top: 1px solid #ddd;
        }
        .button {
            display: inline-block;
            background-color: #3490dc;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to {{ config('app.name') }}</h1>
    </div>
    
    <div class="content">
        <h2>Hello {{ $user->name }},</h2>
        
        <p>Your account has been created in our system. Here are your account details:</p>
        
        <ul>
            <li><strong>Email:</strong> {{ $user->email }}</li>
            <li><strong>Mobile:</strong> {{ $user->mobile }}</li>
            @if(!empty($password))
            <li><strong>Password:</strong> {{ $password }}</li>
            @endif
        </ul>
        
        <p>You can now log in to your account with the provided credentials.</p>
        
        <a href="{{ url('/login') }}" class="button">Login Now</a>
        
        <p>If you have any questions, please contact our support team.</p>
        
        <p>Thank you,<br>{{ config('app.name') }} Team</p>
    </div>
    
    <div class="footer">
        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </div>
</body>
</html> 