<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

$email = trim($_POST['email'] ?? '');

// Validate email
if ($email === '') {
    echo "<script>
        alert('Please enter your email address.');
        window.history.back();
    </script>";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        alert('Please enter a valid email address.');
        window.history.back();
    </script>";
    exit;
}


// ========================================
// YOUR EMAIL ADDRESS
// ========================================

$to = "workhomesafetysolution@gmail.com";


// ========================================
// EMAIL SUBJECT
// ========================================

$subject = "New Newsletter Subscription";


// ========================================
// EMAIL CONTENT
// ========================================

$body = "You have received a new newsletter subscription.\n\n";

$body .= "Subscriber Email: " . $email . "\n";

$body .= "Date: " . date('d-m-Y H:i:s') . "\n";


// ========================================
// EMAIL HEADERS
// ========================================

$headers = "From: Website Subscription <no-reply@workhomesafetysolution.com>\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


// ========================================
// SEND EMAIL
// ========================================

if (mail($to, $subject, $body, $headers)) {

    echo "<script>
        alert('Thank you for subscribing!');
        window.location.href = 'index.html';
    </script>";

} else {

    echo "<script>
        alert('Unable to subscribe at the moment. Please try again.');
        window.history.back();
    </script>";

}