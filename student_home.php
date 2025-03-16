<?php
session_start();
include('includes/db_connect.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Fetch the student's details from the database
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT first_name, last_name, address, mobile_number, blood_group, course FROM students WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($first_name, $last_name, $address, $mobile_number, $blood_group, $course);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="index.php">Home </a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            <!-- Logout Link -->
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Welcome, <?php echo $first_name; ?>!</h1>
        <h2>Your Details:</h2>
        <table border="1">
            <tr>
                <th>First Name</th>
                <td><?php echo $first_name; ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $last_name; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?php echo $mobile_number; ?></td>
            </tr>
            <tr>
                <th>Blood Group</th>
                <td><?php echo $blood_group; ?></td>
            </tr>
            <tr>
                <th>Course</th>
                <td><?php echo $course; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
