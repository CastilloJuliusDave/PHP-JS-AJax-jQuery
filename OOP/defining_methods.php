<?php
	/**
	 * 
	 */
	class Cars {
		//property, variable, function or method

		function greeting(){

		}
		function greeting2(){

		}
	}

//echos all the methods under Cars Class
$the_methods = get_class_methods('Cars');
foreach ($the_methods as $methods) {
	echo $methods."<br>";
}

?>