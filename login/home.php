<?php
	session_start();
	include_once 'class.user.php';

	$user = new User();
	$uid = $_SESSION['id'];

	if (!$user->get_session()) {
		header("location:login.php");
	}
	
	if (isset($_GET['logout'])) {
		$user->user_logout();
		header("location:login.php");
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="container">
			<div id="header"><a href="home.php?logout=logout">LOGOUT</a></div>
			<div id="main-body">
				<h1>hello my name is</h1>
				<?php
					$user->get_fullname($uid);
				?>
			</div>
		</div>
	</body>
</html>