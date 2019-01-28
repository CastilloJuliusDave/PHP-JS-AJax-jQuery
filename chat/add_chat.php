<?php

$con=new mysqli("localhost","admin","root","chat");
$st=$con->prepare("INSERT INTO chat_msg (name,message) value(?,?)");
$st->bind_param("ss", $_POST["name"],$_POST["msg"]);
$st->execute();
echo "Successfully Added"

?>