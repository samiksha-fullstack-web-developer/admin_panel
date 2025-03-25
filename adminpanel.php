<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            margin: 0;
            font-family: "Roboto";
        }

        .container {
            font-size: 18px;
            display: flex;
            background-color: #20c997;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            color: white;
        }

        button {
            padding: 10px;
            background-color: #ffc107;
            border: none;
            color: white;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Welcome to dashboard - <?php echo $_SESSION['loginID'] ?></h2>
        <form method="post">
            <button name="logout">Log Out</button>
        </form>
    </div>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: login.php");
        exit();
    }
    ?>
</body>

</html>