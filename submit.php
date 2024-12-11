<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Log data to the terminal
    error_log("Form Data Received:");
    error_log("Name: $name");
    error_log("Email: $email");

    // Response to the client
    echo "Form submitted successfully!";
}
?>
