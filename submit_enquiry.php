<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $state = htmlspecialchars($_POST['state']);
    $requirement = htmlspecialchars($_POST['requirement']);

    // Email to send the enquiry
    $to = "prashantzalate04@gmail.com"; // Change to your email
    $subject = "New Enquiry from $name";
    $message = "Name: $name\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Address: $address\n";
    $message .= "Email: $email\n";
    $message .= "State: $state\n";
    $message .= "Requirement: $requirement\n";
    
    // Send the email
    mail($to, $subject, $message);

    echo "<h1>Thank You!</h1>";
    echo "<p>Your enquiry has been submitted successfully.</p>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo '<a href="index.html">Back to Home</a>';
}
?>
