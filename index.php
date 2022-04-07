<?php

?>
<!DOCTYPE html>
<html lang="en">
<title>Animenima</title>
<head>

</head>
<body>
	<form action="login.php" method="post">
		<h1>LOGIN></h1>
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
