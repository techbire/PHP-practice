<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form</title>
</head>
<body>
    <h1>Simple Form with PHP Validation</h1>

    <?php
    // Variables to store user input and errors
    $name = $email = $error = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]) || empty($_POST["email"])) {
            $error = "Name and Email are required!";
        } else {
            $name = htmlspecialchars($_POST["name"]); // Prevent XSS
            $email = htmlspecialchars($_POST["email"]);

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "Invalid email format!";
            }
        }
    }
    ?>

    <!-- Display error message -->
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <!-- Form -->
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>

        <button type="submit">Submit</button>
    </form>

    <!-- Display result if no errors -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)): ?>
        <h2>Your Input:</h2>
        <p>Name: <?php echo $name; ?></p>
        <p>Email: <?php echo $email; ?></p>
    <?php endif; ?>
</body>
</html>
