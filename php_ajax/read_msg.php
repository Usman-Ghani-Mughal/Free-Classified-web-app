<?php 
error_reporting(0);
session_start();

include("../admin/libraries/config.php"); 
include("get_user_details.php"); 
	
mysqli_query($con, "UPDATE messages SET status='1' WHERE username='".$_SESSION['to_user']."' AND to_user='$pro_username' AND status='0' ");

?>
