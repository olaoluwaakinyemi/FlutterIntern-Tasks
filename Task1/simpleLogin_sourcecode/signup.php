<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Fname = $_POST['Fname'];
		$Lname =$_POST['Lname'];
		$user_name = $_POST['user_name'];
		$acct = $_POST['acct'];
		$password = $_POST['password'];

		if(!empty($Fname) && !empty($Lname) && !empty($user_name) && !empty($acct) && !empty($password) && !is_numeric($user_name) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,Fname,Lname,user_name,acct,password) values ('$user_id','$Fname','$Lname','$user_name','$acct','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="sup.css">
</head>
<body>

	<div id="box">
		
		<form method="post">
			<div  class="stu">Signup</div>

			<input id="text" type="text" name="Fname" placeholder="Firstname"><br><br>
			<input id="text" type="text" name="Lname" placeholder="Lastname"><br><br>
			<input id="text" type="email" name="user_name" placeholder="Email"><br><br>
			<input id="text" type="number" name="acct" placeholder="Account Number"><br><br>
			<input id="text" type="password" name="password" placeholder="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>