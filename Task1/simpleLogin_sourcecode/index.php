<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<h1>This is the index page</h1>

	<a href="logout.php">Logout</a>

	<br>
	Hello, <?php echo $user_data['Fname']; ?>
</body>
</html>