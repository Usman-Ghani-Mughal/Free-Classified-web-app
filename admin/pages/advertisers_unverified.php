<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "advertisers_unverified";

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
                        <h2>Unverified Advertisers</h2>
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="">Dashboard</a></li>
                                <li class="active"><a href="">Unverified Advertisers</a></li>
                            </ul>
                        </nav>
                    </div>
            

                </div>
                <!--======== Page Title and Breadcrumbs End ========-->

                <!--======== START BUG TRACKER FORM ========-->
                <div class="c_panel">


                <div class="c_content">
										
<div class="table-responsive">
	<table class="table  table-striped  table-bordered matmix-dt">
	
	<tr>
		
		<th>Name</th>
		<th>Email</th>
		<th width='50' align="center">Action</th>
	</tr>
								
<?php
$GetAdvertisers	= mysqli_query($con,"SELECT * FROM users WHERE status!='Inactive' AND status!='Activated' ORDER BY 1 DESC ");
	$sno=0;
	while($row=mysqli_fetch_assoc($GetAdvertisers)){
		$sno++;	
		$id				= $row['id'];
		$img			= $row['img'];
		$first_name		= $row['first_name'];
		$last_name		= $row['last_name'];
		$phone			= $row['phone'];
		$gender			= $row['gender'];
		$birthday		= $row['birthday'];
		$email			= $row['email'];
		$street			= $row['street'];
		$city			= $row['city'];
		$state			= $row['state'];
		$role			= $row['role'];
		$status			= $row['status'];	
		$reason			= $row['reason'];	

?>									
					<tr>
				
						<td><?php echo $first_name.' '.$last_name;?></td>
						<td><?php echo $email;?></td>
						<td class="tc-center" >
							<a href="#details<?php echo $id;?>" class="btn btn-success btn-sm " data-toggle="modal" ><i class="fa fa-eye"></i></a>
						</td>				
					</tr>

<!--****** Details ******-->
  <div class="modal" id="details<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
	  <div class="modal-content">
		<div class="modal-body">
				<div class='row'>
						<div class='col-xs-3'>
					<?php if($img){?>
							
                                <img alt="" src="assets/images/avatar/<?php echo $img; ?>" class="thumbnail" width="100%">
							<?php }else{ 
								
									if($gender=="Male"){
							?>  
								<img alt="" src="assets/images/avatar/male.jpg"   class="thumbnail" width="100%">
							<?php }else{ ?>
								<img alt="" src="assets/images/avatar/female.jpg"   class="thumbnail" width="100%">	
							<?php }} ?> 
						</div>
						<div class='col-xs-9'>
						<a  class="btn btn-info pull-right"data-dismiss="modal" >X</a>
						<br />
						<br />
							<h2><?php echo $first_name .' '.$last_name ;?></h2>
						</div>
					
				</div>			
	
					<ul class="list-group">
						<li class="list-group-item"><b>E-Mail ID:</b> <?php echo $email;?></li>
						<li class="list-group-item"><b>Phone Number:</b> <?php echo $phone;?></li>
						<li class="list-group-item"><b>Gender:</b> <?php echo $gender;?></li>
						<li class="list-group-item"><b>Date of Birth:</b> <?php echo $birthday;?></li>
						<li class="list-group-item"><b>Street Address:</b> <?php echo $street;?></li>
						<li class="list-group-item"><b>City:</b> <?php echo $city;?></li>
						<li class="list-group-item"><b>State:</b> <?php echo $state;?></li>
						<li class="list-group-item"><b>Zip Code:</b> <?php echo $zip;?></li>
						<li class="list-group-item"><b>Status:</b> <?php echo $status;?></li>
					</ul>	
		</div>
	  </div>
	</div>
  </div>
				
	<?php } ?>					
					
				</table>
	

	 <!--Ending the pagination Div-->
	 
				</div>

                        
                    </div><!--/.c_content-->

                </div><!--/.c_panels-->
                <!--======== END BUG TRACKER FORM ========-->


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