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
                        <h2>All Categories View & EDIT</h2>
                       
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="index.php?page=home">Dashboard</a></li>
                                <li class="active"><a href="#">All Categories View & EDIT</a></li>
                            </ul>
                        </nav>
                    </div>
          


                </div>
                <!--======== Page Title and Breadcrumbs End ========-->

                <!--======== START BUG TRACKER FORM ========-->
                <div class="c_panel">

                    <div class="c_content">

					

	

					
	
			<table class="table table-bordered" >
				<?php 
				$getMainCats = mysqli_query($con, "SELECT * FROM main_categories");
					while($row=mysqli_fetch_assoc($getMainCats)){

						$mainCatId	 	 = $row['id'];
						$mainCatName 	 = $row['name'];
						$mainCatImg 	 = $row['img'];
				?>	
				<tr  style='background-color:#F0F0F0;' >
					<td width='20' ><img src="../assets/images/main_categories/<?php echo $mainCatImg; ?>" width='20' /></td>
					<td colspan='3' ><b><?php echo $mainCatName; ?></b></td>
					<td align="center" width="100"><a href="index.php?page=main_category&ID=<?php echo $row['id'];?>" class="text-primary"   ><b><i class="fa fa-pencil"></i> EDIT</b></a></td>
				</tr>
				<?php 
				$getSubCats = mysqli_query($con, "SELECT * FROM sub_categories WHERE main_cat_id='$mainCatId' ");
				while($row=mysqli_fetch_assoc($getSubCats)){
				
					$subCatId	= $row['id'];
					$subCatName	= $row['name'];
					$subCatImg 	= $row['img'];
					
				?>
				<tr   style='background-color:#F9F9F9;'  >
					<td></td>
					<td width='20' ><img src="../assets/images/sub_categories/<?php echo $subCatImg; ?>" width='20' /></td>
					<td colspan='2'><b><?php echo $subCatName; ?></b></td>
					<td align="center" width="50"><a href="index.php?page=sub_category&ID=<?php echo $row['id'];?>" class="text-primary"  ><b><i class="fa fa-pencil"></i> EDIT</b></a></td>
				</tr>
				<?php 
				$getBrand = mysqli_query($con, "SELECT * FROM brand_others WHERE sub_cat_id='$subCatId' ");
				$sno=0;
				while($row=mysqli_fetch_assoc($getBrand)){
					$sno++;
					$brandId	= $row['id'];
					$brandName	= $row['name'];
				?>
			   <tr>
					<td></td>
					<td></td>
					<td width='50'align='center' ><b><?php echo $sno; ?></b></td>
					<td><?php echo $brandName; ?></td>
					<td align="center" width="50"><a href="index.php?page=brand_category&ID=<?php echo $row['id'];?>" class="text-primary"   ><b><i class="fa fa-pencil"></i> EDIT</b></a></td>
				</tr>
				<?php }}} ?>
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