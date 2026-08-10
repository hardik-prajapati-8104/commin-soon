<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.html');
    exit;
}

// Get form data
$name    = trim($_POST['name'] ?? '');
$contact = trim($_POST['contact'] ?? '');
$email   = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate
if ($name === '' || $contact === '' || $email === '' || $service === '' || $message === '') {
    echo "Please fill all required fields.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address.";
    exit;
}

// Your email address
$to = "hardikprajapati8104@gmail.com";

// Email subject
$subject = "New Contact Form Enquiry - Work Home Safety Solution";

// Email body
$body = "You have received a new enquiry from your website.\n\n";

$body .= "Full Name: " . $name . "\n";
$body .= "Contact Number: " . $contact . "\n";
$body .= "Email Address: " . $email . "\n";
$body .= "Service: " . $service . "\n\n";
$body .= "Message:\n";
$body .= $message . "\n";

// Headers
$headers = "From: Website Contact Form <no-reply@workhomesafetysolution.com>\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $body, $headers)) {

    echo "<script>
        alert('Thank you! Your message has been sent successfully.');
        window.location.href = 'contact.html';
    </script>";

} else {

    echo "<script>
        alert('Sorry, something went wrong. Please try again.');
        window.history.back();
    </script>";
}