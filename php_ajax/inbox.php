
<?php 
error_reporting(0);
session_start();
include("../admin/libraries/config.php"); 
include("get_user_details.php"); 
	
	

  $user1 = $_SESSION['user1'];
  $user2 = $_SESSION['user2'];

 
// $getMessages	= mysqli_query($con, "SELECT * FROM messages WHERE recover='$pro_username' OR sender='$pro_username' AND recover='".$_SESSION['username_msg']."' OR sender='".$_SESSION['username_msg']."' ");
 
 $getMessages	= mysqli_query($con, "SELECT * FROM messages WHERE recover='$user1' OR sender='$user1' AND recover='$user2' OR sender='$user2' ORDER BY 1 DESC");
 $getTotalMessages	= mysqli_num_rows(mysqli_query($con, "SELECT * FROM messages WHERE recover='$user1' OR sender='$user1' AND recover='$user2' OR sender='$user2'"));

 
	while($row=mysqli_fetch_assoc($getMessages)){
		
$getSenderImg = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE username='".$row['username']."' ")); 

	if($row['recover']==$user1){
	
	?>
	<div class='pull-left' style='max-width: 90%; clear:both; margin:5px; padding:8px; border-radius:5px; background-color:#00b5cc; color:#FFF;' >
		
				<table width='100%'>
			<tr>
				<td width="40">
					<?php 
						if(stripos($getSenderImg['img'], 'http') !== FALSE){
						echo '<img src="'.$getSenderImg['img'].'" style="margin-right:10px; width: 30px;" />';

						}else{ 
					
					if($getSenderImg['img']){?>
						<img class='img-circle' src="assets/images/avatar/<?php echo $getSenderImg['img']; ?>"  style='margin-right:10px; width: 30px;' />
					<?php }else{ 
							if($getSenderImg['gender']=="Male"){
					?>  
						<img class='img-circle' src="assets/images/avatar/male.jpg"  style='margin-right:10px; width: 30px;'/>
					<?php }else{ ?>
						<img class='img-circle' src="assets/images/avatar/female.jpg" style='margin-right:10px; width: 30px;'/>	
					<?php }}} ?> 
				</td>
				<td><?php echo $row['message']; ?></td>
			</tr>
		</table>
		<small class='pull-right'  style='color:#333; font-size:8px; font-weight:bold; '><em><?php echo $row['date'].' | '.$row['time']; ?></em></small>
	</div>
	<?php }	if($row['recover']==$user2){ ?>
	<div class='pull-right ' style='max-width: 90%; clear:both; margin:5px; padding:8px; border-radius:5px; background-color:#ff5621;  color:#FFF;'>
	
		<table width='100%'>
			<tr>
				<td><?php echo $row['message']; ?></td>
				<td width="40">
					<?php 
						if(stripos($getSenderImg['img'], 'http') !== FALSE){
						echo '<img src="'.$getSenderImg['img'].'" style="margin-left:10px; width: 30px;" />';

						}else{ 
					if($getSenderImg['img']){?>
						<img class='img-circle' src="assets/images/avatar/<?php echo $getSenderImg['img']; ?>"  style='margin-left:10px; width: 30px;' />
					<?php }else{ 
							if($getSenderImg['gender']=="Male"){
					?>  
						<img class='img-circle' src="assets/images/avatar/male.jpg"  style='margin-left:10px; width: 30px;'/>
					<?php }else{ ?>
						<img class='img-circle' src="assets/images/avatar/female.jpg" style='margin-left:10px; width: 30px;'/>	
				<?php }}} ?> 
				</td>	
			</tr>
		</table>
		<small class='pull-right' style='color:#333; font-size:8px; font-weight:bold; '><em><?php echo $row['date'].' | '.$row['time']; ?></em></small>
		
	</div>
		
<?php }} if($getTotalMessages==0){ ?>
<center>
<br />
<br />
<br />
	<img src="assets/images/icon/No messages.png" width="50" />

	<h3>No Message</h3>
</center>
<?php } ?>


