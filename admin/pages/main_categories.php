<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "main_categories";
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
                        <h2>Main Categories </h2>
                       
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="index.php?page=home">Dashboard</a></li>
                                <li class="active"><a href="#">Main Categories</a></li>
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
if(isset($_POST['save'])){

	$cat_name 		= $_POST['cat_name'];
	$description 	= $_POST['description'];
	
	$file="../assets/images/main_categories/";
		
		$img = $name=time().$name=$_FILES['pic']['name'];
		$temp_path   = $_FILES['pic']['tmp_name'];
		move_uploaded_file($temp_path,$file.$img);
		
		//include "libraries/image.inc.php";
		//create_thumbnail('assets/images/'.$img, 'assets/images/main_categories/'.$img, 88, 88);
		//$comp = unlink('assets/images/'.$img);

	$insertQuery = mysqli_query($con,"INSERT INTO main_categories VALUE(
	'',
	'$cat_name',
	'$img'
	 )"); 
	
	if($insertQuery){
		$_SESSION['success']= "Main Category Has Been Successfully Saved";
		echo '<script>window.location.href = "index.php?page=main_categories";</script>';
		}

}

?>		

	<tr>
		<td><h3>Add Main Category</h3><HR></td>
	</tr>
	<tr>
		<td>
			<form method="post" enctype="multipart/form-data">  
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="">Category name</label>
						<input type="text" class="form-control" name="cat_name" required />
					</div>
					<div class="col-sm-4 form-group">
						<label for="">Choose Picture (88 X 88px)</label>
						<input type="file" class="form-control" name="pic" required />
					</div>
					<div class="col-sm-4 form-group">
						<label for="">&nbsp;</label>
						<input type="submit" class="btn btn-primary"  style="width:100%;" name="save" value='Save' />
					</div>
				</div> 
			</form>					
		</td>
	</tr>	


	<tr>
		<td><h3>Main Categories</h3></td>
	</tr>
	<tr>
		<td>		
			<table class="table table-striped table-bordered">
				<tr valign="middle">
					<td  align="center" width="30"><b>S.NO</b></td>
					<td  width="30"><b>Icon</b></td>
					<td><b>Main Category</b></td>
					<td  align="center" width="100"><b>Action</b></td>
				</tr>
				<?php 
					$SelectMainCats = mysqli_query($con, "SELECT * FROM main_categories ");
					$No=0;
					while($row=mysqli_fetch_assoc($SelectMainCats)){
					$No++;	
				?>	
				<tr>
					<td align="center"><b><?php echo $No; ?></b></td>
					<td><img src="../assets/images/main_categories/<?php echo $row['img']; ?>" width="30"></td>
					<td><?php echo $row['name']; ?></td>
					<td align="center">
						<div class="btn-group btn-group-sm text-right" role="group" >
							<a href="index.php?page=main_categories_edit&update=<?php echo $row['id'];?>" class="btn btn-primary" data-toggle="modal"  ><i class="fa fa-pencil"></i></a>
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
		  <h4 class="modal-title"><strong>Delete Main Category: <?php echo $row['name'];?></strong> </h4>
		</div>
		<div class="modal-body">
		
				Are You Sure...! Delete <b><?php echo $row['name'];?></b> ?
			
		</div>
		<div class="modal-footer">
			<a href="libraries/delete.php?delmaincat=<?php echo $row['id'];?>&delimg=<?php echo $row['img'];?>" class="btn btn-success btn-raised rippler rippler-default"  >YES</a>
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