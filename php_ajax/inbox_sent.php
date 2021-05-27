<?php 
error_reporting(0);
session_start();
include("../admin/libraries/config.php"); 
include("get_user_details.php"); 
	
$totalInboxMsgs = mysqli_num_rows(mysqli_query($con, "SELECT * FROM messages WHERE recover='$pro_username' "));
$totalSentMsgs	= mysqli_num_rows(mysqli_query($con, "SELECT * FROM messages WHERE sender='$pro_username' "));
?>
		
		<ul class="user_menu">
			<li style='float:left' <?php if(isset($_GET['inbox'])){?> class='actBtn' <?php }?>>	
				<a href="index.php?page=messages&inbox"><b>Inbox (<?php echo $totalInboxMsgs; ?>)</b></a></li>
			<li style='float:left' <?php if(isset($_GET['sent'])){?> class='actBtn' <?php }?>>	
				<a href="index.php?page=messages&sent"><b>Sent (<?php echo $totalSentMsgs; ?>)</b></a></li>
		</ul>