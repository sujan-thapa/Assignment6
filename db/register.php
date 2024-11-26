<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'dbconnect.php'; 

$error_message = ''; // Variable to store the error message

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $email = $conn->real_escape_string($_POST['email']);  // Escape input to prevent SQL injection
    $password = password_hash($_POST['psw'], PASSWORD_DEFAULT); // Hash the password securely

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM registeredUser WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Email already exists
        // $error_message = "Error: The email is already registered. Please try again with a different email.";
        header('Location: ../signup.html'); // Redirect to home page or login page

    } else {
        // Email doesn't exist, proceed to insert
        $sql = "INSERT INTO registeredUser (email, password) VALUES ('$email', '$password')";

        // Execute query and check if successful
        if ($conn->query($sql) === TRUE) {
            header('Location: ../home.html'); // Redirect to home page or login page
            exit(); // Ensure the script stops here after redirection
        } else {
            $error_message = "Error: " . $conn->error; // Capture any other error
        }
    }
}

$conn->close(); // Close database connection
?>
