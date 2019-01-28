<?php
	session_start();
	include_once 'class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
		$login = $user->check_login($emailoruser,$password);
		if ($login) {
			//if register success
			header("location:home.php");
		}else{
			//failed register
			alert ("Incorrect email or password");
		}
	}

	if (isset($_SESSION['id'])) {
		header("location:home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP Login Module</title>
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
	function submitlogin() {
		var	form = document.login;
		if (form.emailoruser.value == "") {
			alert("Enter Email or Password.");
			return false;
		}
		else if (form.password.value == "") {
			alert("Enter Password.");
			return false;
		}
	}
</script>
<body>

<div id="container">
	<h1>Login</h1>
	<form action="" method="post" name="login">
		<span>User Name or Email</span>
		<input type="text" name="emailoruser" required=""><br>
		<span>Password</span>
		<input type="password" name="password" required="">
		<input onclick="return(submitlogin())" type="submit" name="submit" value="Login">
	</form>
</div>


</body>
</html>