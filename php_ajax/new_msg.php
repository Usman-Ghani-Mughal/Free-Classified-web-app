<?php 
error_reporting(0);
session_start();

include("../admin/libraries/config.php"); 
include("get_user_details.php"); 
	
$totalInboxMsgs = mysqli_num_rows(mysqli_query($con, "SELECT * FROM messages WHERE to_user='$pro_username' AND status='0' "));
echo  "<span class='badge'><b><i class='fa fa-envelope' aria-hidden='true'></i> ". $totalInboxMsgs."</b></span>";

?>
