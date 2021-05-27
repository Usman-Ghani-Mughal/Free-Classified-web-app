<?php
session_start();
error_reporting(0);
include ('../admin/libraries/config.php');

//DelAd 
if(isset($_GET['DelAd'])){
	
	$selectIMG = mysqli_query($con,"SELECT * FROM post_ad WHERE id='".$_GET['DelAd']."'");
	while($row=mysqli_fetch_assoc($selectIMG)){
		unlink('../assets/images/posts/'.$row['img1']);
		unlink('../assets/images/posts/'.$row['img2']);
		unlink('../assets/images/posts/'.$row['img3']);
		unlink('../assets/images/posts/'.$row['img4']);
		unlink('../assets/images/posts/'.$row['img5']);
		unlink('../assets/images/posts/'.$row['img6']);
		unlink('../assets/images/posts/'.$row['img7']);
		unlink('../assets/images/posts/'.$row['img8']);
		unlink('../assets/images/posts/'.$row['img9']);
		unlink('../assets/images/posts/'.$row['img10']);
		unlink('../assets/images/posts/'.$row['img11']);
		unlink('../assets/images/posts/'.$row['img12']);
	}
	
$DeleteQuery = mysqli_query($con,"DELETE FROM post_ad WHERE id='".$_GET['DelAd']."'");
	
	if($DeleteQuery){
		echo '<script>window.location.href = "../index.php?page=ads&inactive";</script>';
	}
}





?>