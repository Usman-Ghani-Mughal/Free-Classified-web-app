<?php 
if(!$_SESSION['front_user_email']){
	echo "<script>window.location.href='index.php?page=login'</script>";
}  
?>
	</div>
</div>
<div class="wrapper wrapper-flash">
    <div class="breadcrumb">
       <div class="home-icon"><i class="fa fa-home"></i></div>
		<ul class="breadcrumb">
			<li class="first-child" >
				<a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a>
			</li>
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>My Account</span></li>
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>Ads</span></li>
		</ul>
    </div>
</div>
<br>

<div class="wrapper" id="content">
    <a href="#" data-bclass-toggle="display-filters" class="resp-toogle show-filters-btn">User menu</a>

	<?php include "libraries/profile_sidebar.php"; ?>

    <div id="main">
        <div class="list-header">
		<h2>Ads</h2>
             
			<a href="#"></a> 
			<a href="#"></a> 
<?php 
	$getTotalActiveAds = mysqli_num_rows(mysqli_query($con,"SELECT * FROM post_ad WHERE email='$pro_email' AND expiry_date > '$crntDate'  AND status='Unblocked' "));
	$getTotalInactiveAds = mysqli_num_rows(mysqli_query($con,"SELECT * FROM post_ad WHERE email='$pro_email' AND expiry_date < '$crntDate'  OR status='Blocked' "));
	
?>
		<ul class="user_menu">
			<li style='float:left' <?php if(isset($_GET['active'])){?> class='actBtn' <?php }?>>	
				<a href="index.php?page=ads&active"><b>Active (<?php echo $getTotalActiveAds; ?>)</b></a></li>
			<li style='float:left' <?php if(isset($_GET['inactive'])){?> class='actBtn' <?php }?>>	
				<a href="index.php?page=ads&inactive"><b>Inactive (<?php echo $getTotalInactiveAds; ?>)</b></a></li>
		</ul>
		<br />
		<hr />
<?php if(isset($_GET['active'])){?>		
<small>
<table class='table  table-bordered'>
	<tr>
		<td><b>Date</b></td>
		<td><b>Ad Title</b></td>
	</tr>
<?php 

	 
	$getActiveAds = mysqli_query($con,"SELECT * FROM post_ad WHERE email='$pro_email' AND expiry_date > '$crntDate' AND status='Unblocked' ");
	while($row=mysqli_fetch_assoc($getActiveAds)){
		$getProvince 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM province WHERE id='".$row['province']."'"));
		$province 		= $getProvince['province_name'];

		$cityname 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM cities WHERE id='".$row['city']."'"));
		$city 		= $cityname['city_name'];
		
		$getMainCats = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$row['main_cat_id']."'"));
		$mainCatId	 = $getMainCats['id'];
		$mainCatName = $getMainCats['name'];
		
		$getSubCats	 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM sub_categories WHERE id='".$row['sub_cat_id']."'"));
		$SubCatId	 = $getSubCats['id'];
		$SubCatName	 = $getSubCats['name'];
		
		$getUser 	= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE email='".$row['email']."'"));
		$p_img		= $getUser['img'];
		$p_gender	= $getUser['gender'];
		$p_username	= $getUser['username'];
?>

	<tr>
		<td width='170'>
		
			<span class='pull-left'>From:</span> <span class='pull-right'><?php echo date('d F, Y', strtotime($row['published_date']));?></span>
			<br />
			<span class='pull-left'>To:</span>  <span class='pull-right'><?php echo date('d F, Y', strtotime($row['expiry_date']));?></span>
		
		</td>
		<td>
			<?php echo $row['title']; ?><br />
			<a href="index.php?page=detail&ID=<?php echo $row['id']; ?>" target='_blank' class='btn btn-success pull-right'>Preview</a>
			<a href="#"  data-toggle="modal" data-target="#deactivate<?php echo $row['id']; ?>" class='btn btn-danger pull-right'>Deactivate Ad</a>
			<a href="index.php?page=post_ad_edit&AdID=<?php echo $row['id']; ?>" class='btn btn-info pull-right'>Edit</a>
		</td>

	</tr>
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="deactivate<?php echo $row['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Choose reason</h4>
      </div>
	<form method="post">
	<input type="hidden" name='getID'value='<?php echo $row['id'];  ?>' />
		  <div class="modal-body">
			<p><input type="radio" name='reason' style='margin:0px;'onclick="hide<?php echo $row['id']; ?>()" value='Sold on Assabuur'/> Sold on Assabuur</p>
			<p><input type="radio" name='reason' style='margin:0px;'onclick="hide<?php echo $row['id']; ?>()" value='Sold on another site' /> Sold on another site</p>	
			<p><input type="radio" name='reason' style='margin:0px;'onclick="hide<?php echo $row['id']; ?>()" value='Few or no replies to my Ad' /> Few or no replies to my Ad</p>
			<p><input type="radio" name='reason' style='margin:0px;'onclick="hide<?php echo $row['id']; ?>()" value='Item is no longer available' /> Item is no longer available</p>
			<p><input type="radio" name='reason' style='margin:0px;'onclick="show<?php echo $row['id']; ?>()" value='' /> Other reasons</p>
			<div id="div<?php echo $row['id'];  ?>" style="display:none;" >
				<input type="text" name='other_reason' class='form-control' placeholder='Other reasons' /> 
			</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="submit" name='deactivate'  class='btn btn-danger'>
					<i class="fa fa-trash fa-fw"></i><span>Deactivate Ad </span>
			</button>
		  </div>
	</form>
<script type="text/javascript">
function show<?php echo $row['id']; ?>(){
	document.getElementById('div<?php echo $row['id'];  ?>').style.display ='block';	
}
function hide<?php echo $row['id']; ?>(){
	document.getElementById('div<?php echo $row['id'];  ?>').style.display ='none';	
}
</script>	

    </div>

  </div>
</div>	
<?php }

if(isset($_POST['deactivate'])){ 
	
	if($_POST['other_reason']){ 
	 	$reason	= $_POST['other_reason'];
	}
	if($_POST['reason']){
	 	$reason	= $_POST['reason'];
	}
	
	$deactivateAd = mysqli_query($con,"UPDATE post_ad SET status='Blocked', reason='$reason' WHERE id='".$_POST['getID']."'");
	if($deactivateAd){
		echo "<script>window.location.href='index.php?page=ads&active'</script>";
	}
}
?>
</table></small>
<?php } ?>	


<?php if(isset($_GET['inactive'])){ ?>
<small>
<table class='table table-bordered'>
	<tr>
		<td><b>Date</b></td>
		<td><b>Ad Title</b></td>
	</tr>
<?php 

	 
	$getDeActiveAds = mysqli_query($con,"SELECT * FROM post_ad WHERE email='$pro_email' AND expiry_date < '$crntDate' OR status='Blocked' ");
	while($row=mysqli_fetch_assoc($getDeActiveAds)){
		$getProvince 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM province WHERE id='".$row['province']."'"));
		$province 		= $getProvince['province_name'];
		
		$cityname 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM cities WHERE id='".$row['city']."'"));
		$city 		= $cityname['city_name'];
		
		$getMainCats = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$row['main_cat_id']."'"));
		$mainCatId	 = $getMainCats['id'];
		$mainCatName = $getMainCats['name'];
		
		$getSubCats	 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM sub_categories WHERE id='".$row['sub_cat_id']."'"));
		$SubCatId	 = $getSubCats['id'];
		$SubCatName	 = $getSubCats['name'];
		
		$getUser 	= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE email='".$row['email']."'"));
		$p_img		= $getUser['img'];
		$p_gender	= $getUser['gender'];
		$p_username	= $getUser['username'];

?>	

	<tr>
		<td width='170'>
		
			<span class='pull-left'>From:</span> <span class='pull-right'><?php echo date('d F, Y', strtotime($row['published_date']));?></span>
			<br />
			<span class='pull-left'>To:</span>  <span class='pull-right'><?php echo date('d F, Y', strtotime($row['expiry_date']));?><?php echo $row[''];?></span>
		
		</td>
		<td>
			<?php echo $row['title']; ?><br />
			<form method="post">
			<input type="hidden" name='get_ID' value='<?php echo $row['id']; ?>' />
				<button type="submit" name='active_ad' class='btn btn-success pull-right'>Activate Ad</button>	
			</form>
				<button href="#" data-toggle="modal" data-target="#delete<?php echo $row['id']; ?>" class='btn btn-danger pull-right'>Delete</button>
		
		</td>

	</tr>
<!-- Modal -->
<div id="delete<?php echo $row['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Ad</h4>
      </div>
	
		  <div class="modal-body">
		<p>Are you sure you want delete <em>"<?php echo $row['title']; ?>"</em> Ad?</p>
		
			
		  </div>
		  <div class="modal-footer">
			
				<a href="libraries/delete.php?DelAd=<?php echo $row['id']; ?>" class='btn btn-danger'>
					<i class="fa fa-trash fa-fw"></i><span>Delete Ad</span>
				</a>
			
		  </div>
    </div>

  </div>
</div>	
<?php } 
if(isset($_POST['active_ad'])){ 

$ActivateAd = mysqli_query($con,"UPDATE post_ad SET published_date='$crntDate', expiry_date='$expDate', status='Unblocked', reason='' WHERE id='".$_POST['get_ID']."'");
	if($ActivateAd){
		echo "<script>window.location.href='index.php?page=ads&inactive'</script>";
	}
}
?>	
</table></small>
<?php } ?>			



	

		</div><!-- content -->
	</div>
	

</div>
