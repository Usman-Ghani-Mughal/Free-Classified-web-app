<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "categories";
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
                        <h2>Update Main Category</h2>
                       
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="index.php?page=home">Dashboard</a></li>
                                <li><a href="index.php?page=categories">Categories</a></li>
                                <li class="active"><a href="#">Update Main Category</a></li>
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
if(isset($_GET['ID'])){
$SelectMainCats = mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$_GET['ID']."'");

   while($row=mysqli_fetch_assoc($SelectMainCats)){
	   
	$get_cat_name 		= $row['name'];
	$get_img 			= $row['img'];
   }

if(isset($_POST['save'])){

	$cat_name 		= $_POST['cat_name'];

if($_FILES['pic']['name']){
	
	$comp = unlink('../assets/images/main_categories/'.$get_img);
	
	 $file="../assets/images/main_categories/";
		
		$img = $name=time().$name=$_FILES['pic']['name'];
		$temp_path   = $_FILES['pic']['tmp_name'];
		move_uploaded_file($temp_path,$file.$img);
		
		//include "libraries/image.inc.php";
		//create_thumbnail('assets/images/'.$img, 'assets/images/main_categories/'.$img, 88, 88);
		//$comp = unlink('assets/images/'.$img);
}else{
	$img = $get_img;
}
	$updateQuery = mysqli_query($con,"UPDATE main_categories SET

	name		= '$cat_name',
	img			= '$img'
	
	WHERE id='".$_GET['ID']."'
	 "); 
	
	if($updateQuery){
		$_SESSION['success']= "Main Category Has Been Successfully Updated";
		echo '<script>window.location.href = "index.php?page=categories";</script>';
		}
}

?>		

	<tr>
		<td><h3>Update Main Category</h3><HR></td>
	</tr>
	<tr>
		<td> 
			<form method="post" enctype="multipart/form-data">  
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" name="cat_name" value='<?php echo $get_cat_name; ?>' required />
					</div>
					<div class="col-sm-4 form-group">
						<label for="">Choose Picture (88 X 88px)</label>
						<input type="file" class="form-control" name="pic"   />
					</div>
					<div class="col-sm-4 form-group">
						<label for="">&nbsp;</label>
						<input type="submit" class="btn btn-primary"  style="width:100%;" name="save" value='Save' />
					</div>
				</div> 
			</form>					
		</td>
	</tr>
<?php } ?>	
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