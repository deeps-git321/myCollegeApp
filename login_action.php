<?php
include('includes/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username exists in the database
    $stmt = $conn->prepare("SELECT id, username, password FROM students WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_username, $stored_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $stored_password)) {
            // Start the session and store the user info
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $stored_username;
            header("Location: student_home.php"); // Redirect to the student home page
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Username not found!";
    }

    $stmt->close();
    $conn->close();
}
?>
