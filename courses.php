<?php
include('includes/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Courses Available</h1>
        <table border="1">
            <tr>
                <th>Course Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Computer Science</td>
                <td>Study of computers and programming</td>
            </tr>
            <tr>
                <td>Electrical Engineering</td>
                <td>Study of electrical systems and circuits</td>
            </tr>
        </table>
    </div>
</body>
</html>
