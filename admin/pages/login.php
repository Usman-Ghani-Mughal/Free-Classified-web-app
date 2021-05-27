

    <!--main content start-->
    <div class="bg-overlay" style="
							background: url(assets/images/bg.jpg) no-repeat center center fixed;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;
							background-size: cover;"
 ></div>
    <section class="registration-login-wrapper">

        <!--======== START LOGIN ========-->
        <div class="row" >
		  <div class="col-md-4 col-xs-2 "></div> 
			<div class="col-md-4 " style=" margin-bottom:50px; margin-top:-50px; background: rgba(255,255,255, .5);">
				
				<center>	
					<img src="../assets/images/logo.png" width="400" />
					<h2 style='font-weight:bold; color:#000;'>CONTENT MANAGEMENT SYSTEM</h2>
			
				</center>
			</div>
		</div>
        <div class="row page-login">

            
            <div class="col-md-4 col-xs-2 "></div> 
            <div class="col-md-4 col-xs-8 "> 

                <div class="form-body bg-white padding-20">
                   
<!-- PHP Login Code Starts Here -->
<?php
if(isset($_POST['login'])){
	
	$email 	= $_POST['email'];
	$password = md5($_POST['password']);
	

$AdminLoginQuery = mysqli_query($con,"SELECT * FROM  admin WHERE username='$email' OR email='$email'");
$NumRows = mysqli_num_rows($AdminLoginQuery);
	if($NumRows!=0){
		while($row=mysqli_fetch_assoc($AdminLoginQuery)){
			$dbusename	= $row['username'];
			$dbemail	= $row['email'];
			$dbpassword	= $row['password'];
			$dbstatus	= $row['status'];
			
			if($dbusename == $email){
				$crnt_email = $dbusename;
				$checkuser  = $dbusename;
			}
			if($dbemail == $email){
				$crnt_email = $dbemail;
				$checkuser  = $dbemail;
			}
		}
		
		if($checkuser == $crnt_email && $password == $dbpassword){
	
		if($dbstatus=="Unblocked"){
		$_SESSION['email'] = $dbemail;
		  echo "<script>window.open('index.php?page=home','_self');</script>";
		}else{
		$tempalert ="Your account is pending for approval by admin";
		include('libraries/alertmodalyet.php');
		}
	}
	else{
		$tempalert ="Incorrect Your Password";
		include('libraries/alertmodalyet.php');
	}	
	}
	else{
		$tempalert ="That User doesn't exist...!";
		include('libraries/alertmodalyet.php');
	}

}

?>	
	
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "get_pro_img.php?email="+str, true);
        xmlhttp.send();
    }
}
</script>
			<span id="txtHint"></span>
            <div class="form-header bg-white padding-10 text-center">
                <h2><strong>Login</strong> to your account</h2>

            </div>

            <form method="post">
                <div class="inner-addon right-addon margin-bottom-15">
                    <i class="fa fa-envelope"></i>
                    <input type="text" class="form-control" name="email" placeholder="Email or Username" value="<?= $email; ?>" required onfocusout="showHint(this.value)" />
                </div>

                <div class="inner-addon right-addon margin-bottom-15">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required/>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" name='login' class="form-control btn btn-green btn-raised btn-flat">Access Account</button>
                    </div>
                </div>
            </form>

                    <hr/>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Forgot Password?</h4>
                            <p><a href="#">Click here to reset password</a></p>
                        </div>
                    </div>

                </div><!--/form-body-->
                
            </div><!--/col-md-12-->

        </div><!--/row-->
        <!--======== END LOGIN ========-->

    </section>
    <!--======== Main Content End ========-->


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

    <!-- For Form Elements Page Only -->
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/form-validation.js"></script>
    <script src="assets/js/form-wizard.js"></script>
    <script src="assets/js/form-plupload.js"></script>
    <script src="assets/js/form-x-editable.js"></script>

    <!-- For Login and registration page Only -->
    <script src="assets/vendors/backstretch/jquery.backstretch.min.js"></script>
    <script src="assets/js/registration-login.js"></script>

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