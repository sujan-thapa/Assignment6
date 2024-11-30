<?php
require './dbconnect.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $houseNumber = $_POST['houseNumber'];
    $province = $_POST['province'];
    $password = $_POST['password'];
    $subscription = isset($_POST['subscription']) ? 1 : 0;  // Default to 0 if not set
    $question = $_POST['question'];


    $userExists = false;

    // Use a prepared statement to prevent SQL injection
    $sql = "SELECT email_address FROM Customer WHERE email_address = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement is prepared correctly
    if ($stmt === false) {
        die('Error preparing statement: ' . $conn->error);
    }

    // Bind the email parameter to the prepared statement
    $stmt->bind_param("s", $email);  // "s" means string type

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if any rows were returned (meaning the email exists)
    if ($result->num_rows > 0) {
        $userExists = true;
        // Redirect to home.php with a message, but without outputting first
        header("Location: ../home.html?error=user_exists");
        // header("Location: ../home.php");

        exit(); // Always call exit after header redirection
    }

    // Prepare SQL query with placeholders
    $sql = "INSERT INTO Customer (`first_name`, `last_name`, `dob`, `phone_number`, `email_address`, `home_address`, `house_number`, `province`, `password`, `subscription`, `question`, `gender`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


    $stmt = mysqli_prepare($conn, $sql);

    // Check if the preparation of the statement was successful
    if ($stmt === false) {
        die('Error preparing statement: ' . mysqli_error($conn));
    }

    // Bind parameters to the placeholders
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $firstName, $lastName, $dob, $phone, $email, $address, $houseNumber, $province, $password, $subscription, $question, $gender);

    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        // echo "Data inserted successfully!";
        
        header("Location: ../home.html");
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
