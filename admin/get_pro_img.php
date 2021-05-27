<?php 
error_reporting(0);
session_start();
include("libraries/config.php"); 

 $email = $_GET['email'];

$AdminLoginQuery = mysqli_query($con,"SELECT * FROM admin WHERE username='$email' OR email='$email'");
$NumRows = mysqli_num_rows($AdminLoginQuery); 
	if($NumRows!=0){
		while($row=mysqli_fetch_assoc($AdminLoginQuery)){
			 $first_name	= $row['first_name'];
			 $dbemail		= $row['email'];
			 $img_path		= $row['img'];
			 $gender		= $row['gender'];
		}
	}

	if(!$img_path AND !$first_name){
		
			echo '<center><img class="login-img-card" src="assets/images/avatar/male.jpg" width="70" />';
			echo "<br />That User doesn't exist...!<hr /></center>";
	}else{
		if($img_path){
			echo '
				<table width="100%">
					<tr>
						<td width="90"><br />
							<img class="thumbnail" src="assets/images/avatar/'.$img_path.'" width="70"  /></td>
						<td>
							<h4>Hi '.$first_name.'</h4>'.$dbemail.'
						</td>
					</tr>
				</table><hr />
				';
		}else{
			if($gender=='Male'){
				echo '
					<table width="100%">
						<tr>
							<td width="90"><br />
								<img class="thumbnail" src="assets/images/avatar/male.jpg" width="70"  /></td>
							<td>
								<h4>Hi '.$first_name.'</h4>'.$dbemail.'
							</td>
						</tr>
					</table><hr />
					
					';	
			}else{
				echo '
					<table width="100%">
						<tr>
							<td width="90"><br />
								<img class="thumbnail" src="assets/images/avatar/female.jpg" width="70"  /></td>
							<td>
								<h4>Hi '.$first_name.'</h4>'.$dbemail.'
							</td>
						</tr>
					</table><hr />
					
					';
			}
		}
	}

   
   ?>