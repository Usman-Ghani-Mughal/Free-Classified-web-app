<?php 
	// $getSubCats = mysqli_query($con, "SELECT * FROM sub_categories WHERE id='".$_GET['sc']."'");
	// $row1=mysqli_fetch_assoc($getSubCats);
 	// $subCatName 	= $row1['name'];

	// if($_GET['sc']){
		// $getMainCats = mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$row1['main_cat_id']."'");
	// }if($_GET['mc']){
		// $getMainCats = mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$_GET['mc']."'");
	// }
	// $row2=mysqli_fetch_assoc($getMainCats);
	
	// $mainCatId 		= $row2['id'];
 	// $mainCatName 	= $row2['name'];
?>

	</div>
</div>	


<div class="wrapper wrapper-flash">
	<div class="breadcrumb">
        <div class="home-icon"><i class="fa fa-home"></i></div>
            <ul class="breadcrumb">
				<li class="first-child" ><a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a></li>
				<li class="last-child"><i class="fa fa-angle-right"></i> <span itemprop="title">Login</span></li>
			</ul>
    </div>
</div>

<br />
<div class="wrapper" id="content">
        <div id="main">
        <div class="form-container form-vertical form-container-box">
    		<div class="resp-wrapper">
			     <div class="header">
				    <h1>PLEASE LOGIN</h1>
				    <hr>
			     </div>
			<?php
			// Don't know
			if(isset($_GET['act'])){
				$activation = mysqli_query($con,"UPDATE users SET status='Activated' WHERE status='".$_GET['act']."'");
				echo "<script>window.location.href='index.php?page=login'</script>";
			}

			if(isset($_POST['login']))
			{
				// Get Email and Password
				$email 	= $_POST['email'];
				$password = md5($_POST['password']);

				// check if username or email exists
				$AdminLoginQuery = mysqli_query($con,"SELECT * FROM  users WHERE email='$email' OR username='$email'");
				$NumRows = mysqli_num_rows($AdminLoginQuery); 
				// check if number of row in result of query is not 0
				if($NumRows!=0)
				{
					// get all rows one by one
					while($row=mysqli_fetch_assoc($AdminLoginQuery))
					{
						// get data from query result
						$dbusename	= $row['username'];
						$dbemail	= $row['email'];
						$dbpassword	= $row['password'];
						$dbstatus   = $row['status'];
						$dbreason   = $row['reason'];
						
						// check if username of db is matched with user enter name
						if($dbusename==$email)
						{
							// set username from db in current email and checkuser
							$crnt_email = $dbusename;
							$checkuser  = $dbusename;
						}

						// check if email of db is matched with user enter email
						if($dbemail==$email)
						{
							// set email from db in current email and checkuser
							$crnt_email = $dbemail;
							$checkuser  = $dbemail;
						}
					}
					// check if  email and password matched
					if($checkuser==$crnt_email && $password==$dbpassword)
					{
						// check if user staus is Activated
						if($dbstatus=="Activated")
						{
							// set email to session
							$_SESSION['front_user_email'] = $dbemail;
							// Redirect to Home page

							// |||| ****************************  ||||
							// Succesfully Login till here
							// |||| ****************************  ||||
							
							echo "<script>window.open('index.php?page=home','_self');</script>";
						}
						else
						{
							// check if user is Inactive
							if($dbstatus=="Inactive")
							{
								echo "<p style='color:Red; '>Your Account has been Deactivated. <br/><br/><b>Reason:</b>".$dbreason."</p>";
							}
							else
							{
								echo "<p style='color:Red; '><b>Your Account is Inactive. Please Check your email <em>(".$dbemail.")</em></b></p>";
							}
						}
					}
					else
					{
						echo "<p style='color:Red; '><b>Incorrect Email or Password</b></p>";
					}	
				}
				else
				{
					echo '<script>alert("User Not found...!")</script>';
					echo "<p style='color:Red; '><b>That User doesn't exist...!</b></p>";
				}
			}

			?>	
				
			<script>
			function showHint(str) 
			{
				if (str.length == 0) 
				{ 
					document.getElementById("txtHint").innerHTML = "";
					return;
				} 
				else 
				{
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() 
					{
						if (this.readyState == 4 && this.status == 200) 
						{
							document.getElementById("txtHint").innerHTML = this.responseText;
						}
					}
					xmlhttp.open("GET", "php_ajax/get_pro_img.php?email="+str, true);
					xmlhttp.send();
				}
			}
			</script>
						<span id="txtHint"></span>
						<form method="post" >
							<div class="control-group">
								<label class="control-label" for="email">E-mail or Username</label>
								<div class="controls">
									<input id="email" type="text" name="email"  required onfocusout="showHint(this.value)" />               
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input id="password" type="password" name="password" required  />                
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls">
									<center>
										<button type="submit" name='login' class="form-control  btn btn-primary"> <li class='fa fa-sign-in'></li> Log in</button>
									</center>
								</div>
							</div>
							
							<div class="actions">
									<a href="index.php?page=forgot_password" class="thm-clr1-txt pull-left">Forgot password </a>
									<a href="index.php?page=register" class="thm-clr1-txt  pull-right">New user? Register here </a><br />
							</div> <br/>
					
						</form>
			

			<!----------------------------------- Code added by usman For Google Login --------------------------------------------->

				<?php
					//Include Configuration File for Google Login
					include('config.php');
					// login button is set as empty
					$login_button = '';

					if(isset($_GET["code"]))
					{
						$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

						if(!isset($token['error']))
						{
							$google_client->setAccessToken($token['access_token']);
							$_SESSION['access_token'] = $token['access_token'];
							$google_service = new Google_Service_Oauth2($google_client);
							$data = $google_service->userinfo->get();

							// <*> ------------------- From here we are storing data of user into our DB ------------------------ <*>
							if(!empty($data['given_name']))
							{
								$_SESSION['firstname'] = $data['given_name'];
								$first_name = $data['given_name'];
							}
							if(!empty($data['family_name']))
							{
								$_SESSION['lastname'] = $data['family_name'];
								$last_name = $data['family_name'];

							}
							if(!empty($data['email']))
							{
								$_SESSION['front_user_email'] = $data['email'];
								$email = $data['email'];
							}
							
							// Genrate username.
							$username		= strtolower(rand(0,99999)."@".$first_name);
							// setting up dumy password (username as password).
							$password_1 = $username;
							$password = $username;
							$re_password = $username;

							
							
							$status = "Activated";
							$reason = " ";
							
							 // check if password matched.
							if($password==$re_password)
    						{
								// check username
								$GetUsername = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");	
        						$NumRowsUser = mysqli_num_rows($GetUsername);
        
        						// check if row is not 0
       		 					if($NumRowsUser!=0)
        						{   
            						// get data from query result
									while($row=mysqli_fetch_assoc($GetUsername))
            						{   
                						//get username
										$db_username =  $row['username'];
            						}
            						// check if user name already exists
		    						if($db_username==$username)
            						{
										//---------------------------------------------------------------------------------------//
										//---------------------------------------------------------------------------------------//
										//				User is already login before using google so do something here
										//		Lets DO Nothing here because user is already Registered so just let them login
										//---------------------------------------------------------------------------------------//
										//---------------------------------------------------------------------------------------//
			     						//echo "<p style='color:Red; '><b>Your username already exists</b></p>";
		    						}		
								}
        						else
        						{
									// check email
		    						$Getemail = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");	
            						$NumRows = mysqli_num_rows($Getemail); 
            
									// check if row is not 0
		    						if($NumRows!=0)
            						{  	 
			     						while($row=mysqli_fetch_assoc($Getemail))
                						 {
				    						$db_email =  $row['email'];
			     						 }
		         						if($db_email==$email)
                 						{
											// echo "<p style='color:Red; '><b>Your email already exists</b></p>";
											//---------------------------------------------------------------------------------------//
											//---------------------------------------------------------------------------------------//

											//				User is already login before using google so do something here
											//		Lets DO Nothing here because user is already Registered so just let them login

											//---------------------------------------------------------------------------------------//
											//---------------------------------------------------------------------------------------//
		         						}		
		     						}
            						else
            						{	
										// 	Registred Google User into our data base.
										$password = md5($password);
                 						$sql_query="INSERT INTO users (firstname, lastname, username, email, password, status, reason)
                 						VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$status', '$reason')";
			     						$CeateAccount = mysqli_query($con,$sql_query);
                 						if($CeateAccount)
                    					{
											// Now let user login.
			        					}
		    						}
								}

    						}
    						else
							{
								echo "<p style='color:Red; '><b>Password does not match the confirm password.</b></p>";
							}

							// <*> ---------------------------------------------------------------------------------------------- <*>
							// <<*>> ----- We have removed bellow info from our system ------ <*>
							// if(!empty($data['gender']))
							// {
							// 	$_SESSION['user_gender'] = $data['gender'];
								
							// }
							// if(!empty($data['picture']))
							// {
							// 	$_SESSION['user_image'] = $data['picture'];
								
							// }

							// $pro_full_name		= $pro_first_name.' '.$pro_last_name;
							// <<*>> -------------------------------------------------------- <*>

						}
					}
					if(!isset($_SESSION['access_token']))
					{
						$login_button = '<a class="google btn" href="'.$google_client->createAuthUrl().'"> <i class="fa fa-google fa-fw"> </i>Login With Google</a>';
					}
				?>
				<!------------------------------------------------------------------------------------------->
					
			<!----------------------------------- Code added by usman --------------------------------------------->  
				<div class="goole_btn_container"><br />
					<?php
						if($login_button == '')
						{
							// $_SESSION['front_user_email'] = $_SESSION['user_email_address'];
							echo "<script>window.open('index.php?page=home','_self');</script>";
			//                    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
			//                    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
			//                    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
			//                    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
			//                    echo '<h3><a href="logout.php">Logout</h3></div>';
						}
					else
						{
							echo '<div class="google_login_btn" align="center">'.$login_button . '</div>';
						}
					?>
				</div>
			<!------------------------------------------------------------------------------------------------------>


			<?php include('FB_config.php');?>
			<?php include('oauth-user.php'); ?>
					<?php
					//If no $accessToken is set then user should log in first
					if(isset($accessToken)) 
					{
						if(isset($_SESSION['facebook_access_token']))
						{
							$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
						} 
						else 
						{
							// Put short-lived access token in session
							$_SESSION['facebook_access_token'] = (string) $accessToken;
							
							// The OAuth 2.0 client handler helps us manage access tokens
							$oAuth2Client = $fb->getOAuth2Client();
							
							if(!$accessToken->isLongLived())
							 {
								//Exchanges a short-lived access token for a long-lived one
								try {
									$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
									$_SESSION['facebook_access_token'] = (string) $accessToken;
								} catch (Facebook\Exceptions\FacebookSDKException $e) {
									echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
									exit;
								}
							}			
						}
						
						// Redirect the user back to the same page if url has "code" parameter in query string
						if(isset($_GET['code']))
						{
							echo "<script>window.location.href='index.php?page=login&success'</script>";	
							//header('Location: ./');
						}
						if(isset($_GET['success']))
						{
							echo "<script>window.location.href='index.php?page=home'</script>";
						}
						
						// Getting user facebook profile info
						try {
							$profileRequest = $fb->get('/me?locale=en_US&fields=name,first_name,last_name,email,link,gender,locale');
							$fbUserData = $profileRequest->getGraphNode()->asArray();
							//Ceate an instance of the OauthUser class
							$oauth_user_obj = new OauthUser();
							$userData = $oauth_user_obj->verifyUser($fbUserData);

							
							// Lets Store the user now.

							$_SESSION['firstname'] = $userData->getField('first_name');
							$first_name = $_SESSION['firstname'];

							$_SESSION['lastname'] = $userData->getField('last_name');
							$last_name = $_SESSION['lastname'];

							$_SESSION['front_user_email'] = $userData->getField('email');
							$email = $_SESSION['front_user_email'];

							// Genrate username.
							$username		= strtolower(rand(0,99999)."@".$first_name);
							// setting up dumy password (username as password).
							$password_1 = $username;
							$password = $username;
							$re_password = $username;							
							$status = "Activated";
							$reason = " ";

							 // check if password matched.
							 if($password==$re_password)
							 {
								 // check username
								 $GetUsername = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");	
								 $NumRowsUser = mysqli_num_rows($GetUsername);
		 
								 // check if row is not 0
									 if($NumRowsUser!=0)
								 {   
									 // get data from query result
									 while($row=mysqli_fetch_assoc($GetUsername))
									 {   
										 //get username
										 $db_username =  $row['username'];
									 }
									 // check if user name already exists
									 if($db_username==$username)
									 {
										 //---------------------------------------------------------------------------------------//
										 //---------------------------------------------------------------------------------------//

										 //				User is already login before using google so do something here
										 //		Lets DO Nothing here because user is already Registered so just let them login

										 //---------------------------------------------------------------------------------------//
										 //---------------------------------------------------------------------------------------//
										  //echo "<p style='color:Red; '><b>Your username already exists</b></p>";
									 }		
								 }
								 else
								 {
									 // check email
									 $Getemail = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");	
									 $NumRows = mysqli_num_rows($Getemail); 
			 
									 // check if row is not 0
									 if($NumRows!=0)
									 {  	 
										  while($row=mysqli_fetch_assoc($Getemail))
										  {
											 $db_email =  $row['email'];
										   }
										  if($db_email==$email)
										  {
											 // echo "<p style='color:Red; '><b>Your email already exists</b></p>";
											 //---------------------------------------------------------------------------------------//
											 //---------------------------------------------------------------------------------------//
 
											 //				User is already login before using google so do something here
											 //		Lets DO Nothing here because user is already Registered so just let them login
 
											 //---------------------------------------------------------------------------------------//
											 //---------------------------------------------------------------------------------------//
										  }		
									  }
									 else
									 {	
										 // 	Registred Google User into our data base.
										 $password = md5($password);
										  $sql_query="INSERT INTO users (firstname, lastname, username, email, password, status, reason)
										  VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$status', '$reason')";
										  $CeateAccount = mysqli_query($con,$sql_query);
										  if($CeateAccount)
										 {
											 // Now let user login.
										 }
									 }
								 }
 
							 }
							 else
							 {
								 echo "<p style='color:Red; '><b>Password does not match the confirm password.</b></p>";
							 }

						} catch(FacebookResponseException $e) {
							echo 'Graph returned an error: ' . $e->getMessage();
							session_destroy();
							// Redirect user back to app login page
							header("Location: ./");
							exit;
						} catch(FacebookSDKException $e) {
							echo 'Facebook SDK returned an error: ' . $e->getMessage();
							session_destroy();
							// Redirect user back to app login page
							header("Location: ./");
							exit;
						}
					
					
						// Get logout url
						//$logoutURL = $helper->getLogoutUrl($accessToken, 'http://localhost/mit-demos/facebook-login/logout.php');
						
					
						
					} else {
						// Get login url
						$loginUrl = $helper->getLoginUrl($redirectUrl);
						// This is Facebook Login Button.
						echo '<center> 
								<a href="'.htmlspecialchars($loginUrl).'" class="fb connect">Login With Facebook</a>
							</center>';
					}
				?>		
    
	</div>
	<!-- <br /><br /><a href="'.htmlspecialchars($loginUrl).'"><img class="login_image" style="height:70px;" src="fblogin-btn.jpg"></a> <br /> <br /> -->
</div>
</div><!-- content -->
<div id="sidebar">
		<div class="thm-clr2-txt">With a  assabuur.com account,</div><br>
	<ul class="fa-ul">
		<li><i class="fa-li fa fa-thumb-tack fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Posting ads is faster and easier with pre-filled contact information.</li><br/>
		<li><i class="fa-li fa fa-pencil-square-o fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Edit or Delete your ads in one place.</li><br/>
		<li><i class="fa-li fa fa-repeat fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Republish your ads.</li><br/>
		<li><i class="fa-li fa fa-star-o fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> See favourite ads.</li><br/>
		<li><i class="fa-li fa fa-bell-o fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Subscribe to alerts for your searches and never miss new ads.</li>
	</ul>
</div><!-- /sidebar --></div>