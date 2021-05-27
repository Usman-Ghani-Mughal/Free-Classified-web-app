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

              

                    <div class="row margin-top-70">
                    

                        <div class="col-md-12" style="background:rgba(255, 255, 255, 0.5);">

                            <!--Start Profile Contacts-->
                            <div class="row margin-top-16 margin-bottom-16">   
                                <div class="col-md-12">

                                    <div class="panel panel-profile">
                                      
                                        <div class="panel-body">
                                            <h2 class="panel-title heading-sm pull-left"><i class="icon-user"></i>Profile</h2>
											<br /><br />
                                            <div class="row settings">

                                                <div class="col-md-12">
				<div class="row">
							<div class="col-sm-3">
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

									<p>
										<b>DESIGNATION</b><br />
										( <?php echo $pro_role;?> )
									</p>
									
									</center>
							</div>
							<div class="col-sm-9">
							
							<div class="page-header">
						
								
								<h2><?php echo $pro_first_name.' '.$pro_last_name;?></h2>
							</div>
					<table class="table table-striped table-bordered">
			
					
						<tr>
							<td>Username</td>
							<td><?php echo $pro_username;?></td>
						</tr>
						<tr>
							<td>E-Mail ID</td>
							<td><?php echo $pro_email;?></td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td><?php echo $pro_phone;?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $pro_gender;?></td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td><?php echo $pro_birthday;?></td>
						</tr>
						<tr>
							<td>City</td>
							<td><?php echo $pro_city; ?></td>
						</tr>
						<tr>
							<td>State</td>
							<td><?php echo $pro_state; ?></td>
						</tr>
						<tr>
							<td>Zip Code</td>
							<td><?php echo $pro_zip; ?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $pro_street; ?></td>
						</tr>
							
							
					</table>

							</div>
				</div>	


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


</body>

</html>

<!--===== Footer End ========-->