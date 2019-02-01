<?php
	include 'core/init.php';

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

					<?php
						include 'includes/login.form.php';
					?>
			</div>
		</div>
	</section>

	  <?php
		include "includes/footer.php";
	?> 

	</body>


</html>




