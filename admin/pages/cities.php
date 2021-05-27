<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "cities";
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
                        <h2>Cities Add, Update & Delete</h2>
                       
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="index.php?page=home">Dashboard</a></li>
                                <li class="active"><a href="#">Cities</a></li>
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
	
	$SelectCity = mysqli_query($con, "SELECT * FROM cities WHERE id='$get_id'");
	while($row=mysqli_fetch_assoc($SelectCity)){
		
		$get_province_id	= $row['province'];	
		$get_city_name		= $row['city_name'];	
		$get_popular		= $row['popular'];	
		
	$SelectPro_name = mysqli_query($con, "SELECT * FROM province WHERE id='$get_province_id'");
	$row2=mysqli_fetch_assoc($SelectPro_name);
	
	$get_province_name = $row2['province_name'];
	
		if($get_popular=='0'){
			$popular_checked = "";
		}
		if($get_popular=='1'){
			$popular_checked = "checked";
		}
		
 	}
if(isset($_POST['save'])){
		
	$province_id	= $_POST['province'];
	$city_name		= $_POST['city_name'];
	$popular		= $_POST['popular'];
	

$UpdateCity = mysqli_query($con, "UPDATE cities SET 
	
		province='$province_id', 
		city_name='$city_name', 
		popular='$popular' 
		
		WHERE id='$get_id'
	");
	
		if($UpdateCity){
			
			$_SESSION['success']= "Your Records Has Been Successfully Saved";
			echo '<script>window.location.href = "index.php?page=cities";</script>';
		}
	
}
?>		
<form method="post" enctype="multipart/form-data" >
	<tr>
		<td><h3>Update City </h3><HR></td>
	</tr>
	<tr>
		<td>
			<div class="row form-group">
				<div class="col-md-6 col-sm-6 form-group" >
					<select name="province" class="form-control" required >
						<option value="<?php echo $get_province_id; ?>"><?php echo $get_province_name; ?></option>
						<?php 
						$SelectAllprov = mysqli_query($con, "SELECT * FROM province ");
						while($row=mysqli_fetch_assoc($SelectAllprov)){ ?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['province_name']; ?></option>
						<?php }	?>
					</select>
				</div>
				<div class="col-md-6 col-sm-6 form-group" >
					<input type="text" class="form-control" name="city_name" placeholder="City Name" value="<?php echo $get_city_name; ?>" required="required" />
				</div>
				<div class="col-md-6 col-sm-6 form-group" >
					<input type="checkbox"  name="popular"  value="1" <?php echo $popular_checked; ?> /> <b>Make Popular City</b>
			
					<button type="submit" class="btn btn-primary pull-right" name="save" style="width:50%;" ><i class="fa fa-floppy-o"> </i> SAVE</button>
				</div>
			</div>
		</td>
	</tr>	
</form>
<?php } else{
	
if(isset($_POST['save'])){
		
	$province_id		= $_POST['province'];
	$city_name			= $_POST['city_name'];
	$popular			= $_POST['popular'];
	
$InsertProvince = mysqli_query($con, "INSERT INTO cities VALUE ( '','$province_id', '$city_name', '$popular' )");
	
		if($InsertProvince){
			$_SESSION['success']= "Province Has Been Successfully Saved";
			echo '<script>window.location.href = "index.php?page=cities";</script>';
		
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
				<div class="col-md-6 col-sm-6 form-group" >
					<select name="province" class="form-control" required>
						<option value="">Select Province</option>
						<?php 
						$SelectAllprov = mysqli_query($con, "SELECT * FROM province");
						while($row=mysqli_fetch_assoc($SelectAllprov)){ ?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['province_name']; ?></option>
						<?php }	?>
					</select>
				</div>
				<div class="col-md-6 col-sm-6 form-group" >
					<input type="text" class="form-control" name="city_name" placeholder="City Name" value="<?php echo $get_city_name; ?>" required="required" />
				</div>
				<div class="col-md-6 col-sm-6 form-group" >
					<input type="checkbox"  name="popular"  value="1"  /> <b>Make Popular City</b>
				
					<button type="submit" class="btn btn-primary pull-right" name="save" style='width:50%;'  ><i class="fa fa-floppy-o"> </i> SAVE</button>
				</div>
			</div>
		</td>
	</tr>	
</form>	
<?php } ?>
	<tr>
		<td><h3>All Cities</h3></td>
	</tr>
	<tr>
		<td>		
			<table class="table table-striped table-bordered">
				<tr valign="middel">
					<td  align="center" width="80"><b>S.NO</b></td>
					<td><b>Province</b></td>
					<td><b>City Name</b></td>
					<td  align="center" width="80"><b>Popular</b></td>
					<td  align="center" width="100"><b>Action</b></td>
				</tr>
				<?php 
					$selectClass  = mysqli_query($con, "SELECT * FROM cities ORDER BY city_name");
								
						$No = 0;
						while($row=mysqli_fetch_assoc($selectClass)){
								
						$No++;	
						$id  				= $row['id'];			
						$province_id 	 = $row['province'];	
						$city_name	 	 = $row['city_name'];	
						$popular	 	 = $row['popular'];	
							
					$SelectProName = mysqli_query($con, "SELECT * FROM province WHERE id='$province_id'");
					$row2=mysqli_fetch_assoc($SelectProName);
					$province_name = $row2['province_name'];
									
				?>	
				<tr>
					<td align="center"><b><?php echo $No; ?></b></td>
					<td><?php echo $province_name; ?></td>
					<td><?php echo $city_name; ?></td>
					<td align='center'><?php 
							if($popular=='0'){
								echo '<img src="assets/images/error.png" width="25" />';
							}
							if($popular=='1'){
								echo '<img src="assets/images/check.png" width="25" />';
								
							}

					?></td>
					<td align="center">
						<div class="btn-group btn-group-sm text-right" role="group" >
							<a href="index.php?page=cities&&update=<?php echo $row['id'];?>" class="btn btn-primary" data-toggle="modal"  ><i class="fa fa-pencil"></i></a>
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
		  <h4 class="modal-title"><strong>Delete City: <?php echo $row['city_name'];?></strong> </h4>
		</div>
		<div class="modal-body">
		
				Are You Sure...! Delete <b><?php echo $row['city_name'];?></b> ?
			
		</div>
		<div class="modal-footer">
			<a href="libraries/delete.php?DelCity=<?php echo $row['id'];?>" class="btn btn-success btn-raised rippler rippler-default"  >YES</a>
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