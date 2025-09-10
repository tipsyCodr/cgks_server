<?php

return [
    /*
    |--------------------------------------------------------------------------
    | PHPMailer Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for configuring PHPMailer settings for shared hosting
    | environments where Laravel's built-in mail system might not work well.
    |
    */

    'host' => env('MAIL_HOST', 'smtp.example.com'),
    'port' => env('MAIL_PORT', 587),
    'username' => env('MAIL_USERNAME', 'your-username@example.com'),
    'password' => env('MAIL_PASSWORD', 'your-password'),
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
    
    // Debug level (0-4)
    'debug' => env('MAIL_DEBUG', 0),
    
    // Additional settings
    'charset' => 'utf-8',
    'auth' => true,
    'timeout' => 30,
]; 