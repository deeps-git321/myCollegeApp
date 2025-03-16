<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h1>Register</h1>
        <form method="POST" action="register_action.php">
            <input type="text" name="first_name" placeholder="First Name" required><br>
            <input type="text" name="last_name" placeholder="Last Name" required><br>
            <textarea name="address" placeholder="Address" required></textarea><br>
            <input type="text" name="mobile_number" placeholder="Mobile Number" required><br>
            <input type="text" name="blood_group" placeholder="Blood Group" required><br>
            <input type="text" name="course" placeholder="Course" required><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
