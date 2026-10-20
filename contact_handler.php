<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get form data
$name    = $_POST['full_name'] ?? '';
$email   = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if(empty($name) || empty($email) || empty($message)){
    header("Location: index.php?status=error");
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = getenv('CONTACT_SMTP_HOST') ?: '';
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('CONTACT_SMTP_USERNAME') ?: '';
    $mail->Password   = getenv('CONTACT_SMTP_PASSWORD') ?: '';
    $contactEmail     = getenv('CONTACT_EMAIL') ?: '';

    if ($mail->Host === '' || $mail->Username === '' || $mail->Password === '' || $contactEmail === '') {
        throw new RuntimeException('Contact mail configuration is incomplete.');
    }
    
    // For Port 465, 'ssl' is the correct encryption protocol
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // =========================
    //  ADMIN EMAIL
    // =========================
    $mail->setFrom($contactEmail, 'BINTFX.US');
    $mail->addAddress($contactEmail);

  
    

    $mail->isHTML(true);
    $mail->Subject = "New Contact Inquiry - $name";

    $mail->Body = "
<div style='font-family:Segoe UI,Arial,sans-serif;background:#f4f6f8;padding:30px'>
    <div style='max-width:600px;margin:auto;background:#ffffff;border-radius:8px;overflow:hidden;border:1px solid #e0e0e0'>
        <div style='background:#28b02b;color:#fff;padding:20px'>
            <h2 style='margin:0;font-size:20px'>New Inquiry</h2>
        </div>
        <div style='padding:25px'>
            <table style='width:100%;border-collapse:collapse;'>
                <tr>
                    <td style='padding:10px;border-bottom:1px solid #eee;width:120px;color:#666'><strong>Name:</strong></td>
                    <td style='padding:10px;border-bottom:1px solid #eee'>$name</td>
                </tr>
                <tr>
                    <td style='padding:10px;border-bottom:1px solid #eee;color:#666'><strong>Email:</strong></td>
                    <td style='padding:10px;border-bottom:1px solid #eee'>$email</td>
                </tr>
                <tr>
                    <td style='padding:10px;color:#666'><strong>Message:</strong></td>
                    <td style='padding:10px'>$message</td>
                </tr>
            </table>
        </div>
        <div style='padding:15px;background:#f9fafb;font-size:12px;color:#666;text-align:center'>
            This email was generated automatically from bintfx.us
        </div>
    </div>
</div>
";

    $mail->send();

    // =========================
    //  AUTO REPLY
    // =========================
    $mail->clearAddresses();
    $mail->addAddress($email);
    $mail->Subject = "Inquiry Received";

    $mail->Body = "
<div style='font-family:Segoe UI,Arial;padding:25px;background:#f4f6f8'>
    <div style='max-width:600px;margin:auto;background:#fff;border-radius:8px;padding:30px;border:1px solid #e5e7eb'>
        <h2 style='margin-top:0;color:#0f172a'>We've received your message!</h2>
        <p>Hi <strong>$name</strong>,</p>
        <p>Thank you for reaching out to <strong>BINTFX</strong>. Our team has received your message and will get back to you shortly.This email was generated automatically from bintfx.us Please do not reply.</p>
       
        <p style='margin-top:30px'>Regards,<br><strong>BINTFX Team</strong></p>
    </div>
</div>
";

    $mail->send();

    //  REDIRECT SUCCESS
    header("Location: index.php?status=success");
    exit;

}  catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
