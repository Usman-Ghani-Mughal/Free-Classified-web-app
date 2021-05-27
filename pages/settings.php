<?php 
if(!$_SESSION['front_user_email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
?>
	</div>
</div>
<div class="wrapper wrapper-flash">
    <div class="breadcrumb">
       <div class="home-icon"><i class="fa fa-home"></i></div>
		<ul class="breadcrumb">
			<li class="first-child" >
				<a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a>
			</li>
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>My Account</span></li>
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>Settings</span></li>
		</ul>
    </div>
</div>
<br>

<div class="wrapper" id="content">
    <a href="#" data-bclass-toggle="display-filters" class="resp-toogle show-filters-btn">User menu</a>

	<?php include "libraries/profile_sidebar.php"; ?>

    <div id="main">
        <div class="list-header">
		<h2>Settings</h2>

<?php 

if(isset($_POST['name'])){
		
	$first_name		= $_POST['first_name'];
	$last_name		= $_POST['last_name'];

$UpdateProfile = mysqli_query($con,"UPDATE users SET
	
	first_name		= '$first_name',
	last_name		= '$last_name'
	
	WHERE id='$pro_id'	");

	if($UpdateProfile){
		$_SESSION['success']="Your Name Been Successfully Changed.";
		echo '<script>window.location.href = "index.php?page=settings&section=name";</script>';
	}else{
		$tempalert ="Query Error 404";
		include('libraries/alertmodalyet.php');
	
	}
			
}
if(isset($_POST['contact'])){
		
	$email			= $_POST['email'];
	$phone			= $_POST['phone'];
	$gender			= $_POST['gender'];
	$birthday 		= $_POST['birthday'];
	//$birthday 		= date('d F, Y', strtotime($_POST['birthday']));

$UpdateProfile = mysqli_query($con,"UPDATE users SET
	
	email		= '$email',
	phone		= '$phone',
	gender		= '$gender',
	birthday	= '$birthday'
	
	WHERE id='$pro_id'");

	if($UpdateProfile){
		$_SESSION['success'] = "Your Contact info Been Successfully Changed.";
		echo '<script>window.location.href = "index.php?page=settings&section=contact";</script>';
	}else{
		$tempalert ="Query Error 404";
		include('libraries/alertmodalyet.php');
	}
			
}
if(isset($_POST['address'])){
	
	$street			= $_POST['street'];
	$city			= $_POST['city'];
	$state			= $_POST['state'];
	$zip			= $_POST['zip'];

$UpdateProfile = mysqli_query($con,"UPDATE users SET
	
	street		= '$street',
	city		= '$city',
	state		= '$state',
	zip			= '$zip'
	
	WHERE id='$pro_id'	");

	if($UpdateProfile){
		$_SESSION['success'] = "Your Address Been Successfully Changed.";
		echo '<script>window.location.href = "index.php?page=settings&section=address";</script>';
	}else{
		$tempalert ="Query Error 404";
		include('libraries/alertmodalyet.php');
	}
			
}
if(isset($_POST['password'])){
		
	$c_password		= $_POST['current_password'];
	$n_password		= $_POST['new_password'];
	$rn_password	= $_POST['re_new_password'];
	
	$current_password	= md5($c_password);
	$new_password		= md5($n_password);
	$re_new_password	= md5($rn_password);
		
	if($new_password==$re_new_password){
		
	if($current_password){

	$GetPassword = mysqli_query($con,"SELECT * FROM users WHERE password='$current_password'");	
	$NumRows 	= mysqli_num_rows($GetPassword); 
			
		if($NumRows!=0){
			while($row=mysqli_fetch_assoc($GetPassword)){
				$db_password =  $row['password'];
			}
		if($db_password==$current_password){
			
			$ChangePasswod	= mysqli_query($con,"UPDATE users SET password='$new_password' WHERE email='$pro_email' ");
				
				if($ChangePasswod){
					
					echo '<script>window.location.href = "logout.php";</script>';
					
				}else{
					$tempalert ="Query Error 404";
					include('libraries/alertmodalyet.php');
				}
			}
				
			}else{
				$tempalert ="Your Current Password Not Exist";
				include('libraries/alertmodalyet.php');
				}
		}
	
	}else{
		$tempalert ="Password does not match the confirm password.";
		include('libraries/alertmodalyet.php');
	}	
}	
?>				
					<table class="table">
			
						<?php if(@$_GET['section']=='img'){ ?>
						<tr>
							<td colspan='3' bgcolor='#F4F4F4' >
<?php 
if(isset($_POST['img_update'])){
	
	unlink('assets/images/avatar/'.$pro_img);	
		
	 $img_temp = $_FILES['img']['tmp_name'];
        $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
        $rand = md5(uniqid().rand());
          $img = $rand.".".$ext;
    
	move_uploaded_file($img_temp, "assets/images/".$img);
   
	include "libraries/image.inc.php";

	create_thumbnail('assets/images/'.$img, 'assets/images/avatar/'.$img, 300, 300);
	$comp = unlink('assets/images/'.$img);

$UpdateQuery = mysqli_query($con,"UPDATE users SET img='$img' WHERE id='$pro_id'");

	if($UpdateQuery){
		echo '<script>window.location.href = "index.php?page=settings&section=img";</script>';
	}
}
if(isset($_POST['img_delete'])){
							
	unlink('assets/images/avatar/'.$pro_img);	

$UpdateQuery1 = mysqli_query($con,"UPDATE users SET img='' WHERE id='$pro_id'");

	if($UpdateQuery1){
		echo '<script>window.location.href = "index.php?page=settings&section=img";</script>';
	}
	
}
?>
							<form  id="SignUpForm" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-2 col-sm-2  form-group">
									<center>
									<?php 
										if(stripos($pro_img, 'http') !== FALSE){
									echo '<img class="thumbnail" src="'.$pro_img.'" width="100%" />';
									}else{ 
									if($pro_img){?>
										<img class="thumbnail" src="assets/images/avatar/<?php echo $pro_img; ?>" width="100%" />
									<?php }else{ 
										
											if($pro_gender=="Male"){
									?>  
										<img  class="thumbnail" src="assets/images/avatar/male.jpg" width="100%" />
									<?php }else{ ?>
										<img class="thumbnail" src="assets/images/avatar/female.jpg" width="100%" />	
									<?php }}} ?> 
									
										<?php if($pro_img){?>
										<!---a href="#deleteimg" class="text-danger" style="width:100%;"  data-toggle="modal">
											<b><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</b></a--->
										<?php } ?>
									
									</center>
									</div>	
									<div class="col-md-5 col-sm-5 form-0group">
										<label class="control-label">Choose Image <br /><small>(Size should be  300 x 300px) </small></label>
										<input type="file" name="img" class="form-control filestyle" data-buttonbefore="true" required="required" />
									</div>
									<div class="col-md-5 col-sm-5 form-group">
										<label class="control-label">&nbsp;</label>
										<button type="submit" name="img_update" class="btn btn-info" style="width:100%;"><i class="fa fa-upload"></i> UPLOAD</button>
									</div>
								</div>			
							</form>

<!--****** Start Basic Modal ******-->
  <div class="modal" id="deleteimg" tabindex="-1" role="dialog" aria-hidden="true" >
	<div class="modal-dialog modal-sm">
	  <div class="modal-content" >
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
		  <h4 class="modal-title"><strong>Delete Profile Image</strong> </h4>
		</div>
		<div class="modal-body">
			
				<b>Are you sure you want delete profile image?</b>
		
		</div>
		<div class="modal-footer">
		<form method="post">
				<button type='submit' name="img_delete" class="btn btn-danger "  >YES</button>
				<button  class="btn btn-primary"data-dismiss="modal" >NO</button>
			</form>
		</div>
	  </div>
	</div>
  </div>
  <!--****** End Basic Modal ******-->								
							</td>
						</tr>
						<?php }else{ ?>
						<tr>
							<td><b>Profile Picture</b> </td>
							<td  class="hidden-xs"  ></td>
							<td align='right'><a href="index.php?page=settings&section=img"><i class="fa fa-pencil"></i> Change</a></td>
						</tr>
						<?php } if(@$_GET['section']=='name'){ ?>
						<tr>
							<td colspan='3' bgcolor='#F4F4F4' >
							<form  id="SignUpForm" method="post">
								<div class="row">
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">First Name</label>
										<input type="text" name="first_name" class="form-control" value="<?php echo $pro_first_name; ?>" required="required" />
									</div>	
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Last Name</label>
										<input type="text" name="last_name" class="form-control" value="<?php echo $pro_last_name; ?>" required="required" />
									</div>
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">&nbsp;</label>
										<button type="submit" name="name" class="btn btn-info" style="width:100%;"><i class="fa fa-save"></i> SAVE</button>
									</div>	
								</div>			
							</form>	
							</td>
						</tr>
						<?php }else{ ?>
						<tr>
							<td><b>Name</b> </td>
							<td class="hidden-xs" ><?php echo $pro_first_name." ".$pro_last_name; ?></td>
							<td align='right'><a href="index.php?page=settings&section=name"><i class="fa fa-pencil"></i> Edit</a></td>
						</tr>
						<?php } if(@$_GET['section']=='contact'){ ?>
						<tr>
							<td colspan='3' bgcolor='#F4F4F4'>
							<form  id="" method="post">
								<div class="row">
									
										<input  type="hidden" name="username" class="form-control" value="<?php echo $pro_username; ?>" required="required" />
								
										<input  type="hidden" name="email" class="form-control" value="<?php echo $pro_email; ?>" required="required" />
								
									<div class="col-md-6 col-sm-6 form-group">
										<label class="control-label">Phone Number</label>
										<input type="text" name="phone" class="form-control" value="<?php echo $pro_phone; ?>" required="required" />
									</div>
									<div class="col-md-6 col-sm-6 form-group">
										<label class="control-label">Gender</label>
										<select name="gender" class="form-control" />
											<option value="<?php echo $pro_gender; ?>"><?php echo $pro_gender; ?></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
										
									</div>
									<div class="col-md-6 col-sm-6 form-group">
										<label class="control-label">Date of Birth</label>
									
										<input type="date" name="birthday" class="form-control" value="<?php echo $pro_birthday; ?>">
									</div>
									<div class="col-md-6 col-sm-6 form-group">
										<label class="control-label">&nbsp;</label>
										<button type="submit" name="contact" class="btn btn-info" style="width:100%;"><i class="fa fa-save"></i> SAVE</button>
									</div>	
								</div>			
							</form>	
							</td>
						</tr>
						<?php }else{ ?>
						<tr>
							<td><b>Contact And Basic Info</b></td>
							<td class="hidden-xs" ></td>
							<td align='right'><a href="index.php?page=settings&section=contact"><i class="fa fa-pencil"></i> Edit</a></td>
						</tr>
						<?php } if(@$_GET['section']=='password'){ ?>
						<tr>
							<td colspan='3' bgcolor='#F4F4F4'>
						<?php if(!$pro_unique_id=='school_demo'){?>
							<form id="SignUpForm" method="post">
						<?php } ?>
								<div class="row">
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Current  Password</label>
										<input type="password" class="form-control" name="current_password" value="<?php echo @$c_password; ?>" placeholder="Current Password" required="required" />
									</div>	
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">New Password</label>
										<input type="password" class="form-control" name="new_password" value="<?php echo @$n_password; ?>" placeholder="New Password" required="required" />
									</div>	
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Re-Enter New Password</label>
										<input type="password" class="form-control" name="re_new_password" value="<?php echo @$rn_password; ?>" placeholder="Re-Enter New Password" required="required" />
									</div>
									<div class="col-md-4 col-sm-4 form-group">
										<button type="submit" name="password" class="btn btn-info" style="width:100%;"><i class="fa fa-save"></i> SAVE</button>
									</div>	
								</div>			
							</form>
							</td>
						</tr>
						<?php }else{ 
						
						if($pro_password){
						?>
						
						<tr>
							<td><b>Password</b></td>
							<td class="hidden-xs" >***********</td>
							<td align='right'><a href="index.php?page=settings&section=password"><i class="fa fa-pencil"></i> Edit</a></td>
						</tr>
						<?php }} if(@$_GET['section']=='address'){ ?>
						<tr>
							<td colspan='3' bgcolor='#F4F4F4'>
							<form id="SignUpForm" method="post">
								<div class="row">
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">City</label>
										<input type="text" name="city" class="form-control" value="<?php echo $pro_city; ?>" required="required" />
									</div>	
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">State </label>
										<input  name="state" class="form-control" value='<?php echo $pro_state ?>' required="required" />		
									</div>
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Zip Code</label>
										<input type="text" name="zip" class="form-control" value="<?php echo $pro_zip; ?>" required="required" />
									</div>			
									<div class="col-md-8 col-sm-8 form-group">
										<label class="control-label">Street Adress</label>
										<input type="text" name="street" class="form-control" value="<?php echo $pro_street; ?>" required="required" />
									</div>
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">&nbsp;</label>
										<button type="submit" name="address" class="btn btn-info" style="width:100%;"><i class="fa fa-save"></i> SAVE</button>
									</div>	
								</div>			
							</form>
							
							</td>
						</tr>
						<?php }else{ ?>
						<tr>
							<td><b>Address</b></td>
							<td class="hidden-xs" ><?php echo $pro_street;?></td>
							<td align='right'><a href="index.php?page=settings&section=address"><i class="fa fa-pencil"></i> Edit</a></td>
						</tr>
						<?php } ?>
							
							
					</table>
					
		
		</div><!-- content -->
	</div>
	

</div>
