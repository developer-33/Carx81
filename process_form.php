<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Validate data (e.g., check if email is valid)

// Send email
$to = 'burton.fletcher.com'; // Replace with your email address
$headers = "From: $email\r\n";
mail($to, $subject, $message, $headers);

// Redirect user back to the form with a success message
header('Location: index.html?success=1');
exit;
?>
