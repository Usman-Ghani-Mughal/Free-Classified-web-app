<?php
session_start();
error_reporting(0);
include ('config.php');

//DellAllProfile 
if(isset($_GET['DellAllProfile'])){
	
 	$DellAllProfile	= $_GET['DellAllProfile'];
	
	$selectIMG = mysqli_query($con,"SELECT img FROM admin WHERE unique_id='$DellAllProfile'");
	while($row=mysqli_fetch_assoc($selectIMG)){
		$img = $row['img'];
	
		unlink('../assets/images/avatar/'.$img);
	}
$DeleteQuery = mysqli_query($con,"DELETE FROM admin WHERE unique_id='$DellAllProfile'");
	
	if($DeleteQuery){
		$_SESSION['success'] = "Your Query Has Been Successfully Deleted";
		echo '<script>window.location.href = "../index.php?page=users_all";</script>';
	}
}
//DellProfile 
if(isset($_GET['DellProfile'])){
	
 	$DellProfile	= $_GET['DellProfile'];
	
	$selectIMG = mysqli_query($con,"SELECT img FROM admin WHERE id='$DellProfile'");
	while($row=mysqli_fetch_assoc($selectIMG)){
		$img = $row['img'];
	}
		unlink('../assets/images/avatar/'.$img);
	
$DeleteQuery = mysqli_query($con,"DELETE FROM admin WHERE id='$DellProfile'");
	
	if($DeleteQuery){
		$_SESSION['success'] = "Your Query Has Been Successfully Deleted";
		echo '<script>window.location.href = "../index.php?page=users";</script>';
	}
}
//delmaincat 
if(isset($_GET['delmaincat'])){
	
		$checkDel = mysqli_query($con, "SELECT * FROM sub_categories WHERE main_cat_id='".$_GET['delmaincat']."'");
		$totalCats = mysqli_num_rows($checkDel);
		
		if($totalCats>0){
			$_SESSION['danger'] = "First Delete Sub Categories";
			echo '<script>window.location.href = "../index.php?page=main_categories";</script>';
		}else{
		unlink('../../assets/images/main_categories/'.$_GET['delimg']);
	
$DeleteQuery = mysqli_query($con,"DELETE FROM main_categories WHERE id='".$_GET['delmaincat']."'");
	
	if($DeleteQuery){
		$_SESSION['success'] = "Your Query Has Been Successfully Deleted";
		echo '<script>window.location.href = "../index.php?page=main_categories";</script>';
	}
	}
}
//delsubcat 
if(isset($_GET['delsubcat'])){
	
		unlink('../../assets/images/sub_categories/'.$_GET['delimg']);
	
$DeleteQuery = mysqli_query($con,"DELETE FROM sub_categories WHERE id='".$_GET['delsubcat']."'");
	
	if($DeleteQuery){
		$_SESSION['success'] = "Your Query Has Been Successfully Deleted";
		echo '<script>window.location.href = "../index.php?page=sub_categories";</script>';
	}
}
//DelProvince 
if(isset($_GET['DelProvince'])){
	
	$checkDel = mysqli_query($con, "SELECT * FROM cities WHERE province='".$_GET['DelProvince']."'");
	$totalCats = mysqli_num_rows($checkDel);
		
	if($totalCats>0){
		$_SESSION['danger'] = "First Delete Cities";
		echo '<script>window.location.href = "../index.php?page=province";</script>';
	}else{
		
		$DeleteQuery = mysqli_query($con,"DELETE FROM province WHERE id='".$_GET['DelProvince']."'");
		if($DeleteQuery){
			$_SESSION['success'] = "Your Query Has Been Successfully Deleted";
			echo '<script>window.location.href = "../index.php?page=province";</script>';
		}
	}
}
//DelCity 
if(isset($_GET['DelCity'])){
	
 	$DelCity	= $_GET['DelCity'];
	
$DeleteQuery = mysqli_query($con,"DELETE FROM cities WHERE id='$DelCity'");
	
	if($DeleteQuery){
		$_SESSION['success'] = "Your Query Has Been Successfully Deleted";
		echo '<script>window.location.href = "../index.php?page=cities";</script>';
	}
}

?>