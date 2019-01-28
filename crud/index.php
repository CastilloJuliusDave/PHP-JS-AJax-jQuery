<?php
	include "included/header.php";
	include "config/function.php";
?>

<body>
	<form action="" method="post">
		<p>First Name: <input type="text" name="firstname"></p>
		<p>Last Name: <input type="text" name="lastname"></p>
		<input type="submit" name="submit" value="Submit">
		<br><br>
	</form>

	<table cellspacing="1" cellpadding="1">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Update</th>
		</tr>
		<?php
			$row = $obj->fetch_data("person");
			foreach ($row as $person) {
			?>
				<tr>
					<form action="" method="post">
						<td><input type="text" name="id" value="<?php echo $person['id'];?>"></td>
						<td><input type="text" name="firstname" value="<?php echo $person['firstname'];?>"></td>
						<td><input type="text" name="lastname" value="<?php echo $person['lastname'];?>"></td>
						<td><input type="submit" name="update" value="UPDATE"></td>
					</form>
					<td>
						<form>
							<a href="update.php?targetname=1&id=<?php echo $person['id']?>" target="_blank">EDIT </a>
						</form>
					</td>
					<td><a onlick="return confirm('Are you sure you want to delete?');" href="?delete=1&id=<?php echo $person['id'];?>"><button type="button">DELETE</button></a>
					</td>

				</tr>
			<?php } ?>

	</table>

</body>

<?php
	include "included/footer.php";
?>