<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="style.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
      body {
         font-family: "Roboto";
      }
   </style>
</head>

<body>
   <?php
   include 'dbconnection.php'
   ?>
   <div class="login">
      <h2>Login Admin Panel</h2>
      <div class="wrapp">
         <form method="POST">
            <div class="inputtext">
               <span class="icon"><img src="user.svg" alt=""></span>
               <input type="text" name="username" id="username" placeholder="Username"><br>
            </div>
            <div class="inputtext">
               <span class="icon"><img src="password.svg" alt=""></span>
               <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <input type="submit" name="signin" value="login">
         </form>
      </div>
   </div>
   <?php
   if (isset($_POST['signin'])) {
      // Ensure secure input using mysqli_real_escape_string
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      
      $sqst = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $sqst); //run query

      if (mysqli_num_rows($result) == 1) {
         session_start();
         $_SESSION['loginID'] = $_POST['username'];
         header("location:adminpanel.php");
      } else {
         echo '<p style="color: red; font-weight: bold; margin-top: 20px; text-align: center;">Invalid username or password</p>';
      }
   }
   ?>

</body>

</html>