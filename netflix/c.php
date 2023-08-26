<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Basic password matching validation
    if ($password !== $confirmPassword) {
        $errorMessage = "Passwords do not match.";
    } else {
        // Store user details (insecure, for demonstration purposes)
        $users = [
            "username" => $username,
            "password" => $password
        ];

        // Redirect to a success page or login page
        header("Location: login.html");
        exit();
    }
}
?>
