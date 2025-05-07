<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Sign Up</title>
  <link rel="stylesheet" href="login.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <!-- Login Form -->
    <div class="form-card" id="loginForm">
      <h2>Welcome Back</h2>
      <form action="signin_user.php" method="POST">
        <div class="input-group">
          <span class="icon">
            <i class="fa-solid fa-user"></i>
          </span>
          <input type="text" id="username" name="username" placeholder="username" required>
        </div>
        <div class="input-group">
          <span class="icon">
            <i class="fa-solid fa-lock"></i>
          </span>
          <input type="password" id="password" name="password" placeholder="password" required>
        </div>
        <div class="options">
          <input type="checkbox" id="remember" name="remember" class="compact-checkbox">
          <label for="remember" style="font-size: 10px;">Remember Password</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn" name="sign_in">Login</button>
        <p>Don't Have an Account? <a href="#" onclick="showSignUp()">Sign Up</a></p>
        <!-- <?php //include("signin_user.php"); ?> -->
      </form>
    </div>
    <!-- Sign Up Form -->
    <div class="form-card" id="signUpForm" style="display: none;">
      <h2>Sign Up</h2>
      <form action="signup_user.php" method="POST">
        <div class="input-group-2 input-group-icon">
          <i class="fas fa-user"></i>
          <input type="text" id="newUsername" name="username" placeholder="Username" required>
        </div>
        <div class="input-group-2 input-group-icon">
          <i class="fas fa-envelope"></i>
          <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group-2 input-group-icon">
          <i class="fas fa-lock"></i>
          <input type="password" id="newPassword" name="password" placeholder="Password" required>
        </div>
        <div class="input-group-2 input-group-icon">
          <i class="fas fa-lock"></i>
          <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
        </div>
        <div class="input-group-2 input-group-icon">
          <i class="fas fa-venus-mars"></i>
          <select id="gender" name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="input-group-2 input-group-icon">
          <i class="fas fa-calendar-alt"></i>
          <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <button type="submit" class="btn" name="sign_up">Sign Up</button>
        <p>Already Have an Account? <a href="#" onclick="showLogin()">Log In</a></p>
        <!-- <?php //include("signup_user.php"); ?> -->
      </form>
    </div>
  </div>

  <script src="login.js"></script>
</body>

</html>