<?php 
	session_start();
	error_reporting(0);
	$url = $_SERVER['REQUEST_URI'];
	$domain = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/assabuur/";
	date_default_timezone_set('Asia/Karachi');


	$crntDate	= date('Y-m-d');
	$crntTime	= date("h:i A");

	$expDate 	= date('Y-m-d', strtotime("+30 day", strtotime($crntDate)));
	$startTime 	= date('h:i A', strtotime("+5 min", strtotime($crntTime)));

	$crntDateTime = $crntDate.' | '.$crntTime;
	$active_ad = $crntDate.' | '.$startTime;	

	// This file is used for Connecting with the Data base.
	include("admin/libraries/config.php");

	// Get user email which is set from login file.
	@$pro_email = $_SESSION['front_user_email'];
		

	$SelectProfileInfo	= mysqli_query($con,"SELECT * FROM users WHERE email='$pro_email' ");
		while($row=mysqli_fetch_assoc($SelectProfileInfo))
		{
				
			$pro_id				= $row['id'];
		 	$pro_first_name		= $row['firstname'];
			$pro_last_name		= $row['lastname'];
			$pro_username		= $row['username'];
			$pro_full_name		= $pro_first_name.' '.$pro_last_name;
			$pro_status			= $row['status'];
			
			// <--------------------------------------------------------------------------------------------------------------------------->
			// <<<***>>>	All Bellow fields are removed from the data base	<<<***>>
			//$pro_img			= $row['img'];
			//$pro_phone			= $row['phone'];
			//$pro_gender			= $row['gender'];
			//$pro_birthday		= $row['birthday'];
			//$pro_street			= $row['street'];
			//$pro_city			= $row['city'];
			//$pro_state			= $row['state'];
			//$pro_zip			= $row['zip'];
			//$pro_role			= $row['role'];
			// <--------------------------------------------------------------------------------------------------------------------------->
		}					
	
	mysqli_query($con,'SET character_set_results=utf8');
	mysqli_query($con,'SET names=utf8');
	mysqli_query($con,'SET character_set_client=utf8');
	mysqli_query($con,'SET character_set_connection=utf8');
	mysqli_query($con,'SET character_set_results=utf8');
	mysqli_query($con,'SET collation_connection=utf8_general_ci');
	mysqli_query($con,"SET NAMES utf8"); //the main trick

	$TotalUsersAds = mysqli_num_rows(mysqli_query($con,"SELECT * FROM post_ad WHERE expiry_date > '$crntDate'  AND status='Unblocked' ")); 
	$social	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM social_media WHERE id='1' "));
 	$TotalFav = mysqli_num_rows(mysqli_query($con, "SELECT * FROM my_favorites WHERE email='$pro_email' "));
?>	

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free classified ads in Pakistan - Assabuur.com</title>
	<meta name="title" content="Free classified ads in Pakistan - Assabuur.com" />
	<meta name="description" content="Search &amp; post free classified ads on Pakistan’s rapidly growing classifieds website. Buy or sell apartments, cars, bikes, mobile phones, find jobs, home services, repair electronic or kitchen appliances and more." />
	<meta name="keywords" content="classifieds, post free ads, free classified ads, free advertising, buy sell, auto classifieds, free advertisement, used stuff, used mobiles, deal markaz, classified, free classified, classified web, free listings, cars for sale, sale" />
	
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Expires" content="Fri, Jan 01 1970 00:00:00 GMT" />
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	


	<!----Links Of FontIcons----> 
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<!----Links Of CSS----> 
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/detail_slider.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/my_style.css" rel="stylesheet" type="text/css"/>

	<!----Links Of JavaScript----> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"type="text/javascript" ></script>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea.editor' });</script>

	<style type="text/css">
		.mce-label {
			display: none !important;
		}
	</style>
	<script type="text/javascript">
		$(document).ready( function(){
				$('.new_msg').load('php_ajax/new_msg.php');
				refresh0();
		});
		function refresh0()
		{
			setTimeout( function(){
				$('.new_msg').load('php_ajax/new_msg.php');
				refresh0();
			}, 1000);
		}


		$(document).ready( function(){
			$('.inbox_sent').load('php_ajax/inbox_sent.php');
			refresh1();
		});
		function refresh1(){
				setTimeout( function() {
				$('.inbox_sent').load('php_ajax/inbox_sent.php');
				refresh1();
				}, 1000);
		}


		$(document).ready( function(){
				$('.user_nav').load('php_ajax/user_nav.php');
				refresh2();
			});
		function refresh2()
		{
			setTimeout( function() {
			$('.user_nav').load('php_ajax/user_nav.php');
			refresh2();
			}, 1000);
		}



		$(document).ready( function(){
			$('.messages').load('php_ajax/inbox.php');
			refresh3();
		});
		function refresh3()
		{
			setTimeout( function() {
			$('.messages').load('php_ajax/inbox.php');
			refresh3();
			}, 1000);
		}

		$(document).ready( function(){
				$('.read_msg').load('php_ajax/read_msg.php');
				refresh4();
		});
		function refresh4()
		{
			setTimeout( function() {
			$('.read_msg').load('php_ajax/read_msg.php');
			refresh4();
			}, 1000);
		}

	</script>	

	<script>
		/*===========Open new Tab without Address bar=================*/
		function popitup(link) {
  			var w = window.open(link.href,
        	link.target||"_blank",
        	'menubar=no,toolbar=no,location=no,directories=no,status=no,scrollbars=no,resizable=no,dependent,width=900,height=600,left=0,top=0');
  			return w?false:true; // allow the link to work if popup is blocked
 		}
	</script>

	<!---===========Search like google =================--->

	<!-- jQuery UI theme or Bootstrap (optional, if you create a custom theme) -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

	<!-- jQuery UI position utility (optional, if you position the keyboard yourself) -->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
	<style type="text/css"></style>

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
                	if ( item.category != currentCategory ) 
					{
                    	ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
                    	currentCategory = item.category;
                	}
                	li = that._renderItemData( ul, item );
                	if ( item.category )
					{
                    	li.attr( "aria-label", item.category + " : " + item.label );
                	}
            	});
        	}
    	});
	</script>

	<?php  if($_GET['user'])
			{ ?>
				<span class='read_msg'></span>
	  <?php } ?>
</head>

<?php if($_GET['page']=='login' OR $_GET['page']=='register')
		{ ?>
			<body class="login">
<?php   } 
	  if($_GET['page']=='detail')
	  	{ ?>
			<body class="item">
<?php   } 
	  if(!$_GET['page'] OR $_GET['page']=='home')
	    { ?>
			<body class="has-searchbox home">
<?php   } 
	  if($_GET['page']=='listing')
	    { ?>
			<body class="has-searchbox search">
<?php   } 
	  if($_GET['page']=='post_ad' OR $_GET['page']=='post_ad_edit')
	    { ?>
			<body class="item-post">
<?php   } 
	  if($_GET['page']=='profile' OR $_GET['page']=='ads' OR $_GET['page']=='messages' OR $_GET['page']=='favourite' OR $_GET['page']=='settings' )
	    { ?>
			<body class="user user-items">
<?php   } 
	  if($_GET['page']=='userprofile')
	  	{ ?>
			<body class="user-public-profile">
<?php 	} ?>



		<div id="header">
			<div class="header-top-menu-row">
				<div class="wrapper">
					<ul class="nav">
				
						<?php if($_SESSION['front_user_email'])
								{ ?>	
									<li><a href="index.php?page=messages"  1onclick="return popitup(this)"><span class='new_msg text-danger'  ></span> </a></li>
									<li><a href="index.php?page=favourite"> <span class='badge'><i class="fa fa-heart" aria-hidden="true"></i>  <?php echo $TotalFav; ?></span></a><div class="separator">|</div></li>
									<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a><div class="separator">|</div></li>
									<li><a href="index.php?page=ads&active"><i class="fa fa-user" aria-hidden="true"></i> My Account</a><div class="separator">|</div></li>
									<li><i class="fa fa-user" aria-hidden="true"></i>Welcome:  <?php echo $pro_full_name; ?><div class="separator">|</div></li>
						<?php   }
								else
								{?>
									<li><a href="index.php?page=register"><i class="fa fa-user-plus" aria-hidden="true"></i>  Register</a></li>
									<li><a href="index.php?page=login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a><div class="separator">|</div></li>
						<?php  } ?>
					</ul>
			<div class="clear"></div>
		</div>
	</div>
<!--    <div class="clear"></div>-->

	<div class="top-scroller">
		<div id="logo-row">
			<div class="wrapper">
				<ul>
					<li class="header-logo"><div id="logo"><a href="index.php?page=home"><img alt="Assabuur.com" src="assets/images/logo.png"></a></div></li>
					<li>
						<a href="index.php?page=post_ad">
							<div class="post-free-ad-tab" style="padding: 20px; font-weight: bold; font-size: 16px;">
								<i class="fa fa-bookmark fa-fw fa-rotate-360"></i><span>Submit an Ad</span>
							</div>
						</a>
					</li>
					<li>
					<?php if($_SESSION['front_user_email']){ ?>
						<a href="index.php?page=ads&active">
							<div class="search-ad-tab" style="padding: 20px; font-weight: bold; font-size: 16px;">
								<i class="fa fa-user fa-fw"></i><span><?php echo $pro_full_name; ?> </span>
							</div>
						</a>	
					<?php }else{ ?>
						<a href="index.php?page=login">
							<div class="search-ad-tab" style="padding: 20px; font-weight: bold; font-size: 16px;">
								<i class="fa fa-user fa-fw"></i><span>My Account </span>
							</div>
						</a>
					<?php } ?>
					</li>
				</ul>
			</div>
		</div>	