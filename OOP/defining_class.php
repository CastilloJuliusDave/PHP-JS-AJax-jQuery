<?php
/**
 * 
 */
class Cars {
	//property, variable, function or method
}

//echos all the classes of PHP
$my_classes = get_declared_classes();
foreach ($my_classes as $class) {
	# code...
	echo $class . "<br>";
}

?>