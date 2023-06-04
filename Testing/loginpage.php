<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
  <form action="login.php" method="post">
    <div class="ellipse-2 ellipse"></div>
    <div class="ellipse-1 ellipse"></div>
    <h2 class="login-heading">Login</h2>
    <input type="email" id="email" name="email" placeholder="Email"><br>
    <input type="password" id="password" name="password" placeholder="Password"><br>
    <input type="submit" name="submit" value="Login">
    <p class="signup-link">Don't have an account? <a href="index.html">Sign up here</a>.</p>
  </form> 
  <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<script type='text/javascript'>alert('{$_SESSION['message']}');</script>";
        unset($_SESSION['message']);
    }
  ?>
</body>
</html>


