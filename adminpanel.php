<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <div class="container">
        <h2>Welcome to dashboard - <?php echo $_SESSION['loginID']?></h2>
        <form method="post">
            <button name="logout">Log Out</button>
        </form>
    </div>
    <?php
    if(isset($_POST['logout'])) {
        session_destroy();
        header("location: login.php");
        exit();
    }
    ?>
</body>
</html>