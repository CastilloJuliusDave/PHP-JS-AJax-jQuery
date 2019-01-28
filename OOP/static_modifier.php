<!-- static modifiers -->
<?php
	class Cars {
		//property, variable, function or method

		//public - all are available inside class
		static $wheel_count = 4;

		//private - only used inside a class
		static $door_count = 6;

		function car_details(){
			echo Cars::$wheel_count;
			echo Cars::$door_count;
		}
	}

	//honda is an instanc	
/*	$honda = new Cars();

	echo $honda->wheel_count;*/
	//echo $honda->door_count;
	//echo $honda->seat_count;

//static modifier uses ::
	echo Cars::$door_count;

	Cars::car_details();
?>
