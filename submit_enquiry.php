<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $address = htmlspecialchars(trim($_POST['address']));
    $email = htmlspecialchars(trim($_POST['email']));
    $state = htmlspecialchars(trim($_POST['state']));
    $requirement = htmlspecialchars(trim($_POST['requirement']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h1>Error!</h1>";
        echo "<p>Invalid email format.</p>";
        exit;
    }

    // Prepare email
    $to = "prashantzalate04@gmail.com"; // Change to your email
    $subject = "New Enquiry from $name";
    $message = "Name: $name\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Address: $address\n";
    $message .= "Email: $email\n";
    $message .= "State: $state\n";
    $message .= "Requirement: $requirement\n";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Thank You!</h1>";
        echo "<p>Your enquiry has been submitted successfully.</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo '<a href="index.html">Back to Home</a>';
    } else {
        echo "<h1>Error!</h1>";
        echo "<p>There was a problem sending your enquiry. Please try again later.</p>";
    }
}
?>
