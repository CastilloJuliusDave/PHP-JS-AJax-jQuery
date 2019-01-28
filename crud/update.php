<?php

	include "included/header.php";
	include "config/function.php";

	if (isset($_GET["targetname"])) {
		$id = $_GET["id"];
		$where = array("id"=>$id,);
		$row = $obj->select_data("person",$where);
 } ?>

 <body>
 	<p>update person by unique ID.</p>
 	<form action="" method="post">
 		<table>
 			<tr>
 				<th>ID</th>
 				<th>First Name</th>
 				<th>Last Name</th>
 			</tr>
 			<tr>
 				<td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
 				<td><input type="text" name="firstname" value="<?php echo $row['firstname'];?>"></td>
 				<td><input type="text" name="lastname" value="<?php echo $row['lastname'];?>"></td>
 				<td><input type="submit" name="update" value="Submit"></td>
 			</tr>
 		</table>
			
		</form>

 </body>

 <?php
	include "included/footer.php"
?>