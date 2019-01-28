<!-- class inheritance -->
<?php
	/**
	 * instantiating class
	 */
	class Cars {
		//property, variable, function or method

		//properties
		var $wheels = 4;

		function greeting(){
			return "Meow";
		}
	}

//honda is an instance
$honda = new Cars();

//to inherit the Cars
class Trucks extends Cars{
	var $wheels = 11;
}

$toyota = new Trucks();
echo "toyota";
echo $toyota->wheels;
echo "<br>";
echo "honda";
echo $honda->wheels;

?>