<?php
include("config.php");

$message = "";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];

    // Sanitize and validate input
    $name = $conn->real_escape_string($name);
    $phone = $conn->real_escape_string($phone);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    $gender = $conn->real_escape_string($gender);

    // Check if the email already exists in the database
    $check_email_sql = "SELECT * FROM users WHERE email = '$email'";
    $check_email_result = $conn->query($check_email_sql);
    if ($check_email_result->num_rows > 0) {
        // Email already exists
        $message = "Registration unsuccessful. Email already exists.";
    } else {
        // Insert data into the users table
        $sql = "INSERT INTO `users` (`name`, `phone`, `email`, `password`, `gender`) 
                 VALUES ('$name', '$phone', '$email', '$password', '$gender')";
        if ($conn->query($sql) === TRUE) {
            // Registration successful
            $message = "Registration successful";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    $message = "Error: Form not submitted correctly.";
}
