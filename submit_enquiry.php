<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
</head>
<body>
<?php
if ($!empty($_POST["submit"])){
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
<h1>Enquiry Form</h1>
    <form action="submit_enquiry.php" method="POST">
        <label for="name">Enter Your Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="mobile">Enter Your Mobile Number:</label><br>
        <input type="text" id="mobile" name="mobile" required><br><br>

        <label for="address">Enter Your Address:</label><br>
        <input type="text" id="address" name="address" required><br><br>

        <label for="email">Enter Your E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="state">Select Your State:</label><br>
        <select id="state" name="state">
            <option value="State1">State 1</option>
            <option value="State2">State 2</option>
            <option value="State3">State 3</option>
            <option value="State4">State 4</option>
            <option value="State5">State 5</option>
        </select><br><br>

        <label for="requirement">Enter Your Requirement:</label><br>
        <textarea id="requirement" name="requirement" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    <a href="index.html">Back to Home</a>
</body>
</html>
