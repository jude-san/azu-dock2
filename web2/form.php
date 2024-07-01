<?php
$correct_username = 'admin@admin.com';
$correct_password = 'admin123';

// Check if the form's submit button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you're sending these fields from your form
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Output the data
    if ($username === $correct_username && $password === $correct_password) {
        echo "Welcome, Admin!";
    } else {
        echo "Incorrect username or password!";
    }
} else {
    // Not a POST request
    echo "Invalid access method.";
}
