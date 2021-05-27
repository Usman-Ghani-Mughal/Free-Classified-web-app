<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "province";
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
                        <h2>Province Add, Update & Delete</h2>
                       
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="index.php?page=home">Dashboard</a></li>
                                <li class="active"><a href="#">Province</a></li>
                            </ul>
                        </nav>
                    </div>
          


                </div>
                <!--======== Page Title and Breadcrumbs End ========-->

                <!--======== START BUG TRACKER FORM ========-->
                <div class="c_panel">

                    <div class="c_content">

<table width="100%" align="center">
<?php

if(isset($_GET['update'])){
	$get_id = $_GET['update'];
	
	$SelectProvince = mysqli_query($con, "SELECT * FROM province WHERE id='$get_id'");
	while($row=mysqli_fetch_assoc($SelectProvince)){
		
		$get_province_name	= $row['province_name'];	
 	}
if(isset($_POST['save'])){
		
	$province_name	= $_POST['province_name'];
	

$UpdateProvince = mysqli_query($con, "UPDATE province SET 
	
		province_name='$province_name' WHERE id='$get_id'
	");
	
		if($UpdateProvince){
			
			$_SESSION['success']= "Your Records Has Been Successfully Saved";
			echo '<script>window.location.href = "index.php?page=province";</script>';
		}
	
}
?>		
<form method="post" enctype="multipart/form-data" >
	<tr>
		<td><h3>Update Province </h3><HR></td>
	</tr>
	<tr>
		<td>
			<div class="row form-group">
				<div class="col-md-3 col-sm-6" >
					<label class="control-label">Province Name </label>
				</div>
				<div class="col-md-6 col-sm-6" >
					<input type="text" class="form-control" name="province_name" placeholder="Province Name" value="<?php echo $get_province_name; ?>" required="required" />
				</div>
				<div class="col-md-3 col-sm-6" >
					<button type="submit" class="btn btn-primary" name="save" style="width:100%;" ><i class="fa fa-floppy-o"> </i> SAVE</button>
				</div>
			</div>
		</td>
	</tr>	
</form>
<?php } else{
	
if(isset($_POST['save'])){
		
	$province_name			= $_POST['province_name'];
	
$InsertProvince = mysqli_query($con, "INSERT INTO province VALUE ( '','$province_name')");
	
		if($InsertProvince){
			$_SESSION['success']= "Province Has Been Successfully Saved";
			echo '<script>window.location.href = "index.php?page=province";</script>';
		
		}
	
}
	
?>		
<form method="post" enctype="multipart/form-data" >

	<tr>
		<td><h3>Add Province Name</h3><HR></td>
	</tr>
	<tr>
		<td>
			<div class="row form-group">
				<div class="col-sm-6 form-group" >
					<input type="text" class="form-control" name="province_name" value="<?php echo @$province_name; ?>" placeholder="Province Name" required="required" />
				</div>
				<div class="col-sm-6 form-group" >
					<button type="submit" class="btn btn-primary" name="save" style="width:100%;" ><i class="fa fa-floppy-o"> </i> SAVE</button>
				</div>
			</div>
		</td>
	</tr>	
</form>	
<?php } ?>
	<tr>
		<td><h3>Province's Names</h3></td>
	</tr>
	<tr>
		<td>		
			<table class="table table-striped table-bordered">
				<tr valign="middel">
					<td  align="center" width="80"><b>S.NO</b></td>
					<td><b>Province Name</b></td>
					<td  align="center" width="100"><b>Action</b></td>
				</tr>
				<?php 
					$selectClass  = mysqli_query($con, "SELECT * FROM province ORDER BY province_name");
								
						$No = 0;
						while($row=mysqli_fetch_assoc($selectClass)){
								
						$No++;	
						$id  				= $row['id'];			
						$province_name 	 = $row['province_name'];	
									
				?>	
				<tr>
					<td align="center"><b><?php echo $No; ?></b></td>
					<td><?php echo $province_name; ?></td>
					<td align="center">
						<div class="btn-group btn-group-sm text-right" role="group" >
							<a href="index.php?page=province&&update=<?php echo $row['id'];?>" class="btn btn-primary" data-toggle="modal"  ><i class="fa fa-pencil"></i></a>
							<a href="#delete<?php echo $row['id'];?>" class="btn btn-danger" data-toggle="modal" ><i class="fa fa-trash"></i></a>
						</div>
					</td>
				</tr>
<!-- Delete -->
<!--****** Start Basic Modal ******-->
  <div class="modal" id="delete<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
		  <h4 class="modal-title"><strong>Delete province: <?php echo $row['province_name'];?></strong> </h4>
		</div>
		<div class="modal-body">
		
				Are You Sure...! Delete <b><?php echo $row['province_name'];?></b> ?
			
		</div>
		<div class="modal-footer">
			<a href="libraries/delete.php?DelProvince=<?php echo $row['id'];?>" class="btn btn-success btn-raised rippler rippler-default"  >YES</a>
		  <button type="button" class="btn btn-default btn-raised rippler rippler-default" data-dismiss="modal">NO</button>
		</div>
	  </div>
	</div>
  </div>
  <!--****** End Basic Modal ******-->
<?php } ?>							
			</table>
		</td>
	</tr>
</table>

                        
                    </div><!--/.c_content-->

                </div><!--/.c_panels-->
                <!--======== END BUG TRACKER FORM ========-->


            </section>
        </section>
        <!--======== Main Content End ========-->

    </section><!--/.container-->

<!--===== Footer Start ========-->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="assets/js/global-plugins.js"></script>
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