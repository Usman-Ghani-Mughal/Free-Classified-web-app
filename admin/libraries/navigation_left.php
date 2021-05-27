        <!--sidebar start-->
        <aside>
<?php 
$totalActiveUsers	= mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE status='Activated' "));
$totalInactiveUsers	= mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE status='Inactive'  "));
$totalPendingUser	= mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE status!='Inactive' AND status!='Activated' "));
?>		
            <div id="sidebar" class="nav-collapse md-box-shadowed">
                <!-- sidebar menu start-->
                <div class="leftside-navigation leftside-navigation-scroll">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li class="sidebar-profile">

                            <div class="profile-options-container">
                                <p class="text-right profile-options"><span class="profile-options-close pe-7s-close fa-2x font-bold"></span></p>

                                <div class="profile-options-list animated zoomIn">
                                    <p><a href="index.php?page=profile">Profile</a></p>
                                    <p><a href="index.php?page=settings">Settings</a></p>
                                    <p><a href="logout.php">Log Out</a></p>
                                </div>
                                
                            </div>
                            
                            <div class="profile-main">
                                <p class="text-right profile-options"><i class="profile-options-open icon-options-vertical fa-2x"></i></p>
                                <p class="image">
                                
									
								<?php if($pro_img){?>
									<img src="assets/images/avatar/<?php echo $pro_img; ?>"  width="80" alt="image">
								<?php }else{ if($pro_gender=="Male"){ ?>  
									<img src="assets/images/avatar/male.jpg"  width="80" alt="image">
								<?php }else{ ?>
									<img src="assets/images/avatar/female.jpg"  width="80" alt="image">
								<?php }} ?> 
                                    <span class="status"><i class="fa fa-circle text-success"></i></span>
                                </p>
                                <p>
                                    <span class="name"><?php echo $pro_full_name; ?></span><br>
                                    <span class="position" style="font-family: monospace;"><?php echo $pro_role; ?></span>
                                </p>
                            </div>
                            
                        </li>
						<li><a href="index.php?page=home" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "dashboard"){ echo 'active'; }?>"><span class='icon-sidebar icon-home fa-2x'></span><span>Dashboard</span></a></li>
						<li><a href="index.php?page=advertisers" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "advertisers"){ echo 'active'; }?>"><span class='icon-sidebar icon-check fa-2x'></span><span>Active Advertisers (<?= $totalActiveUsers; ?>)</span></a></li>
						<li><a href="index.php?page=advertisers_left" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "advertisers_left"){ echo 'active'; }?>"><span class='icon-sidebar icon-close fa-2x'></span><span>Left Advertisers (<?= $totalInactiveUsers; ?>)</span></a></li>
						<li><a href="index.php?page=advertisers_unverified" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "advertisers_unverified"){ echo 'active'; }?>"><span class='icon-sidebar icon-clock fa-2x'></span><span>Unverified Advertisers (<?= $totalPendingUser; ?>)</span></a></li>
						<li><a href="index.php?page=categories" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "categories"){ echo 'active'; }?>"><span class='icon-sidebar icon-grid fa-2x'></span><span>Categories</span></a></li>
						<li><a href="index.php?page=province" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "province"){ echo 'active'; }?>"><span class='icon-sidebar icon-map fa-2x'></span><span>Province</span></a></li>
						<li><a href="index.php?page=cities" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "cities"){ echo 'active'; }?>"><span class='icon-sidebar icon-location-pin fa-2x'></span><span>Cities</span></a></li>
						<li><a href="index.php?page=pages" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "pages"){ echo 'active'; }?>"><span class='icon-sidebar icon-docs fa-2x'></span><span>Pages</span></a></li>
						<li><a href="index.php?page=social_media" class="hvr-bounce-to-right-sidebar-parent <?php if($active_menu == "social_media"){ echo 'active'; }?>"><span class='icon-sidebar icon-social-soundcloud fa-2x'></span><span>Social Media</span></a></li>
                    </ul>  
<br />               
<br />               
			   </div>
                <!-- sidebar menu end-->
            </div>
        </aside>    <!--sidebar end-->

		