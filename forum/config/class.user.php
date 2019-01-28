<?php

class User{
	
	public $con;
	function __construct(){
		$this->con = mysqli_connect("localhost", "admin", "root", "forum");

		if (mysqli_connect_errno()) {
			echo"Error: could not connect to database.";
			exit;
		}
	}


//registration process
	public function reg_user($fullname, $username, $email, $password){

		$password = md5($password);
		$sql = "SELECT * FROM user_account WHERE username = '$username' OR email = '$email'";

		//check if the username or email exist in DB
		$check = $this->con->query($sql);
		$count_row = $check->num_rows;

		//insert in BD if username or email does not exist
		if ($count_row == 0) {
		$sql = "INSERT INTO login_tbl SET username ='$username', password = '$password', fullname = '$fullname', email='$email'";
		$result = mysqli_query($this->con,$sql) or die(mysqli_connect_errno()."Failed to save DATA");
		return $result;
		}else{
			return false;
		}
	}

//end register

	//for login process
	public function check_login($emailusername, $password){
		$password = md5($password);
		$sql= "SELECT id FROM login_tbl WHERE email='$emailusername' OR username='$emailusername' AND password='$password'";
		//checking id the username is available in the table
		$result = mysqli_query($this->con,$sql);
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		if ($count_row == 1){
			//this login car is from session
			$_SESSION['login'] = true;
			$_SESSION['id'] = $user_data['id'];
			return true;
		}
	}
	//end of login process

	//session start
		public function get_session(){
			return $_SESSION['login'];
		}
	//session end

	//logout destroy session

		public function user_logout(){
			$_SESSION['login'] = FALSE;
			session_destroy();
		}

	//show name or email.
		public function get_fullname($uid){
			$sql = "SELECT * FROM login_tbl WHERE id = '$uid'";
			$result = mysqli_query($this->con,$sql);
			$user_data = mysqli_fetch_array($result);
			echo $user_data['fullname'];
		}

		//fetch data
		public function fetch_data($sql){
			$result = mysqli_query($this->con,$sql);
			return $result;
		}
}

?>