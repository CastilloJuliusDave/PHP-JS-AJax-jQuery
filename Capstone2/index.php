<?php

	include 'core/init.php';

	if (isset($_REQUEST['submit_login'])) {
		extract($_REQUEST);
		$login = $user->check_login($emailoruser,$password);
		if ($login) {
			//if register success
			header("location:home.php");
		}else{
			//failed register
			echo"Incorrect email or password";
		}
	}

	if (isset($_SESSION['id'])) {
		header("location:index.php");
	}

?>

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
<!-- ForumMainContent -->
<section id="LoginContent">
	<div class="container login_container section-header">
		<div class="row mt-3">
			<div class="col-lg-4 p-1">
				<?php
					include 'includes/login.php';
				?>
			</div>
			<div class="col-lg-8 p-1">
				<?php
					include 'includes/register.php';
				?>
			</div>





		</div>
	</div>
</section>

<script>
	

</script>

</body>

<?php
	include "includes/footer.php"
?>





