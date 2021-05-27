<?php
	include "libraries/header.php";

//option functions
	@$view = $_GET['page'];
	if ($view)
	{
	$path = "pages/".$view.".php";
	
	if(file_exists($path))
	{
	include($path);
	}
	else
	{
		include "pages/page-error-404.php";
	}
	
	
	}
	else
	{
		include "pages/home.php";
		
	}

	//include "libraries/javascript_links.php"; 
?>


</body>
</html>