<section id="container">
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "social_media";
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
                        <h2>Social Media</h2>
                       
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="index.php?page=home">Dashboard</a></li>
                                <li class="active"><a href="#">Social Media</a></li>
                            </ul>
                        </nav>
                    </div>
          


                </div>
                <!--======== Page Title and Breadcrumbs End ========-->

                <!--======== START BUG TRACKER FORM ========-->
                <div class="c_panel">

                    <div class="c_content">

<?php
$social	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM social_media WHERE id='1' "));

if(isset($_POST['save'])){

	$updateCocialMedia = mysqli_query($con, "UPDATE social_media SET 
	
		facebook		='".$_POST['facebook']."',
		twitter			='".$_POST['twitter']."',
		google			='".$_POST['google']."',
		youtube			='".$_POST['youtube']."', 
		contact_email	='".$_POST['contact_email']."' 
		
		WHERE id='1' ");
	
	if($updateCocialMedia){
		echo "<script>window.location.href='index.php?page=social_media'</script>";
	}
	
}

?>
<form method="post">
	<div class="row">
		<div class="col-sm-6 form-group">
			<label for="">Facebook</label>
			<input type='text' name="facebook" class='form-control' value='<?= $social['facebook']; ?>' />
		</div>
		<div class="col-sm-6 form-group">
			<label for="">Google</label>
			<input type='text' name="google" class='form-control' value='<?= $social['google']; ?>' />
		</div>
		<div class="col-sm-6 form-group">
			<label for="">Twitter</label>
			<input type='text' name="twitter" class='form-control' value='<?= $social['twitter']; ?>' />
		</div>
		<div class="col-sm-6 form-group">
			<label for="">Contact Form Email</label>
			<input type='email' name="contact_email" class='form-control' value='<?= $social['contact_email']; ?>' />
		</div>
		<div class="col-sm-12 form-group">
			<label for="">Youtube</label>
			<textarea name="youtube" class='form-control' rows='5'><?= $social['youtube']; ?></textarea>
		</div>
		<div class="col-sm-12 form-group">
			<input type="submit" name='save' class='btn btn-primary pull-right' value='Save' />
		</div>
	</div>
</form>

                        
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