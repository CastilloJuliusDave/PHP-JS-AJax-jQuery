<?php

class Database{
	public $con; 
	public function __construct(){
		$this->con = mysqli_connect("localhost", "admin", "root", "attendance");
				if (mysqli_connect_errno()) {
			echo"Error: could not connect to database.";
			exit;
		}
	}
}

$obj = new Database();
?>