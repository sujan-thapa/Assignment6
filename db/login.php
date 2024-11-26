<?php
session_start(); // Start the session

require 'dbconnect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $inputPassword = $_POST["psw"];  // The entered password from the form

    // SQL query to check if the user exists in the database
    $sql = "SELECT email, password FROM registeredUser WHERE email='$email'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Check if the user exists
        if ($result->num_rows > 0) {
            // User found, fetch the row
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password']; // Retrieve the hashed password from the database

            // Verify the entered password with the stored hash
            if (password_verify($inputPassword, $hashedPassword)) {
                // Successful login: Redirect to home page
                header("Location: ../home.html");
                exit();  // Ensure no further code is executed
            } else {
                // Incorrect password: Store error message in session
                $_SESSION['error_message'] = "Incorrect password. Please try again.";
                header("Location: ../index.php"); // Redirect back to login page
                exit();
            }
        } else {
            // User not found: Store error message in session
            $_SESSION['error_message'] = "No account found with that email address.";
            header("Location: ../index.php"); // Redirect back to login page
            exit();
        }
    } else {
        // Query failed: Store error message in session
        $_SESSION['error_message'] = "Error executing query. Please try again.";
        header("Location: ../index.php"); // Redirect back with error
        exit();
    }
}

$conn->close();
?>
