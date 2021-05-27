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


        <!--main content start-->
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

                <!--======== Page Title and Breadcrumbs Start ========-->
                <div class="top-page-header">
                    
                    <div class="page-title">
                        <h2>Sign Up</h2>
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="">Dashboard</a></li>
                                <li class="active"><a href="#">Sign Up</a></li>
                            </ul>
                        </nav>
                    </div>
                   

                </div>
                <!--======== Page Title and Breadcrumbs End ========-->

                <!--======== START REGISTRATION ========-->
                <div class="row page-registration">

                    <div class="col-sm-12">   

                        <div class="form-header bg-white padding-10 text-center">
                            <h2><strong>Register</strong> a new account</h2>
                         
                        </div>

                        <div class="form-body bg-white padding-20">
<?php 

if(isset($_POST['signup'])){

	$first_name		= $_POST['first_name'];
	$last_name		= $_POST['last_name'];
	$mobile			= $_POST['mobile'];
	$username		= $_POST['user'];
	$email			= $_POST['email'];
	$role			= $_POST['role'];
	$password		= md5($_POST['password']);
	$re_password	= md5($_POST['re_password']);
	
	if($password==$re_password){
		
		$GetUsername = mysqli_query($con,"SELECT * FROM admin WHERE username='$username'");	
		$NumRowsUser = mysqli_num_rows($GetUsername); 
			
		if($NumRowsUser!=0){
			while($row=mysqli_fetch_assoc($GetUsername)){
				$db_username =  $row['username'];
			}
		if($db_username==$username){
			$tempalert ="Your uername already exists";
			include('libraries/alertmodalyet.php');
		}		
		}else{
			
		$Getemail = mysqli_query($con,"SELECT * FROM admin WHERE email='$email'");	
		$NumRows = mysqli_num_rows($Getemail); 
			
		if($NumRows!=0){
			while($row=mysqli_fetch_assoc($Getemail)){
				$db_email =  $row['email'];
			}
		if($db_email==$email){
			$tempalert ="Your email already exists";
			include('libraries/alertmodalyet.php');
		}		
		}else{
			$CeateAccount = mysqli_query($con,"INSERT INTO admin VALUE (
				'',
				'',
				'$first_name',
				'$last_name',
				'$mobile',
				'Male',
				'',
				'$username',
				'$email',
				'$password',
				'',
				'',
				'',
				'',
				'$role',
				'Unblocked'
			)");
			
			if($CeateAccount){
				$_SESSION['success'] = "Account has been successfully created";
				echo '<script>window.location.href = "index.php?page=users";</script>';
			}
		}
		}

	}else{
		$tempalert ="Password does not match the confirm password.";
		include('libraries/alertmodalyet.php');
	}
}	
?>
<form method="post">
	<div class="row">
		  <div class="col-md-6 form-group">
			<label>First Name</label>
			<input type="text" class="form-control first-name" name="first_name" value="<?= $first_name; ?>" placeholder="First Name" required />
		</div>
		  <div class="col-md-6 form-group">
			<label>Last Name</label>
			<input type="text" class="form-control first-name" name="last_name" value="<?= $last_name; ?>" placeholder="Last Name" required />
		</div>
		<div class="col-md-6 form-group">
			<label for="email-address">Usename</label>
			<input type="text" class="form-control" name="user" value="<?= $username; ?>" placeholder="Username" required />
		</div>
		<div class="col-md-6 form-group">
			<label for="email-address">Email Address</label>
			<input type="email" class="form-control" id="email-address" name="email" value="<?= $email; ?>" placeholder="Email Address" required />
		</div>
		<div class="col-md-6 form-group">
			<label for="email-address">Phone No</label>
			<input type="text" class="form-control" name="mobile" value="<?= $mobile; ?>" placeholder="Phone No" required />
		</div>
		<div class="col-md-6 form-group">
			<label for="email-address">Role</label>
			<select class="form-control" name="role" required >
				<option value="<?= $role; ?>">Role</option>
				<option value="Admin">Admin</option>
			</select>
		</div>
		<div class="col-md-6 form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password"  name="password" placeholder="Password" required />
	   </div>
	   <div class="col-md-6 form-group">
			<label for="confirm-password">Confirm Password</label>
			<input type="password" class="form-control" id="confirm-password" name="re_password" placeholder="Confirm Password" required />
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<button type="submit"  name="signup" class="form-control btn btn-green btn-raised btn-flat">Sign Up</button>
		</div>
	</div>	
</form>
<br />
<br />


                        </div><!--/form-body-->
                        
                    </div><!--/col-md-12-->

                </div><!--/row-->
                <!--======== END REGISTRATION ========-->


            </section>
        </section>
        <!--======== Main Content End ========-->


        <!--===== Right sidebar nofications start ========-->
        <aside>
            <div id="right-sidebar" class="right-sidebar-notifcations nav-collapse hide-right-bar-notifications">
                <div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">
                    <ul id="right-sidebar-tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#activities" id="activities-tab" role="tab" data-toggle="tab" aria-controls="activities" aria-expanded="true">Activities</a>
                        </li>
                        <li role="presentation">
                            <a href="#tasks" role="tab" id="tasks-tab" data-toggle="tab" aria-controls="tasks">Tasks</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" role="tab" id="settings-tab" data-toggle="tab" aria-controls="settings">Settings</a>
                        </li>
                        
                    </ul>
                    <div id="right-sidebar-tab-content" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="activities" aria-labelledBy="activities-tab">
                            <div class="right-sidebar-panel-content-heading">
                                <h4><span class="icon-user"></span> Latest user activities</h4>
                                <small>10 Latest Activities</small>
                            </div>
                            <div class="right-sidebar-panel-content animated fadeInRight">
                                
                                <ul class="right-sidebar-list">
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image" />
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - User Login...</h5>
                                            <p>Accessing the system...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img3.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating...</h5>
                                            <p>Updating user ID 1 ...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img2.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting...</h5>
                                            <p>Deleting user message...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img5.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Accessing...</h5>
                                            <p>User accessing the sys...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Viewing...</h5>
                                            <p>Viewing the user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Reading...</h5>
                                            <p>Reading user message...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    
                                </ul>    

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tasks" aria-labelledBy="tasks-tab">
                            <div class="right-sidebar-panel-content-heading">
                                <h4><span class="icon-list"></span> Recent tasks</h4>
                                <small>15 Ongoing tasks</small>
                            </div>
                            <div class="right-sidebar-panel-content animated fadeInRight">
                                
                                <ul class="right-sidebar-list">
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5><a href="#">John Doe - Creating Tasks</a></h5>
                                            <p>To update the sidebar...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img2.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img3.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img4.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img5.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/users/img4.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    
                                </ul>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings" aria-labelledBy="settings-tab">
                            <div class="right-sidebar-panel-content-heading">
                                <h4><span class="icon-list"></span> System Settins</h4>
                                <small>80% Completed Settings</small>
                            </div>
                            <div class="right-sidebar-panel-content animated fadeInRight">
                                <ul class="right-sidebar-list">
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox" checked="">
                                            <i data-on="YES" data-off="NO"></i> Email Notifications
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> Daily Email Notifiactions
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox" checked="">
                                            <i data-on="YES" data-off="NO"></i> Show user visitors
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox" checked="">
                                            <i data-on="YES" data-off="NO"></i> Show birthdate
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> Show address
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> Payment Recurring
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> SMS Notifications
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /example -->
                <div class="btn-bottom-right-sidebar-close">
                    <span class="fa fa-times"></span>
                </div>
                    
            </div>
        </aside>    
        <!--===== Right sidebar nofications end ========-->

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
    <!-- <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/vendors/jquery.cookie/jquery.cookie.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.1.3.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.js"></script>
    <script src="assets/vendors/jquery/dcjqaccordion.2.7.js"></script>
    <script src="assets/vendors/jquery/scrollTo.min.js"></script>
    <script src="assets/vendors/jquery/slimscroll.js"></script>
    <script src="assets/vendors/jquery/nicescroll.js"></script>
    <script src="assets/vendors/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/vendors/counter/waypoints.min.js" type="text/javascript" ></script>
    <script src="assets/vendors/counter/jquery.counterup.min.js" type="text/javascript" ></script>
    <script src="assets/vendors/jquery-icheck/icheck.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="assets/vendors/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="assets/vendors/summernote/summernote.min.js"></script>
    <script src="assets/vendors/jquery.autosize/jquery.autosize.js"></script>
    <script src="assets/vendors/jquery.multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/vendors/jquery.multi-select/js/jquery.quicksearch.js"></script>
    <script src="assets/vendors/typeahead/js/typeahead.bundle.js"></script>
    <script src="assets/vendors/typeahead/js/handlebars.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/bootstrap-star-rating/js/star-rating.min.js"></script>
    <script src="assets/vendors/bootstrap-fileupload/js/bootstrap-fileupload.js"></script>
    <script src="assets/vendors/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
    <script src="assets/vendors/jquery.validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/vendors/dropzone/dropzone.min.js"></script>
    <script src="assets/vendors/plupload/js/plupload.full.min.js"></script>
    <script src="assets/vendors/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
    <script src="assets/vendors/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
    <script src="assets/vendors/x-editable/inputs-ext/address/address.js"></script>
    <script src="assets/vendors/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="assets/vendors/magnific-popup/js/jquery.magnific-popup.js"></script>
    <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendors/moment.min.js"></script>
    <script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/vendors/raphael-min.js" charset="utf-8" ></script>
    <script src="assets/vendors/sweetalert/sweetalert.min.js"></script>
    <script src="assets/vendors/word-rotator/jquery.wordrotator.min.js"></script>
    <script src="assets/vendors/wow-animations/js/wow.min.js"></script>
    <script src="assets/vendors/rwd-table/js/96f0c828ebc6582cfdb04ad18f1a5c09.js"></script>
    <script src="assets/vendors/jqueryui.sortable.animation/jquery.ui.sortable-animation.js"></script>
    <script src="assets/vendors/tooltipster/js/jquery.tooltipster.js" type="text/javascript" ></script>
    <script src="assets/vendors/dropdowns-enhancement/js/dropdowns-enhancement.min.js" type="text/javascript"></script>
    <script src="assets/vendors/jquery-notific8/jquery.notific8.js" type="text/javascript"></script>
    <script src="assets/vendors/date.js"></script>
    <script src="assets/vendors/pogo-slider/js/jquery.pogo-slider.min.js" type="text/javascript" ></script>
    <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript" ></script>
    <script src="../../../vendors/nestable/jquery.nestable.js" type="text/javascript" ></script>
    <script src="assets/vendors/bstooltip/bstooltip.js"></script> -->

    <!--##################################################################################
    #
    # COMMON SCRIPT FOR THIS PAGE
    #
    ##################################################################################-->

    <!--common script init for all pages-->
    <script src="assets/js/theme.js" type="text/javascript" ></script>

    <!-- For Form Elements Page Only -->
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/form-validation.js"></script>
    <script src="assets/js/form-wizard.js"></script>
    <script src="assets/js/form-plupload.js"></script>
    <script src="assets/js/form-x-editable.js"></script>


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