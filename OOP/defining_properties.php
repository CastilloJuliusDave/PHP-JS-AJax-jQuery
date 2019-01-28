<!-- defining properties -->
<?php
	/**
	 * instantiating class
	 */
	class Cars {
		//property, variable, function or method

		//properties
		var $wheel_count = 4;
		var $door_count = 4;

		function car_detail(){
			return "This car has " . $this->wheel_count." wheels";
		}
	}

//honda is an instance
$honda = new Cars();

$toyota = new Cars();

echo $honda->wheel_count = 10;
echo "</br>";
echo $toyota->car_detail();


?>