
<style type="text/css">
#logourbtn{	
	background-color: transparent;
    border: none;
    padding: 10px;
    padding-left: 20px;
    width: 100%;
    text-align: left;
	}
#logourbtn:hover{
	color:gray ;
	}
		</style>
		<!--header start-->
        <header class="header fixed-top clearfix">

            <!--logo start-->
            <div class="brand">

                <a href="index.php?page=home" class="logo" style='margin:0px;'>
					<img src="../assets/images/logo.png" width="100%" />
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <!-- 
                *****************************
                ** Start of top navigation **
                *****************************
             -->
            <div class="top-nav">

                
                
                <ul class="nav navbar-nav navbar-right">
                  
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           
							
						<?php if($pro_img){?>
							<img src="assets/images/avatar/<?php echo $pro_img; ?>" alt="image">
						<?php }else{ if($pro_gender=="Male"){ ?>  
							<img src="assets/images/avatar/male.jpg" alt="image">
						<?php }else{ ?>
							<img src="assets/images/avatar/female.jpg" alt="image">
						<?php }} ?> 
						<?php echo $pro_full_name; ?>
                            
							<span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu animated fadeInUp pull-right">
                            <li> <a href="index.php?page=profile" class="hvr-bounce-to-right">  Profile</a> </li>
							
							<?php if($pro_role=="Superadmin"){ ?>
                            <li><a href="index.php?page=users" class="hvr-bounce-to-right">All Users</a></li>
                            <li><a href="index.php?page=signup" class="hvr-bounce-to-right">Sign Up</a></li>
							<?php } ?>
							<li><a href="index.php?page=settings" class="hvr-bounce-to-right">Settings </a></li>
							<?php if(@$_SESSION['admin_email']){
								
							if(isset($_POST['admin_login'])){
								$admin_email = $_SESSION['admin_email'];
								
								$_SESSION['email'] = $admin_email;
								unset($_SESSION['admin_email']);
								
								echo "<script>window.location.href='index.php?page=home'</script>";
							}
							?>
							<li>
								<form method="post">
								<button type="submit" id="logourbtn" name="admin_login" class="hvr-bounce-to-right"><i class=" icon-login pull-right"></i> Log Out</button>
								</form>
							</li>
							<?php }else{ ?>
							<li><a href="logout.php" class="hvr-bounce-to-right"><i class=" icon-login pull-right"></i> Log Out</a></li>
							<?php } ?>
                        </ul>
                    </li>

                </ul>
            </div>

            <!-- 
                *****************************
                *** End of top navigation ***
                *****************************
             -->

        </header>    <!--header end-->
		


		