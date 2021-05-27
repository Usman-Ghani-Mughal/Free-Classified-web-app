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
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>Favourite Ads</span></li>
		</ul>
    </div>
</div>
<br>

<div class="wrapper" id="content">
    <a href="#" data-bclass-toggle="display-filters" class="resp-toogle show-filters-btn">User menu</a>

	<?php include "libraries/profile_sidebar.php"; ?>

    <div id="main">
        <div class="list-header">
		<h2>Favourite Ads</h2>


<table class='table  table-bordered'>
	<tr>
		<td  width='100'><b>Picture</b></td>
		<td><b>Ad Title</b></td>
	</tr>
<?php 
if(isset($_POST['delwish'])){
	$delWishlist = mysqli_query($con, "DELETE FROM my_favorites WHERE ad_id='".$_POST['getID']."' AND email='$pro_email' ");
	if($delWishlist){
		echo "<script>window.location.href='".$url."'</script>";							
	}
}


	$getFavAds = mysqli_query($con,"SELECT * FROM my_favorites WHERE email='$pro_email' ");
	while($fav_row=mysqli_fetch_assoc($getFavAds)){

	$getActiveAds = mysqli_query($con,"SELECT * FROM post_ad WHERE id='".$fav_row['ad_id']."' ");
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
		<td>
		
			<img src="assets/images/posts/<?php echo $row['img1']; ?>" alt="" />
		
		</td>
		<td>
			<?php echo $row['title']; ?><br />
		<form method="post">
			<input type="hidden" name='getID' value='<?php echo $row['id']; ?>' />	
			<a href="index.php?page=detail&ID=<?php echo $row['id']; ?>" class='btn btn-success  pull-right'>Preview Details</a>
			<button type="submit" name="delwish" class="btn btn-danger pull-right" > Remove   </button>
		</form>
		
		
		</td>

	</tr>
<?php }} ?>
</table>




		</div><!-- content -->
	</div>
	

</div>
