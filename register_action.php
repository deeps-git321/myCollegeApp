<?php
include('includes/db_connect.php');  // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];
    $blood_group = $_POST['blood_group'];
    $course = $_POST['course'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash the password

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO students (first_name, last_name, address, mobile_number, blood_group, course, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $first_name, $last_name, $address, $mobile_number, $blood_group, $course, $username, $password);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: login.php"); // Redirect to the login page after successful registration
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
