<?php
include('connection.php');
if (isset($_POST['sign_in'])) {
    // Escape user input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password']; // No escaping for password as it's used for verification

    // Query to get the user details
    $sql = "SELECT * FROM signup1 WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username; // Assuming `password` in the database is hashed
                header("Location: home1.php"); // Redirect to landing page
            exit(); // Stop further execution after redirect
        } else {
            echo '<script>
                alert("Login failed. Invalid username or password!!");
                window.location.href = "login.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Login failed. Invalid username or password!!");
            window.location.href = "login.php";
        </script>';
    }
}
?>
