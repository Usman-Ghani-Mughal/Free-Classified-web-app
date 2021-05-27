<?php 
	 @$pro_email = $_SESSION['front_user_email'];
		
	$SelectProfileInfo	= mysqli_query($con,"SELECT * FROM users WHERE email='$pro_email' ");
		while($row=mysqli_fetch_assoc($SelectProfileInfo)){
				
			$pro_id				= $row['id'];
			$pro_img			= $row['img'];
		 	$pro_first_name		= $row['first_name'];
			$pro_last_name		= $row['last_name'];
			$pro_username		= $row['username'];
			$pro_full_name		= $pro_first_name.' '.$pro_last_name;
			$pro_phone			= $row['phone'];
			$pro_gender			= $row['gender'];
			$pro_birthday		= $row['birthday'];
			$pro_street			= $row['street'];
			$pro_city			= $row['city'];
			$pro_state			= $row['state'];
			$pro_zip			= $row['zip'];
			$pro_role			= $row['role'];
			$pro_status			= $row['status'];
	}
?>