<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "pages";
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
                        <h2>Pages</h2>
                       
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="index.php?page=home">Dashboard</a></li>
                                <li class="active"><a href="#">Pages</a></li>
                            </ul>
                        </nav>
                    </div>
          


                </div>
                <!--======== Page Title and Breadcrumbs End ========-->

                <!--======== START BUG TRACKER FORM ========-->
                <div class="c_panel">

                    <div class="c_content">

<?php 
if(isset($_GET['id'])){

$pageRow  = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM pages WHERE id='".$_GET['id']."'"));

if(isset($_POST['save'])){

 	$body = mysqli_real_escape_string($con, $_POST['body']);
	
	$updatePage = mysqli_query($con, "UPDATE pages SET body='$body' WHERE id='".$_GET['id']."' ");
	
	if($updatePage){
		echo "<script>window.location.href='index.php?page=pages'</script>";
	}
	
}

?>
<form method="post">
	<div class="row">
		<div class="col-sm-12 form-group">
			<h2><?= $pageRow['title']; ?></h2>	
		</div>
		<div class="col-sm-12 form-group">
			<input type="submit" name='save' class='btn btn-primary pull-right' value='Save Pages' />
		</div>
		<div id='textarea' class="col-sm-12 form-group">
			<textarea class="form-control" id="code_preview0" name="body" style="height: 400px;"><?= $pageRow['body']; ?></textarea>
			<!---textarea name="body" class='editor' style='height:500px;' ><?= $pageRow['body']; ?></textarea--->
		</div>
		<div class="col-sm-12 form-group">
			<input type="submit" name='save' class='btn btn-primary pull-right' value='Save Pages' />
		</div>
	</div>
</form>

<?php }else{ ?>
<table class="table table-striped table-bordered">
	<tr valign="middel">
		<td  align="center" width="50"><b>S.NO</b></td>
		<td><b>Page title</b></td>
		<td  align="center" width="100"><b>Action</b></td>
	</tr>
	<?php 
		$selectPages  = mysqli_query($con, "SELECT * FROM pages ");
					
			$No = 0;
			while($row=mysqli_fetch_assoc($selectPages)){
					
			$No++;	
			$id  				= $row['id'];			
			$title 	 = $row['title'];	
	?>	
	<tr>
		<td align="center"><b><?php echo $No; ?></b></td>
		<td><?php echo $title; ?></td>
		<td align="center">
			<div class="btn-group btn-group-sm text-right" role="group" >
				<a href="index.php?page=pages&id=<?php echo $row['id'];?>" class="btn btn-primary" data-toggle="modal"  ><i class="fa fa-pencil"></i></a>
			</div>
		</td>
	</tr>
<?php } ?>											
</table>
<?php } ?>			

                        
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