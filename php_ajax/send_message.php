<?php
error_reporting(0);
session_start();
include("../admin/libraries/config.php"); 
include("get_user_details.php"); 

date_default_timezone_set('Asia/Karachi');
$crntDate	= date('d F, Y');
$crntTime	= date("h:i A");

if($_POST['message'] AND $_SESSION['to_user']){
	$SendMsg = mysqli_query($con, "INSERT INTO messages VALUE(
		'',
		'$pro_username',
		'".$_SESSION['to_user']."',
		'".$_SESSION['user1']."',
		'".$_SESSION['user2']."',
		'".$_POST['message']."',
		'$crntDate',
		'$crntTime',
		''
	)");
}

?>