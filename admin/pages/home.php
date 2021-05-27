    <section id="container">
	<!----	
        <div class='pop-header' style=" display: none; width: 100%; padding: 20px; position: fixed; background-color: #2d2929; color: #fff; z-index: 10000; font-size: 14px; text-align: center; font-weight: bold;">
            <span>Please check our new "Bootstrap Admin Template" here: <a href="http://wtransitions.com/" target="_blank" style="color: #fff;">Web Transitions Technologies</a>.</span>
            <span style="float: right; background: red; color: white; padding: 5px 10px; cursor: pointer;" class="close-pop-up">Close</span>
        </div>
	---->	
<?php
if(!$_SESSION['email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
	$active_menu = "dashboard";
	$active_submenu = "";
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
                      
					<h2>Welcome To Admin Panel</h2>
					<p>Content Management System of of Assabuur.Com</p>
                    </div>
                    <div class="page-breadcrumb">
                        <nav class="c_breadcrumbs">
                            <ul>
                                <li><a href="">Assabuur.Com</a></li>
                                <li class="active"><a href="index.php?page=home">Dashboard</a></li>
                            </ul>
                        </nav>
                    </div>
                   

         

                </div>
                <!--======== Page Title and Breadcrumbs End ========-->

<?php

$GetMainCats  	= mysqli_query($con,"SELECT * FROM main_categories ");
$totalMainCats	= mysqli_num_rows($GetMainCats);

$GetSubCats  	= mysqli_query($con,"SELECT * FROM sub_categories ");
$totalSubCats	= mysqli_num_rows($GetSubCats);

$GetOtherCats  	= mysqli_query($con,"SELECT * FROM brand_others ");
$totalOtherCats	= mysqli_num_rows($GetOtherCats);

$GetCities  	= mysqli_query($con,"SELECT * FROM cities ");
$totalCities	= mysqli_num_rows($GetCities);

$GetPopCities  	= mysqli_query($con,"SELECT * FROM cities WHERE popular='1' ");
$totalPopCities	= mysqli_num_rows($GetPopCities);

?>

  <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><img src="assets/images/icons/main_cats.png" alt="" /></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Main  Categories</span>
              <span class="info-box-number"><?php echo $totalMainCats;?> <small> Categories</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><img src="assets/images/icons/sub_cats.png" alt="" /></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Sub Categories</span>
              <span class="info-box-number"><?php echo $totalSubCats;?> <small>Categories</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><img src="assets/images/icons/other_cats.png" alt="" /></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Other Categories</span>
              <span class="info-box-number"><?php echo $totalOtherCats;?>  <small>Categories</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><img src="assets/images/icons/city.png" alt="" /></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Cities </span>
              <span class="info-box-number"><?php echo $totalCities;?> <small>Cities</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->
      
      
      
      
      
   



            </section>
            
        </section>
        <!--======== Main Content End ========-->


      <?php include('libraries/navigation_right.php');?>

    </section><!--/.container-->

    <!--===== Footer Start ========-->

   
    <script src="assets/js/global-plugins.js"></script>
  

    <!--##################################################################################
    #
    # DASHBOARD AND WIDGET PAGE PLUGINS
    #
    ##################################################################################-->
    <!-- Chart JS -->
    <script src="assets/vendors/chartjs/chart.min.js"></script>
    <!--jQuery Flot Chart-->
    <script src="assets/vendors/flot/jquery.flot.full.min.js" type="text/javascript"></script>
    <!--jQuery Ricksaw Chart-->
    <script src="assets/vendors/jquery-ricksaw-chart/js/rickshaw.min.js" type="text/javascript" ></script>
    <script src="assets/vendors/jquery-ricksaw-chart/js/d3.v2.js" type="text/javascript" ></script>
    <!-- Easy Pie JS -->
    <script src="assets/vendors/easypie/jquery.easypiechart.min.js"></script>
    <!--Sparkline JS-->
    <script src="assets/vendors/sparkline/index.js"></script>
    <!--Morris Chart-->
    <script src="assets/vendors/morris-chart/morris.min.js"></script>
    <!--Skycons JS-->
    <script src="assets/vendors/skycons/skycons.js"></script>
    <!-- World Map JS -->
    <script src="assets/vendors/maps/js/jquery-jvectormap-2.0.1.min.js" type="text/javascript" ></script>
    <script src="assets/vendors/maps/js/gdp-data.js" type="text/javascript" ></script>
    <script src="assets/vendors/maps/js/jquery-jvectormap-world-mill-en.js" type="text/javascript" ></script>
    <script src="assets/vendors/maps/js/jquery-jvectormap-us-aea-en.js" type="text/javascript" ></script>
    <script src="assets/vendors/video-js/video.js"></script>
    <script>
        videojs.options.flash.swf = "assets/vendors/video-js/video-js.swf";
    </script>


    <!--##################################################################################
    #
    # COMMON SCRIPT FOR THIS PAGE
    #
    ##################################################################################-->
    <!--common script init for all pages-->
    <script src="assets/js/theme.js" type="text/javascript" ></script>

    <!--script for this page-->
    <script src="assets/js/dashboard-green.js" type="text/javascript" ></script>
    <script src="assets/js/forms.js" type="text/javascript" ></script>

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
            App.initEmail();
            App.initSummernote();
            App.initAccordion();
            App.initModal();
            App.initPopover();
            App.initOwlCarousel();
            App.initSkyCons();
            App.initWidgets();

            DashboardGreen.initRickShawGraph();
            DashboardGreen.initFlotGraph();
            DashboardGreen.initChartGraph();
            DashboardGreen.initSparklineGraph();
            DashboardGreen.initDateRange();
            DashboardGreen.initWorldMap();
            DashboardGreen.initEasyPieChart();
            DashboardGreen.initMorrisChart();
            DashboardGreen.initTodoList();

            if($.cookie("is_close_popup_header") === undefined || $.cookie("is_close_popup_header") != 1) {
                $(".pop-header").slideDown(1000);
            }

            $(".close-pop-up").on("click", function(){
                $.cookie("is_close_popup_header", 1);
                $(".pop-header").slideUp();
            });

        });
    </script>

<!--===== Footer End ========-->