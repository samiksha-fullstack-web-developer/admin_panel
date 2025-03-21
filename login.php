<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
   include 'dbconnection.php'
   ?>
   <div class="login">
      <h2>Login Admin Panel</h2>
      <div class="wrapp">
      <form method="post">
         <div class="inputtext">
            <label for="username">Username</label>
            <input type="text" name="username" id="username"><br>
         </div>
         <div class="inputtext">
            <label for="password">Password</label>
            <input type="text" name="password" id="password">
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
       $result = mysqli_query($conn, $sqst);
   
       if (mysqli_num_rows($result) == 1) {
         session_start();
         $_SESSION['loginID']= $_POST['username'];
         header("location:adminpanel.php");
       } else {
           echo "Invalid username or password!";
       }
   }
   ?>
   
</body>

</html>