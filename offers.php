<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Offers</title>
</head>
<body>
    <h1>Special Offers</h1>
    <h2>Check Out Our Special Offers!</h2>
    <p>We have exclusive deals available for a limited time. Don’t miss out on our amazing discounts and special promotions!</p>
    <a href="index.html">Back to Home</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
</head>
<body>
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
