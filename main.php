<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
          font: 14px sans-serif;
          text-align: center;
          background-color: gray
        }
        .welcome {
          font-size: 40px;
        }
    </style>
</head>
<body>
    <h1 class="welcome">Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Animenima!</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </p>
</body>
</html>
