<?php


class Main {

	public $con; 
	public function __construct(){
		$this->con = mysqli_connect("localhost", "admin", "root", "attendance");
				if (mysqli_connect_errno()) {
			echo"Error: could not connect to database.";
			exit;
		}
	}

	//"insert info from table (, ,) values ('data','data')"
	public function insert_data($table,$fields){
		$sql = "";
		$sql .="INSERT INTO " . $table;
		$sql .=" (".implode(",",array_keys($fields)). ") VALUES ";
		$sql .=" ('".implode("','", array_values($fields)). "')";
		
/*		echo $sql;*/

		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}
	}

	//end of insert
	//srat of fetch
	public function fetch_data($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
	}
	//end of fetch
	//start of update
	public function update_data($table,$where,$fields){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			//id = 5 and firstname = 'kanit ano'
		$condition.=$key . "='" .$value ."' AND ";

		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value) {
			//UPDATE FUNCTION QUERY
			//UPDATE table SET lastname = '' , firstname = '' , middlename '' , picture = '', WHERE id = '',
			$sql .=$key . "='".$value."',";
		}
		$sql = substr($sql, 0, -2);value . "' AND ";
		$sql = "UPDATE ".$table." SET ".$sql." WHERE " . $condition;
		
		echo $sql;

/*		if(mysqli_query($this->con,$sql)){
			return true;
		}*/
	}
	//end of update

//start select
	public function select_data($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
			}

		$condition = substr($condition,0,-5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;

/*		echo $sql;*/

		//fetch singe data. by boss noli
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
//end select

	//start select  orderby
	public function select_data_orderby($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
			}

		$condition = substr($condition,0,-5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition ." ORDER BY ID DESC LIMIT 1";

/*		echo $sql;*/

		//fetch singe data. by boss noli
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
//end select orderby



//start delete data
	public function delete_data($table, $where){
		$sql = "";
		$condition = "";
		foreach($where as $key => $value){
			$condition .= $key . "='" . $value . "' AND ";
		}

		$condition = substr($condition, 0, -5);
		$sql .= "DELETE FROM ".$table." WHERE " .$condition;

		echo $sql;

/*		if (mysqli_query($this->con,$sql)){
			return true;
		}*/
	}
//end of delete

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
			$sql = "SELECT * FROM user_account WHERE id = '$uid'";
			$result = mysqli_query($this->con,$sql);
			$user_data = mysqli_fetch_array($result);
			echo $user_data['user_name'];
		}


			//for login process
	public function check_login($emailusername, $password){
		$password = md5($password);
		$sql= "SELECT id, user_name FROM user_account WHERE email='$emailusername' OR user_name='$emailusername' AND user_password='$password'";
		//checking id the username is available in the table
		$result = mysqli_query($this->con,$sql);
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		if ($count_row == 1){
			//this login car is from session
			$_SESSION['login'] = true;
			$_SESSION['id'] = $user_data['id'];
			$_SESSION['username'] = $user_data['user_name'];
			return true;
		}
	}

		//generateID.
		public function generateID(){
			$sql = "SELECT max(id) AS temp_id FROM Employee_Master";
			$result = mysqli_query($this->con,$sql);
			$user_data = mysqli_fetch_array($result);
			$unique_id = uniqid();
			$unique_id = substr( $unique_id, 9 );
			$temp_ID = $unique_id.($user_data['temp_id'] + 1);
			return $temp_ID;
		}
}

$obj = new Main();
$obj2 = new Main();
if (isset($_POST['submit_registration'])) {
	
	$myarray = array(
		"employee_id"=>$obj->generateID(),
		"first_name"=>$_POST['firstname'],
		"last_name"=>$_POST['lastname'],
		"middle_name"=>$_POST['middlename'],
		"birth_day"=>$_POST['bday'],
		"address"=>$_POST['address'],
		"phone_main"=>$_POST['mainphone'],
		"phone_home"=>$_POST['homephone'],
		"email"=>$_POST['email'],
		"gender"=>$_POST['gender'],
		"status_id"=>"1"
	);

	$temp_pass = md5($_POST['middlename'].substr( $_POST['mainphone'], 7 ));

	$myarray2 = array(
		"employee_id"=>$myarray['employee_id'],
		"password"=>$temp_pass,
		"last_login"=>"",
		"register_date"=>(new \DateTime())->format('Y-m-d H:i:s'),
		"user_type_id"=>$_POST['usertype']
	);

	if ($obj->insert_data("Employee_Master", $myarray)) {

		if ($obj2->insert_data("Employee_Login_Master", $myarray2)) {
			header("location: registration.php?msg=Registration Successfull");
		}else{
			//failed register
			header("location: registration.php?msg=Login Registration Failed");
		}
	
	}else{
		//failed register
		header("location: registration.php?msg=Employee Registration Failed");
	}
}

if (isset($_POST['submit_thread'])) {
	$myarray = array(
		"subject"=>$_POST['title'],
		"category"=>$_POST['category'],
		"language"=>md5($_POST['language']),
		"content"=>$_POST['document-full']
	);

	if ($obj->insert_data("thread", $myarray)) {
	/*	header("location: index.php?msg=You are now Registered!");*/
	alert("New Thread Posted.");
		header("location: login.php?msg=Registration Successfull");
	}else{
		//failed register
		alert("Failed to Post New Thread. Please try again.");
		header("location: registration.php?msg=Registration Failed");
	}
}


//name a button name="update" to allow button to update 
if (isset($_POST['update'])) {
	$id = $_POST["id"];
	$where = array("id"=>$id);
	$myarray = array(
		"id"=>$_POST['id'],
		"firstname"=>$_POST['firstname'],
		"lastname"=>$_POST['lastname']
	);
	if ($obj->update_data("person", $where, $myarray)) {
		header("location: update.php?msg=Your request is Accepted");
	}
}

//delete button
if (isset($_GET['delete'])) {
	$id = $_GET["id"];
	$where = array("id"=>$id);
	if ($obj->delete_data("person", $where)) {
		header("location: index.php?msg=Your request is Accepted");
	}
}



?>