<?php

require __DIR__ . '/../vendor/autoload.php';

// Mock Laravel's config function if not in Laravel environment
if (!function_exists('config')) {
    function config($key, $default = null) {
        $keys = explode('.', $key);
        
        if ($keys[0] === 'phpmailer') {
            $configs = [
                'host' => 'smtp.example.com',
                'port' => 587,
                'username' => 'test@example.com',
                'password' => 'test-password',
                'encryption' => 'tls',
                'auth' => true,
                'debug' => 0,
                'charset' => 'UTF-8',
                'timeout' => 30,
                'from' => [
                    'address' => 'from@example.com',
                    'name' => 'Test Sender',
                ],
            ];
            
            if (count($keys) === 1) {
                return $configs;
            }
            
            if (count($keys) === 2) {
                return $configs[$keys[1]] ?? $default;
            }
            
            if (count($keys) === 3 && $keys[1] === 'from') {
                return $configs['from'][$keys[2]] ?? $default;
            }
        }
        
        return $default;
    }
}

// Register autoloader for our own classes
spl_autoload_register(function($class) {
    $prefix = 'App\\Services\\';
    $base_dir = __DIR__ . '/../app/Services/';
    
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
});

// Test the MailService class
try {
    $service = new \App\Services\MailService();
    echo "MailService class loaded successfully!\n";
    echo "If you're seeing this message, PHPMailer is correctly configured in MailService.\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    
    // Check if it's a PHPMailer class not found issue
    if (strpos($e->getMessage(), "Class \"PHPMailer\\PHPMailer\\PHPMailer\" not found") !== false) {
        echo "The PHPMailer class could not be found by the MailService class.\n";
        echo "This could be due to namespace issues or autoloading problems.\n";
    }
} 