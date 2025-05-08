<?php  
// Include PHPMailer classes manually  
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Use PHPMailer namespaces  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json'); // Set the content type to JSON  
$response = ['success' => false, 'message' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $business_name = filter_var($_POST['business_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $mail = new PHPMailer(true);

    try {
        // Server settings  
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Your SMTP server  
        $mail->SMTPAuth = true;
        $mail->Username = 'info@appsdeddy.com'; // Replace with your actual email  
        $mail->Password = 'Info@Email@123'; // Replace with your actual email password  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Sender and recipients  
        $mail->setFrom('info@appsdeddy.com', 'Contact Form');
        $mail->addAddress('info@appsdeddy.com'); // Your admin email  
        $mail->addAddress('shasnainabbas99@gmail.com'); // Your personal email  
        $mail->addReplyTo($email, $name);

        // Content  
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Business Name:</strong> $business_name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
        ";
        $mail->AltBody = "Name: $name\nPhone: $phone\nBusiness Name: $business_name\nEmail: $email\nMessage: $message";

        $mail->send();
        $response['success'] = true;
        $response['message'] = "Message sent successfully!";
    } catch (Exception $e) {
        $response['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

echo json_encode($response); // Return the response as JSON  
?>
