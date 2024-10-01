<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>

    <form action="handleForm.php" method="POST">
        <p>Username <input type="text" placeholder="" name="firstName"></p>
        <p>Password <input type="password" placeholder="" name="password"></p>
        <p><input type="submit" value="Login" name="submitBtn"></p>
    </form>
	<form action="unset.php" method="POST">
		<p><input type="submit" value="Logout" name="LogoutBtn">

	<p>
		<?php
			// Display an error message if one is set
			if(isset($_GET['error']) && $_GET['error'] === 'already_logged_in') {
				echo $_SESSION['firstName'] . ' is already logged in. Wait for him to log out first.';
			} else {
				if(isset($_SESSION['firstName'])) {
					echo '<br><b>User logged in: ' . $_SESSION['firstName'] . '</b></br>';
				}
				if(isset($_SESSION['password'])) {
					echo '<br><b>Password: ' . $_SESSION['password'] . '</b></br>';
				}
			}
		?>
	</p>
	
</body>
</html>
