<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    // Check if PHPMailer class exists and can be instantiated
    $mail = new PHPMailer(true);
    echo "PHPMailer class found and successfully instantiated.\n";
    
    // Print PHPMailer version
    echo "PHPMailer Version: " . $mail::VERSION . "\n";
    
    echo "All looks good! You can use PHPMailer in your application.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
} catch (\Error $e) {
    echo "PHP Error: " . $e->getMessage() . "\n";
} 