<?php
	include_once 'class.user.php';
	$user = new User();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="get">
		<div class="form_group">
			<div class="row">
				<div class="col-lg-3">
					<label>Employee Name:</label>
					<input type="text" name="code_search" class="form-control">
				</div>
				<div class="col-lg-3">
					<label>Action:</label>
					<button type="submit" class="btn btn-primary" style="width: 100%"><span class="glyphicon glyphicon-search"> Search</span></button>
				</div>
				<select name="options">
				  <option value="id">id</option>
				  <option value="username">username</option>
				  <option value="fullname">full name</option>
				  <option value="email">email</option>
				</select>
			</div>
		</div>
	</form>

	<!-- to get submitted search in form -->
	<?php

	 if(isset($_REQUEST['code_search'])){
		$code_search = $_REQUEST['code_search'];
		$options = $_REQUEST['options'];
		//if code_search empty
			if ($code_search != NULL){
				
				$query = "SELECT * FROM login_tbl WHERE ".$options." LIKE '$code_search'";
				$myrow = $user->fetch_data($query);
				foreach ($myrow as $row){
	?>

			<div class="col-lg-3">
				<?php
					echo $row["id"]." ".$row["username"]." ".$row["email"];
				?>
			</div>
				

	<?php
		}
	}
}
?>

	</body>
</html>
