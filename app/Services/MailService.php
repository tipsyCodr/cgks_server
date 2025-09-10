<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailService
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->setupMailer();
    }

    private function setupMailer()
    {
        try {
            // Server settings
            $this->mail->isSMTP();
            $this->mail->Host = config('phpmailer.host');
            $this->mail->SMTPAuth = config('phpmailer.auth', true);
            $this->mail->Username = config('phpmailer.username');
            $this->mail->Password = config('phpmailer.password');
            $this->mail->SMTPSecure = config('phpmailer.encryption');
            $this->mail->Port = config('phpmailer.port');
            $this->mail->setFrom(
                config('phpmailer.from.address'), 
                config('phpmailer.from.name')
            );
            
            // Debug level
            $this->mail->SMTPDebug = config('phpmailer.debug', 0);
            
            // Connection timeout
            $this->mail->Timeout = config('phpmailer.timeout', 30);
            
            // Character encoding
            $this->mail->CharSet = config('phpmailer.charset', 'UTF-8');
        } catch (Exception $e) {
            throw new \Exception("Mail setup error: " . $this->mail->ErrorInfo);
        }
    }

    /**
     * Send email with PHPMailer
     *
     * @param string $to Email recipient
     * @param string $subject Email subject
     * @param string $body Email body content (HTML)
     * @param string $altBody Plain text alternative body
     * @return bool Success status
     */
    public function send($to, $subject, $body, $altBody = '')
    {
        try {
            // Recipients
            $this->mail->clearAddresses();
            $this->mail->addAddress($to);
            
            // Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;
            $this->mail->AltBody = $altBody ?: strip_tags($body);
            
            // Send the email
            $this->mail->send();
            return true;
        } catch (Exception $e) {
            \Log::error("Mail sending error: " . $this->mail->ErrorInfo);
            return false;
        }
    }
} 