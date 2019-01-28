<?php

$con=new mysqli("localhost","admin","root","chat");
$st=$con->prepare("SELECT * FROM chat_msg ");
$st->execute();
$rs=$st->get_result();
while($row=$rs->fetch_assoc()){
	echo "<b>".$row["name"] . "</br>". row["message"]. "</br>";
	echo "<i>" . $row["msg_date"] . "</i></br><hr/>"; 
}

?>