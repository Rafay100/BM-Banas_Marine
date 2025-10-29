<?php
// contact.php - simple cPanel-compatible processor
$to_email = "info@bnasmarine.com"; // change to real receiving email

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name == '' || ($email == '' && $phone == '')) {
    echo "<script>alert('Please provide your name and either email or phone.'); history.back();</script>";
    exit;
}

$subject = "Website inquiry: $service";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message\n\nTime: ".date('Y-m-d H:i:s');
$headers = "From: noreply@bnasmarine.com\r\nReply-To: $email\r\n";

// Save to log
$logfile = __DIR__.'/contact_log.txt';
$entry = date('Y-m-d H:i:s')." | $name | $email | $phone | $service | ".str_replace(array("\r","\n"), ' ', $message)."\n";
file_put_contents($logfile, $entry, FILE_APPEND);

// Try mail()
$sent = @mail($to_email, $subject, $body, $headers);

if ($sent) {
    echo "<script>alert('Message sent. Thank you.'); window.location='contact.html';</script>";
} else {
    echo "<script>alert('Message received but email not sent. Please contact via phone.'); window.location='contact.html';</script>";
}
?>
