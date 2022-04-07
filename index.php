<?php

?>
<!DOCTYPE html>
<html lang="en">
<title>Animenima</title>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"
</head>
<body>
	<form action="main.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="test" name="uname" placeholder="User Name"><br>
		<label>Password</label>
		<input tpye="password" name="password" placeholder="Password"><br>
		<button type="submit">Login</button>
	</form>

</body>
</html>
