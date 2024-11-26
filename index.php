<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Website</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <div class="loginContainer">
        <!-- Display error message if exists -->
        

        <form action="./db/login.php" method="post">
            <!-- <div class="imgcontainer">
              <img src="./assets/store.jpg" alt="Avatar" class="avatar">
            </div> -->
          
            <div class="container">
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter email" name="email" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          
            <div class="box1">
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            </form>
          </div>
          <div class="message">
          <?php
              if (isset($_SESSION['error_message'])) {
                  echo '<div>' . $_SESSION['error_message'] . '</div>';
                  unset($_SESSION['error_message']); // Clear the error message after displaying it
              }
              ?>
      
          </div>
</body>
</html>
