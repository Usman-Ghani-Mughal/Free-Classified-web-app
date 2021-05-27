<?php 
error_reporting(0);
session_start();

include("../admin/libraries/config.php"); 
include("get_user_details.php"); 
	
?>
			<ul class="list-group">
			<li class="list-group-item" style='background-color:#00b5cc; color:#FFF;' >
				<a href="index.php?page=messages" style="display:block; padding: 10px 15px;" >
				<center><b><i class="fa fa-search"></i> People search</b></center>
				</a>
			</li>
				<?php
					$getusersMSG = mysqli_query($con,"SELECT * FROM users WHERE username!='$pro_username'" ); 
					while($row=mysqli_fetch_assoc($getusersMSG)){

		  $totalMsgSent	= mysqli_num_rows(mysqli_query($con, "SELECT * FROM messages WHERE username='$pro_username'  AND to_user='".$row['username']."' "));
		  $totalMsgInbox	= mysqli_num_rows(mysqli_query($con, "SELECT * FROM messages WHERE to_user='$pro_username' AND username='".$row['username']."' "));
		  $totalMessages = $totalMsgSent+ $totalMsgInbox;	
		  if( $totalMessages>0){
				?>
				
				<?php if($_SESSION['to_user']==$row['username']){ ?>
				<li class="list-group-item" style='background-color:#00b5cc; color:#FFF;' >
				<?php }else{ ?>
				<li class="list-group-item">
				<?php } ?>
				<a href="index.php?page=messages&userid=<?php echo $row['id']; ?>&user=<?php echo $row['username']; ?>" style="display:block; padding: 10px 15px;" >
						<?php 
						if(stripos($row['img'], 'http') !== FALSE){
							echo '<img class="img-circle"  src="'.$row['img'].'" width="30" style="border:1px solid #000;" />';
						}else{ 
						
						if($row['img']){?>
							<img class='img-circle' src="assets/images/avatar/<?php echo $row['img']; ?>" width="30" style='border:1px solid #000;' />
						<?php }else{ 
								if($row['gender']=="Male"){
						?>  
							<img class='img-circle' src="assets/images/avatar/male.jpg" width="30"  style='border:1px solid #000;'/>
						<?php }else{ ?>
							<img class='img-circle' src="assets/images/avatar/female.jpg" width="30"  style='border:1px solid #000;'/>	
						<?php }}} ?>
						
				<?php echo $row['first_name'].' '.$row['last_name']; ?>
					<?php   
						$totalMsgUser	= mysqli_num_rows(mysqli_query($con, "SELECT * FROM messages WHERE username='".$row['username']."' AND to_user='$pro_username' AND status='0' "));
						if($totalMsgUser>0){		
						?>
						<span class='badge'><b><?php echo $totalMsgUser; ?></b></span>
						<?php } ?>
				</a></li>
					<?php }} ?>
			</ul>
