<!-- access control modifiers -->
<?php
	class Cars {
		//property, variable, function or method

		//public - all are available inside class
		public $wheel_count = 4;

		//private - only used inside a class
		private $door_count = 6;

		//protected available in subclass and class itself
		protected $seat_count = 8;

		function car_details(){
			echo $this->wheel_count."<br>";
			echo $this->door_count."<br>";
			echo $this->seat_count."<br>";
		}
	}

	//honda is an instanc	
	$honda = new Cars();

/*	echo $honda->wheel_count;
	echo $honda->door_count;
	echo $honda->seat_count;*/

	$honda->car_details();

?>