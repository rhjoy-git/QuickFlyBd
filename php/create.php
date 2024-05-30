<?php
include("config.php");

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

    // Insert data into the users table
    $sql = "INSERT INTO `users` (`name`, `phone`, `email`, `password`, `gender`) 
            VALUES ('$name', '$phone', '$email', '$password', '$gender')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: Form not submitted correctly.";
}
?>
