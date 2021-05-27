<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "dashboard";
	$active_submenu = "";
	include "libraries/navigation_top.php"; 
	include "libraries/navigation_left.php"; 
?>
        <section id="main-content">
                
            <section class="wrapper">
                    
                <!--======== Grid Menu Start ========-->
                <div id="grid-menu">
                    <div class="color-overlay grid-menu-overlay">
                        <div class="grid-icon-wrap grid-icon-effect-8">
                            <a href="#" class="grid-icon icon-envelope font-size-50 turquoise"></a>
                            <a href="#" class="grid-icon icon-user font-size-50 teal"></a>
                            <a href="#" class="grid-icon icon-support font-size-50 peter-river"></a>
                            <a href="#" class="grid-icon icon-settings font-size-50 light-blue"></a>
                            <a href="#" class="grid-icon icon-picture font-size-50 orange"></a>
                            <a href="#" class="grid-icon icon-camrecorder font-size-50 light-orange"></a>
                        </div>
                    </div>
                </div>                
                <!--======== Grid Menu End ========-->

                <!--======== START USER PROFILE MAIN ========-->
                <div class="profile-page">

                    <div class="row profile-cover">
                        <div class="row">
                            <div class="col-md-3 profile-image">
                                <div class="profile-image-container">
								<?php if($pro_img){?>
									<img src="assets/images/avatar/<?php echo $pro_img; ?>" alt="image">
								<?php }else{ if($pro_gender=="Male"){ ?>  
									<img src="assets/images/avatar/male.jpg" alt="image">
								<?php }else{ ?>
									<img src="assets/images/avatar/female.jpg" alt="image">
								<?php }} ?> 
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 profile-under-cover-style">
                            &nbsp;
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row margin-top-70">
                    

                        <div class="col-md-12" style="background:rgba(255, 255, 255, 0.5);">

                            <!--Start Profile Contacts-->
                            <div class="row margin-top-16 margin-bottom-16">   
                                <div class="col-md-12">

                                    <div class="panel panel-profile">
                                      
                                        <div class="panel-body">
                                            <h2 class="panel-title heading-sm pull-left"><i class="icon-settings"></i>Settings</h2>
											<br /><br />
                                            <div class="row settings">

                                                <div class="col-md-12">
<?php 

if(isset($_POST['name'])){
		
	$first_name		= $_POST['first_name'];
	$last_name		= $_POST['last_name'];

$UpdateProfile = mysqli_query($con,"UPDATE admin SET
	
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

$UpdateProfile = mysqli_query($con,"UPDATE admin SET
	
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

$UpdateProfile = mysqli_query($con,"UPDATE admin SET
	
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

	$GetPassword = mysqli_query($con,"SELECT * FROM admin WHERE password='$current_password'");	
	$NumRows 	= mysqli_num_rows($GetPassword); 
			
		if($NumRows!=0){
			while($row=mysqli_fetch_assoc($GetPassword)){
				$db_password =  $row['password'];
			}
		if($db_password==$current_password){
			
			$ChangePasswod	= mysqli_query($con,"UPDATE admin SET password='$new_password' WHERE email='$pro_email' ");
				
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
	
$UpdateQuery = mysqli_query($con,"UPDATE admin SET img='$img' WHERE id='$pro_id'");

	if($UpdateQuery){
		echo '<script>window.location.href = "assets/images/img_crop_profile.php?img='.$img.'";</script>';
	}else{
		$tempalert ="Query Error 404";
		include('libraries/alertmodalyet.php');
		
	}
}
if(isset($_POST['img_delete'])){
							
	unlink('assets/images/avatar/'.$pro_img);	

$UpdateQuery1 = mysqli_query($con,"UPDATE admin SET img='' WHERE id='$pro_id'");

	if($UpdateQuery1){
		$_SESSION['success'] = "Profile picture has been deleted";
		echo '<script>window.location.href = "index.php?page=settings&section=img";</script>';
	}else{
		$tempalert ="Query Error 404";
		include('libraries/alertmodalyet.php');
	}
	
}
?>
							<form  id="SignUpForm" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-2 col-sm-2  form-group">
									<center>
									<?php if($pro_img){?>
										<img class="thumbnail" src="assets/images/avatar/<?php echo $pro_img; ?>" width="100%" />
									<?php }else{ 
										
											if($pro_gender=="Male"){
									?>  
										<img  class="thumbnail" src="assets/images/avatar/male.jpg" width="100%" />
									<?php }else{ ?>
										<img class="thumbnail" src="assets/images/avatar/female.jpg" width="100%" />	
									<?php }} ?> 
									
										<?php if($pro_img){?>
										<a href="#deleteimg" class="text-danger" style="width:100%;"  data-toggle="modal"><b><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</b></a>
										<?php } ?>
									
									</center>
									</div>	
									<div class="col-md-5 col-sm-5 form-0group">
										<label class="control-label">Choose Image ( <small>Size should be  300 x 300px </small>)</label>
										<input type="file" name="img" class="form-control filestyle" data-buttonbefore="true" required="required" />
							
									</div>
									<div class="col-md-5 col-sm-5 form-group">
										<label class="control-label">&nbsp;</label>
										<button type="submit" name="img_update" class="btn btn-info" style="width:100%;"><i class="fa fa-upload"></i> UPLOAD</button>
									</div>
								</div>			
							</form>

<!--****** Start Basic Modal ******-->
  <div class="modal" id="deleteimg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
	  <div class="modal-content">
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
							<td class="hidden-xs" ><?php echo $pro_first_name." ".$pro_last_name;?></td>
							<td align='right'><a href="index.php?page=settings&section=name"><i class="fa fa-pencil"></i> Edit</a></td>
						</tr>
						<?php } if(@$_GET['section']=='contact'){ ?>
						<tr>
							<td colspan='3' bgcolor='#F4F4F4'>
							<form  id="" method="post">
								<div class="row">
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Username</label>
										<input readonly type="text" name="username" class="form-control" value="<?php echo $pro_username; ?>" required="required" />
									</div>	
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">E-Mail ID</label>
										<input readonly type="text" name="email" class="form-control" value="<?php echo $pro_email; ?>" required="required" />
									</div>	
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Phone Number</label>
										<input type="text" name="phone" class="form-control" value="<?php echo $pro_phone; ?>" required="required" />
									</div>
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Gender</label>
										<select name="gender" class="form-control" />
											<option value="<?php echo $pro_gender; ?>"><?php echo $pro_gender; ?></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
										
									</div>
									<div class="col-md-4 col-sm-4 form-group">
										<label class="control-label">Date of Birth</label>
									
										<input type="date" name="birthday" class="form-control" value="<?php echo $pro_birthday; ?>">
									</div>
									<div class="col-md-4 col-sm-4 form-group">
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
							<td class="hidden-xs" ><?php echo $pro_email;?></td>
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
						<?php }else{ ?>
						<tr>
							<td><b>Password</b></td>
							<td class="hidden-xs" >***********</td>
							<td align='right'><a href="index.php?page=settings&section=password"><i class="fa fa-pencil"></i> Edit</a></td>
						</tr>
						<?php } if(@$_GET['section']=='address'){ ?>
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


                                                </div><!--/col-md-12-->
                                                
                                            </div><!--/row-->


                                        </div><!--/panel-body-->        
                                    </div>

                                </div>
                                
                            </div><!--/row-->
                            <!--End Profile Contacts-->


                        </div>
                    </div>

                </div>  
                <!--======== END USER PROFILE MAIN ========-->


            </section>
        </section>
        <!--======== Main Content End ========-->




    </section><!--/.container-->

    <!--===== Footer Start ========-->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!--##################################################################################
    #
    # Thema GLOBAL JS PLUGINS
    # 
    # NOTE: These libraries are neccessary to run the template so don't remove one of these libraries. 
    # You can uncomment the following libraries commented and comment the global-plugins.js but it will may cause slow performance of the template because of many links should be load from the server.
    #
    ##################################################################################-->
    <script src="assets/js/global-plugins.js"></script>

    <!--##################################################################################
    #
    # COMMON SCRIPT FOR THIS PAGE
    #
    ##################################################################################-->

    <!--common script init for all pages-->
    <script src="assets/js/theme.js" type="text/javascript" ></script>

    <!-- For for the page that has form only -->
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/form-validation.js"></script>
    <script src="assets/js/form-wizard.js"></script>
    <script src="assets/js/form-plupload.js"></script>
    <script src="assets/js/form-x-editable.js"></script>


    <!-- For User Profile Page Only -->
    <script src="assets/js/profile.js"></script>

    <script type="text/javascript">


        $(document).ready(function(){
            new WOW().init();

            App.initPage();
            App.initLeftSideBar();
            App.initCounter();
            App.initNiceScroll();
            App.initPanels();
            App.initProgressBar();
            App.initSlimScroll();
            App.initNotific8();
            App.initTooltipster();
            App.initStyleSwitcher();
            App.initMenuSelected();
            App.initRightSideBar();
            App.initSummernote();
            App.initAccordion();
            App.initModal();
            App.initPopover();

        });
    </script>


<!--===== Footer End ========-->