<?php
include('connection.php');
if (isset($_POST['sign_up'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);

  $sql_user_check = "SELECT * FROM signup1 WHERE username='$username'";
  $result_user = mysqli_query($conn, $sql_user_check);
  $count_user = mysqli_num_rows($result_user);

  $sql_email_check = "SELECT * FROM signup1 WHERE email='$email'";
  $result_email = mysqli_query($conn, $sql_email_check);
  $count_email = mysqli_num_rows($result_email);

  if ($count_user == 0 && $count_email == 0) {
    if ($password === $cpassword) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql_insert = "INSERT INTO signup1 (username, email, password, gender, birthdate) VALUES ('$username', '$email', '$hash', '$gender', '$birthdate')";
      $result_insert = mysqli_query($conn, $sql_insert);

      if ($result_insert) {
          header("Location: home1.php"); //yahan pe landing page connect hoga
          exit;
      } else {
        echo '<script>
        alert("Failed to sign up. Please try again.");
        window.location.href = "login.php";
        </script>';
          }
      } else {
          echo '<script>
          alert("Passwords do not match.");
          window.location.href = "login.php";
          </script>';
      }
  } else {
      if ($count_user > 0) {
          echo '<script>
          alert("Username already exists!");
          window.location.href = "login.php";
          </script>';
      }
      if ($count_email > 0) {
          echo '<script>
          alert("Email already exists!");
          window.location.href = "login.php";
          </script>';
      }
  }
}
?>
