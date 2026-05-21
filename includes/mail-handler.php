<?php
/**
 * AppsDeddy - Contact Form Mail Handler
 * Uses PHPMailer + Titan Email SMTP
 * Receives AJAX POST requests from the contact form
 */

define('APPSDEDDY', true);
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Rate limiting via session
$now = time();
if (isset($_SESSION['last_submit']) && ($now - $_SESSION['last_submit']) < 30) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Please wait before submitting again.']);
    exit;
}

// CSRF validation
$csrfToken = $_POST['csrf_token'] ?? '';
if (!validateCsrfToken($csrfToken)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Security validation failed. Please refresh the page and try again.']);
    exit;
}

// Honeypot check (bot trap)
if (!empty($_POST['website_url'])) {
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Thank you! We\'ll get back to you within 24 hours.']);
    exit;
}

// Collect & sanitize inputs
$name    = sanitize($_POST['name'] ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = sanitize($_POST['phone'] ?? '');
$service = sanitize($_POST['service'] ?? '');
$budget  = sanitize($_POST['budget'] ?? '');
$message = sanitize($_POST['message'] ?? '');

// Server-side validation
$errors = [];

if (empty($name) || strlen($name) < 2) {
    $errors[] = 'Please provide your full name.';
}
if (strlen($name) > 100) {
    $errors[] = 'Name must be under 100 characters.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please provide a valid email address.';
}
if (empty($service)) {
    $errors[] = 'Please select a service.';
}
if (empty($message) || strlen($message) < 10) {
    $errors[] = 'Please describe your project (at least 10 characters).';
}
if (strlen($message) > 5000) {
    $errors[] = 'Message must be under 5,000 characters.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Prepare labels
$serviceLabel = getServiceLabel($service);
$budgetLabel  = $budget ? getBudgetLabel($budget) : 'Not specified';
$phoneDisplay = $phone ?: 'Not provided';

// ─── Build the Email ─────────────────────────────────────────────────────────

$formattedDate = date('F j, Y \a\t g:i A T');
$hostName = $_SERVER['HTTP_HOST'] ?? 'appsdeddy.com';
$emailSubject = "New Project Inquiry from {$name} - {$serviceLabel}";

$emailBodyHtml = '<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    . 'body{font-family:"Segoe UI",Arial,sans-serif;background:#f4f5f7;margin:0;padding:0}'
    . '.wrapper{max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.08)}'
    . '.header{background:linear-gradient(135deg,#6366f1 0%,#ec4899 100%);padding:32px 40px;text-align:center}'
    . '.header h1{color:#fff;margin:0;font-size:22px;font-weight:700}'
    . '.header p{color:rgba(255,255,255,.85);margin:8px 0 0;font-size:14px}'
    . '.body{padding:32px 40px}'
    . '.field{margin-bottom:20px;border-bottom:1px solid #eee;padding-bottom:16px}'
    . '.field:last-child{border-bottom:none}'
    . '.label{font-size:11px;text-transform:uppercase;letter-spacing:1px;color:#6366f1;font-weight:700;margin-bottom:4px}'
    . '.value{font-size:15px;color:#1f2937;line-height:1.5}'
    . '.message-box{background:#f8f9fc;border-left:4px solid #6366f1;padding:16px 20px;border-radius:0 8px 8px 0;margin-top:4px}'
    . '.footer{background:#f8f9fc;padding:20px 40px;text-align:center;font-size:12px;color:#9ca3af}'
    . '.badge{display:inline-block;background:linear-gradient(135deg,#6366f1,#ec4899);color:#fff;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600}'
    . '</style></head><body>'
    . '<div style="padding:20px 0;background:#f4f5f7"><div class="wrapper">'
    . '<div class="header"><h1>New Project Inquiry</h1><p>Received from appsdeddy.com contact form</p></div>'
    . '<div class="body">'
    . '<div class="field"><div class="label">Full Name</div><div class="value">' . $name . '</div></div>'
    . '<div class="field"><div class="label">Email Address</div><div class="value"><a href="mailto:' . $email . '" style="color:#6366f1;text-decoration:none;">' . $email . '</a></div></div>'
    . '<div class="field"><div class="label">Phone Number</div><div class="value">' . $phoneDisplay . '</div></div>'
    . '<div class="field"><div class="label">Service Needed</div><div class="value"><span class="badge">' . $serviceLabel . '</span></div></div>'
    . '<div class="field"><div class="label">Estimated Budget</div><div class="value">' . $budgetLabel . '</div></div>'
    . '<div class="field"><div class="label">Project Details</div><div class="message-box">' . nl2br($message) . '</div></div>'
    . '</div>'
    . '<div class="footer">&copy; ' . $hostName . ' &bull; AppsDeddy Contact Form &bull; Sent on ' . $formattedDate . '</div>'
    . '</div></div></body></html>';

$emailBodyText = <<<TEXT
NEW PROJECT INQUIRY - AppsDeddy
================================

Name:     {$name}
Email:    {$email}
Phone:    {$phoneDisplay}
Service:  {$serviceLabel}
Budget:   {$budgetLabel}

Project Details:
{$message}

---
Sent from appsdeddy.com on {$formattedDate}
TEXT;

// ─── Auto-Reply to Client ────────────────────────────────────────────────────

$autoReplySubject = "Thank you for contacting AppsDeddy, {$name}!";
$siteYear = SITE_YEAR;

$autoReplyHtml = '<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    . 'body{font-family:"Segoe UI",Arial,sans-serif;background:#f4f5f7;margin:0;padding:0}'
    . '.wrapper{max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.08)}'
    . '.header{background:linear-gradient(135deg,#6366f1 0%,#ec4899 100%);padding:40px;text-align:center}'
    . '.header h1{color:#fff;margin:0;font-size:24px;font-weight:700}'
    . '.body{padding:32px 40px;color:#374151;line-height:1.7}'
    . '.body h2{color:#1f2937;font-size:20px;margin-top:0}'
    . '.highlight{background:linear-gradient(135deg,#eef2ff,#fce7f3);border-radius:8px;padding:20px;margin:20px 0}'
    . '.cta{text-align:center;margin:28px 0}'
    . '.cta a{display:inline-block;background:linear-gradient(135deg,#6366f1,#ec4899);color:#fff;padding:14px 32px;border-radius:8px;text-decoration:none;font-weight:600;font-size:15px}'
    . '.footer{background:#f8f9fc;padding:20px 40px;text-align:center;font-size:12px;color:#9ca3af}'
    . '</style></head><body>'
    . '<div style="padding:20px 0;background:#f4f5f7"><div class="wrapper">'
    . '<div class="header"><h1>Thank You, ' . $name . '!</h1></div>'
    . '<div class="body">'
    . '<h2>We\'ve received your inquiry</h2>'
    . '<p>Thank you for reaching out to <strong>AppsDeddy</strong>. We\'re excited about the opportunity to work with you on your <strong>' . $serviceLabel . '</strong> project.</p>'
    . '<div class="highlight">'
    . '<p style="margin:0"><strong>What happens next?</strong></p>'
    . '<ul style="margin:8px 0 0;padding-left:20px">'
    . '<li>Our team will review your project details</li>'
    . '<li>A senior consultant will reach out within <strong>24 hours</strong></li>'
    . '<li>We\'ll schedule a free consultation to discuss your vision</li>'
    . '</ul></div>'
    . '<p>In the meantime, feel free to explore our <a href="https://www.behance.net/AppsDeddy" style="color:#6366f1">portfolio</a> to see our recent work.</p>'
    . '<div class="cta"><a href="https://www.behance.net/AppsDeddy">View Our Portfolio</a></div>'
    . '<p style="color:#6b7280;font-size:14px">If you have any urgent questions, reply directly to this email or contact us at <a href="mailto:info@appsdeddy.com" style="color:#6366f1">info@appsdeddy.com</a>.</p>'
    . '<p>Best regards,<br><strong>The AppsDeddy Team</strong><br><em>Daddy Knows Better</em></p>'
    . '</div>'
    . '<div class="footer">AppsDeddy &bull; 8520 Allison Pointe Blvd Ste 223, Indianapolis, IN 46250<br>&copy; ' . $siteYear . ' AppsDeddy. All rights reserved.</div>'
    . '</div></div></body></html>';

// ─── Load PHPMailer (direct include - no Composer needed) ────────────────────

require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

try {
    // 1. Send notification to admin
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
    $mail->addAddress(ADMIN_EMAIL, SITE_NAME);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = $emailSubject;
    $mail->Body    = $emailBodyHtml;
    $mail->AltBody = $emailBodyText;

    $mail->send();

    // 2. Send auto-reply to client
    $reply = new PHPMailer(true);
    $reply->isSMTP();
    $reply->Host       = SMTP_HOST;
    $reply->SMTPAuth   = true;
    $reply->Username   = SMTP_USERNAME;
    $reply->Password   = SMTP_PASSWORD;
    $reply->SMTPSecure = SMTP_SECURE;
    $reply->Port       = SMTP_PORT;
    $reply->CharSet    = 'UTF-8';

    $reply->setFrom(SMTP_FROM, SMTP_FROM_NAME);
    $reply->addAddress($email, $name);

    $reply->isHTML(true);
    $reply->Subject = $autoReplySubject;
    $reply->Body    = $autoReplyHtml;

    $reply->send();

    // Update rate-limit
    $_SESSION['last_submit'] = $now;

    // Regenerate CSRF token after successful submission
    unset($_SESSION['csrf_token']);

    echo json_encode([
        'success' => true,
        'message' => 'Thank you, ' . $name . '! Your message has been sent successfully. We\'ll get back to you within 24 hours.'
    ]);

} catch (Exception $e) {
    error_log('AppsDeddy Mail Error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'We couldn\'t send your message right now. Please email us directly at info@appsdeddy.com.'
    ]);
}
