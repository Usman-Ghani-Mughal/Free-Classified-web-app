<?php 
session_start();
error_reporting(0);
$url = $_SERVER['REQUEST_URI'];

date_default_timezone_set('Asia/Karachi');
$crntDate		= date('d F, Y');
$crntTime	= date("h:i A");	

include("libraries/config.php"); 

	 @$pro_email = $_SESSION['email'];
		
	$SelectProfileInfo	= mysqli_query($con,"SELECT * FROM admin WHERE email='$pro_email' ");
		while($row=mysqli_fetch_assoc($SelectProfileInfo)){
				
			$pro_id				= $row['id'];
			$pro_img			= $row['img'];
		 	$pro_first_name		= $row['first_name'];
			$pro_last_name		= $row['last_name'];
			$pro_username		= $row['username'];
			$pro_full_name		= $pro_first_name.' '.$pro_last_name;
			$pro_phone			= $row['phone'];
			$pro_gender			= $row['gender'];
			$pro_birthday		= $row['birthday'];
			$pro_street			= $row['street'];
			$pro_city			= $row['city'];
			$pro_state			= $row['state'];
			$pro_zip			= $row['zip'];
			$pro_role			= $row['role'];
			$pro_status			= $row['status'];
	}					
	
 	mysqli_query($con,'SET character_set_results=utf8');
	mysqli_query($con,'SET names=utf8');
	mysqli_query($con,'SET character_set_client=utf8');
	mysqli_query($con,'SET character_set_connection=utf8');
	mysqli_query($con,'SET character_set_results=utf8');
	mysqli_query($con,'SET collation_connection=utf8_general_ci');

	mysqli_query($con,"SET NAMES utf8"); //the main trick
	

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="thema bootstrap template, thema admin, bootstrap, admin template, bootstrap admin">

    <meta name="author" content="LanceCoder">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="">
    <title><?php echo $scool_name; ?></title>
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/Pe-icon-7-stroke/Pe-icon-7-stroke.css" rel="stylesheet"/>

    <!-- Start Global plugin css -->
    <link href="assets/css/global-plugins.css" rel="stylesheet">
    <link href="assets/vendors/jquery-icheck/skins/all.css" rel="stylesheet" />

    <!-- This page plugin css start -->
    <link href="assets/vendors/maps/css/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css"/>
    <link href="assets/vendors/morris-chart/morris.css" rel="stylesheet" >
    <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="assets/vendors/jquery-ricksaw-chart/css/rickshaw.css" rel="stylesheet"/>
    <link href="assets/css/flot-chart.css" rel="stylesheet"/>
    <!-- This page plugin css end -->
    <!-- Custom styles for this template -->
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="assets/css/class-helpers.css" rel="stylesheet"/>
    <!--Color schemes-->
    <link href="assets/css/colors/green.css" rel="stylesheet">
    <link href="assets/css/colors/turquoise.css" rel="stylesheet">
    <link href="assets/css/colors/blue.css" rel="stylesheet">
    <link href="assets/css/colors/amethyst.css" rel="stylesheet">
    <link href="assets/css/colors/cloud.css" rel="stylesheet">
    <link href="assets/css/colors/sun-flower.css" rel="stylesheet">
    <link href="assets/css/colors/carrot.css" rel="stylesheet">
    <link href="assets/css/colors/alizarin.css" rel="stylesheet">
    <link href="assets/css/colors/concrete.css" rel="stylesheet">
    <link href="assets/css/colors/wet-asphalt.css" rel="stylesheet">
	<!--Fonts-->
    <link href="assets/fonts/Indie-Flower/indie-flower.css" rel="stylesheet" />
    <link href="assets/fonts/Open-Sans/5f0dcaa0e4aad4d9473a87378b32e8a1.css" rel="stylesheet" />
	
<style type="text/css">
.mce-label {
	display: none !important;
}
</style>
<style type="text/css">
	.border_none {
    border: 0;
    border-bottom: 1px solid #666;
    margin-top: -15px;
}
	</style>
	<style type="text/css">
.info-box {
    display: block;
    min-height: 90px;
    background: #fff;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    border-radius: 2px;
    margin-bottom: 15px;
}
.info-box-content {
    padding: 5px 10px;
    margin-left: 90px;
}
.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0,0,0,0.2);
}
.bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: #00c0ef !important;
}
.bg-purple {
    background-color: #605ca8 !important;
}
.info-box-number {
    display: block;
    font-weight: bold;
    font-size: 18px;
}
.info-box-text {
    text-transform: uppercase;
}
.info-box small {
    font-size: 14px;
}
.progress-xs {
    height: 10px !important;
}
</style>
</head>
<body id="default-scheme">

    <!--======== Start Style Switcher ========-->    
    <!----i class="style-switcher-btn fa fa-cogs hidden-xs"></i---->
    <div class="style-switcher">
        <div class="style-swticher-header">
            <div class="style-switcher-heading fg-white">Color Switcher</div>            
            <div class="theme-close"><i class="icon-close"></i></div>
        </div>

        <div class="style-swticher-body">
            <ul class="list-unstyled">
                <li class="theme-default theme-active" data-style="default"></li>
                <li class="theme-turquoise" data-style="turquoise"></li>
                <li class="theme-blue" data-style="blue"></li>
                <li class="theme-amethyst" data-style="amethyst"></li>
                <li class="theme-cloud" data-style="cloud"></li>
                <li class="theme-sun-flower" data-style="sun-flower"></li>
                <li class="theme-carrot" data-style="carrot"></li>
                <li class="theme-alizarin" data-style="alizarin"></li>
                <li class="theme-concrete" data-style="concrete"></li>
                <li class="theme-wet-ashphalt" data-style="wet-ashphalt"></li>
            </ul>         
        </div>
    </div><!--/style-switcher-->
    <!--======== End Style Switcher ========-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
<script>
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
        _create: function() {
            this._super();
            this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
        },
        _renderMenu: function( ul, items ) {
            var that = this,
                currentCategory = "";
            $.each( items, function( index, item ) {
                var li;
                if ( item.category != currentCategory ) {
                    ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
                    currentCategory = item.category;
                }
                li = that._renderItemData( ul, item );
                if ( item.category ) {
                    li.attr( "aria-label", item.category + " : " + item.label );
                }
            });
        }
    });
</script>

<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', '');
        mywindow.document.write('<html><head><title></title>');
        mywindow.document.write(' <link rel="stylesheet" href="css/bootstrap.min.css">');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea.editor' });</script>

<style type="text/css">
#textarea .btn-group>.btn:first-child{
	background-color:#FFF;
	color:#000;
}
#textarea  .btn-group .btn+.btn, .btn-group .btn+.btn-group, .btn-group .btn-group+.btn, .btn-group .btn-group+.btn-group{
	background-color:#FFF;
	color:#000;
}
</style>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.6/summernote.min.css'>
<script type="text/javascript">
  $(document).ready(function() {
    $('#code_preview0').summernote({height: 300});
    });
</script>	
	
<?php  include('libraries/alertmodal.php'); ?>


	

