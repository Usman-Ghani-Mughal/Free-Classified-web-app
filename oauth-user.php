<?php

//echo '<script>alert("FB outh user")</script>';

class OauthUser {
    private $host          = "localhost";
    private $username      = "bn11aao_babar";
    private $password      = "Y2dgdzhpq";
    private $database_name = "bn11aao_assabuur";
    private $table         = 'users';
	private $db;
    
    function __construct(){
		// Connect to the MySQL database
		$this->db = new mysqli($this->host, $this->username, $this->password, $this->database_name);
		if($con->connect_error){
			die("Failed to connect with MySQL database: " . $this->db->connect_error);
		}
    }

	function verifyUser($userInfo) {
		
		
		
		$make_email = $userInfo['id']."@facebook.com";
 		
		$qry_body = "	
		
			
		`img`  = 			'".$userInfo['picture']['url']."',
		`first_name`  = 	'".$userInfo['name']."',
		`last_name`  = 		'',
		`phone`  = 			'',
		`gender`  = 		'".$userInfo['gender']."',
		`birthday`  = 		'',
		`username`  = 		'$make_email',
		`email`  = 			'$make_email',
		`password`  = 		'',
		`street`  = 		'',
		`city`  = 			'',
		`state`  = 			'',
		`zip`  = 			'',
		`status`  = 		'Activated',
		`reason`  = 		''
		";

		
		$select_qry = "select * from `users` where  `email`= '$make_email'";
		$res = $this->db->query($select_qry);
		if($res->num_rows > 0) {
			//Update user details if it is already exists in the table
           // $qry = "update ".$this->table." set ".$qry_body." WHERE `email` = '".$userInfo['email']."'";
		} else {
			//Insert into table if user not exists in the table
            $qry = "insert into ".$this->table." set ".$qry_body;		
			$this->db->query($qry);
		}

	
	//	if($this->db->affected_rows == 1) {
			$_SESSION['user_is_login']     = true;
			$_SESSION['user_id']      = $userInfo['id'];
			$_SESSION['user_name']    = $userInfo['name'];
			$_SESSION['user_fname']   = $userInfo['first_name'];
			$_SESSION['user_lname']   = $userInfo['last_name'];
			$_SESSION['user_email']   = $make_email;
			$_SESSION['front_user_email']   = $make_email;
			$_SESSION['user_gender']  = $userInfo['gender'];
			$_SESSION['user_picture'] = $userInfo['picture']['url'];
			$_SESSION['user_link']    = $userInfo['link'];
			
			//echo "<script>windiw.location.href='welcome.php'</script>";
			header('location:welcome.php');
			exit();
		//}
	}
	
}
?>