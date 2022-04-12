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
    <link rel="stylesheet" href="stylesheet.css">
    <title>Animenima</title>
    <style>
        body {
          font: 16px sans-serif;
          text-align: center;
          background-color: gray
        }
        .welcome {
          font-size: 40px;
        }
    </style>
</head>
<body>
  <p>
    <?php echo htmlspecialchars($_SESSION["username"]); ?>
  </p>

  <select id="creatures" name="creatures" style="padding: 4px" onchange="if (window.__cfrLUnblockHandlers) return false; showCreature(this.value)"> == $0
    <option value="0">Select Creature</option>
    <option value="1">Slime</option>
    <option value="2">Goblin</option>
    <option value="3">Goblin Mage</option>
    <option value="4">Kobold</option>
    <option value="5">Greater Kobold</option>
    <option value="6">Orc</option>
    <option value="7">Troll</option>
    <option value="8"></option>
    <option value="9"></option>
    <option value="10"></option>
  </select>

  <p>
    <a href="reset-password.php" class="button">Reset Password</a>
    <br><a href="logout.php" class="button">Sign Out</a>
  </p>
</body>
</html>
