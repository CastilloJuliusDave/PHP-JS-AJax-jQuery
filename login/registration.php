<?php
	session_start();
	include_once 'class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
		$register = $user->reg_user($fullname, $username, $email, $password);
		if ($register) {
			//if register success
			echo'Registration Successfull <a href="login.php">Click HERE</a> to login';
		}else{
			//failed register
			echo"Registration Failed. Email or Username already Exist please try again.";
		}
	}

	if (isset($_SESSION['id'])) {
		header("location:home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
	#container{
		width: 400px;
		margin: 0 auto;
	}
</style>
<script type="text/javascript">
	function submitreg(){
		var form = document.reg;
		if (form.fullname.value == "") {
			alert("Enter Full Name")
			return false;
		}else if (form.username.value == "") {
			alert("Enter User Name")
			return false;
		}else if (form.email.value == "") {
			alert("Enter Email")
			return false;
		}else if (form.password.value == "") {
			alert("Enter Password")
			return false;
		}else {
			return true;
		}
	}
</script>
<body>
	<div id="container">
		<h1>Registration</h1>
		<form action="" method="post" name="reg">
			<span>Full Name</span>
			<input type="text" name="fullname" required=""><br><br>
			<span>User Name</span>
			<input type="text" name="username" required=""><br><br>
			<span>Email</span>
			<input type="text" name="email" required=""><br><br>
			<span>Password</span>
			<input type="password" name="password" required=""><br>
			<input onclick="return(submitreg())" type="submit" name="submit" value="Register">
		</form><br><br>
	<a href="login.php">Already Registered Click Here!</a>
	</div>
</body>
</html>