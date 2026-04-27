<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Get form data
$name       = $_POST['full_name'] ?? '';
$email      = $_POST['email'] ?? '';
$role       = $_POST['role'] ?? '';
$experience = $_POST['experience'] ?? '';
$skills     = $_POST['skills'] ?? '';
$portfolio  = $_POST['portfolio'] ?? '';
$message    = $_POST['message'] ?? '';

if(empty($name) || empty($email)){
    header("Location: index.php?status=error");
    exit;
}

$mail = new PHPMailer(true);

try {

    // SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'emial';
    $mail->Password   = 'app_pass';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // =========================
    // 📩 ADMIN EMAIL
    // =========================
    $mail->setFrom('email', 'BINTFX Website');
    $mail->addAddress('email');

    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
        $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    }

    $mail->isHTML(true);
    $mail->Subject = "New Application - $name";

    $mail->Body = "
<div style='font-family:Segoe UI,Arial,sans-serif;background:#f4f6f8;padding:30px'>
    
    <div style='max-width:700px;margin:auto;background:#ffffff;border-radius:8px;overflow:hidden;border:1px solid #e0e0e0'>
        
        <!-- Header -->
        <div style='background:#28b02b;color:#fff;padding:20px'>
            <h2 style='margin:0;font-size:20px'>Career Application</h2>
        </div>

        <!-- Table -->
        <table style='width:100%;border-collapse:collapse;font-size:14px'>
            
            <tr style='background:#f1f5f9'>
                <th style='text-align:left;padding:12px;border-bottom:1px solid #ddd'>Selected Fields</th>
                <th style='text-align:left;padding:12px;border-bottom:1px solid #ddd'>Adding Details</th>
            </tr>

            <tr>
                <td style='padding:10px;border-bottom:1px solid #eee'>Full Name</td>
                <td style='padding:10px;border-bottom:1px solid #eee'>$name</td>
            </tr>

            <tr style='background:#fafafa'>
                <td style='padding:10px;border-bottom:1px solid #eee'>Email</td>
                <td style='padding:10px;border-bottom:1px solid #eee'>$email</td>
            </tr>

            <tr>
                <td style='padding:10px;border-bottom:1px solid #eee'>Role</td>
                <td style='padding:10px;border-bottom:1px solid #eee'>$role</td>
            </tr>

            <tr style='background:#fafafa'>
                <td style='padding:10px;border-bottom:1px solid #eee'>Experience</td>
                <td style='padding:10px;border-bottom:1px solid #eee'>$experience</td>
            </tr>

            <tr>
                <td style='padding:10px;border-bottom:1px solid #eee'>Skills</td>
                <td style='padding:10px;border-bottom:1px solid #eee'>$skills</td>
            </tr>

            <tr style='background:#fafafa'>
                <td style='padding:10px;border-bottom:1px solid #eee'>Portfolio</td>
                <td style='padding:10px;border-bottom:1px solid #eee'>
                    <a href='$portfolio' style='color:#2563eb;text-decoration:none'>$portfolio</a>
                </td>
            </tr>

            <tr>
                <td style='padding:10px'>Message</td>
                <td style='padding:10px'>$message</td>
            </tr>

        </table>

        <!-- Footer -->
        <div style='padding:15px;background:#f9fafb;font-size:12px;color:#666;text-align:center'>
            This email was generated automatically from bintfx.us Please do not reply.
        </div>

    </div>

</div>
";

    $mail->send();

    // =========================
    // 💌 AUTO REPLY
    // =========================
    $mail->clearAddresses();
    $mail->clearAttachments();

    $mail->addAddress($email);
    $mail->Subject = " Application Received";

  $mail->Body = "
<div style='font-family:Segoe UI,Arial;padding:25px;background:#f4f6f8'>
    
    <div style='max-width:600px;margin:auto;background:#fff;border-radius:8px;padding:25px;border:1px solid #e5e7eb'>
        
        <h2 style='margin-top:0;color:#0f172a'>Application Received</h2>

        <p>Hi <strong>$name</strong>,</p>

        <p>
            Thank you for applying for the <strong>$role</strong> position at <strong>BINTFX</strong>.
            We’ve received your application and our team will review it shortly.
        </p>

        <div style='margin:20px 0;padding:15px;background:#28b02b;border-radius:6px'>
            <strong>Summary:</strong><br>
            Experience: $experience
        </div>

        <p>We’ll get back to you soon.</p>

        <p style='margin-top:30px'>
            Regards,<br>
            <strong>BINTFX Team</strong>
        </p>

    </div>

</div>
";

    $mail->send();

    // ✅ REDIRECT SUCCESS
    header("Location: index.php?status=success");
    exit;

} catch (Exception $e) {
    header("Location: index.php?status=error");
    exit;
}
