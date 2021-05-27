<?php 
if($_GET['city']){
	
	$cityCount 	= mysqli_num_rows(mysqli_query($con, "SELECT * FROM cities WHERE city_name='".$_GET['city']."'"));
  	$provinceCount = mysqli_num_rows(mysqli_query($con, "SELECT * FROM province WHERE province_name='".$_GET['city']."'"));
	
	if($cityCount>0){
		$getCityID = mysqli_query($con, "SELECT * FROM cities WHERE city_name='".$_GET['city']."'");
		$CityID=mysqli_fetch_assoc($getCityID);	
	}
	if($provinceCount>0){
		$getCityID = mysqli_query($con, "SELECT * FROM province WHERE province_name='".$_GET['city']."'");
		$CityID=mysqli_fetch_assoc($getCityID);	
	}

}

if($_GET['category']){
	$getSubCats = mysqli_query($con, "SELECT * FROM sub_categories WHERE name='".$_GET['category']."'");
	$row1=mysqli_fetch_assoc($getSubCats);
	$subCatID 		= $row1['id'];
 	$subCatName 	= $row1['name'];
	
	$getMainCats = mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$row1['main_cat_id']."'");	
}
if($_GET['sc']){
	$getSubCats = mysqli_query($con, "SELECT * FROM sub_categories WHERE id='".$_GET['sc']."'");
	$row1=mysqli_fetch_assoc($getSubCats);
	$subCatID 		= $row1['id'];
 	$subCatName 	= $row1['name'];
	
	$getMainCats = mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$row1['main_cat_id']."'");
}
if($_GET['mc']){
	$getMainCats = mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$_GET['mc']."'");
}
	$row2=mysqli_fetch_assoc($getMainCats);
	
	$mainCatId 		= $row2['id'];
 	$mainCatName 	= $row2['name'];

include "libraries/searchbar.php"; 	
?>
	</div>
</div>	

<div class="wrapper wrapper-flash">
	<div class="breadcrumb">
        <div class="home-icon"><i class="fa fa-home"></i></div>
            <ul class="breadcrumb">
				<li class="first-child" ><a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a></li>
				<?php if($mainCatName){?>
				<li><i class="fa fa-angle-right"></i> <a href="index.php?page=home&mc=<?php echo $mainCatId; ?>" ><span itemprop="title"><?php echo $mainCatName; ?></span></a></li>
				<li class="last-child"><i class="fa fa-angle-right"></i> <span itemprop="title"><?php echo $subCatName; ?></span></li>
				<?php } ?>
			</ul>
    </div>
</div>

<br />
<div class="wrapper" id="content">

<?php
if($_GET['userid']){
	
$getUser 	= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id='".$_GET['userid']."'"));
	$user_first_name	= $getUser['first_name'];
	$user_last_name		= $getUser['last_name'];
	$user_img			= $getUser['img'];
	$user_gender		= $getUser['gender'];
	$user_username		= $getUser['username'];	
	$user_email			= $getUser['email'];	
?>

<a href="#" data-bclass-toggle="display-filters" class="resp-toogle show-filters-btn"><i class="fa fa-sliders"></i> Search Filters</a>
<div id="sidebar">
	<div class="filters">
		<h5><i class="fa fa-user"></i>  <?php echo $user_first_name.' '.$user_last_name; ?> </h5>
<fieldset>
	<div class="row">
	
	<?php 
	if(stripos($user_img, 'http') !== FALSE){
		echo '<img src="'.$user_img.'"  width="100%" />';
	}else{ 
	if($user_img){?>
		<img src="assets/images/avatar/<?php echo $user_img; ?>" />
	<?php }else{ 
			if($user_gender=="Male"){
	?>  
		<img src="assets/images/avatar/male.jpg" />
	<?php }else{ ?>
		<img src="assets/images/avatar/female.jpg" />	
	<?php }}} ?> 

	</div>
	
	
	
	
</fieldset>



	</div>
	<br>
	<br>
</div>    

<?php
}else{
	include'libraries/slide_bar_listing.php'; 
}
?>
<style type="text/css">
.listing-card {
    margin: 0px 0;
}
.dataTables_wrapper .dataTables_length {
  /*  display: none; */
}
table.dataTable thead .sorting_asc {
    display: none;
}

table.dataTable.no-footer {
    border-bottom: 1px solid #FFF !important;
}
table.dataTable thead th, table.dataTable thead td {
   border-bottom: 1px solid #FFF !important;

</style>
<div id="main">

<ul class="listing-card-list " id="listing-card-list">
<table id="myTable" class="" style="width:100%">
    <thead>
        <tr>
            <th></th>
           
        </tr>
    </thead>
    <tbody>
<?php 
if($_GET['mc']){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE main_cat_id='".$_GET['mc']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
}
if($_GET['sc']){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE sub_cat_id='".$_GET['sc']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
}
if($_GET['city']){
	if($provinceCount>0){ 
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE province='".$CityID['id']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}else{	
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE city='".$CityID['id']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}if($CityID['id']==''){
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}
}
if($_GET['category']){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE sub_cat_id='$subCatID'  AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
}
if($_GET['keyword']){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
}
if($_GET['city'] AND $_GET['category']){
	if($provinceCount>0){ 
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE province='".$CityID['id']."' AND sub_cat_id='$subCatID' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}else{
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE city='".$CityID['id']."' AND sub_cat_id='$subCatID' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}if($CityID['id']==''){
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE sub_cat_id='$subCatID' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}
}
if($_GET['city'] AND $_GET['keyword']){
	if($provinceCount>0){ 
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE province='".$CityID['id']."' AND title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}else{	
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE city='".$CityID['id']."' AND title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}if($CityID['id']==''){
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}
}
if($_GET['category'] AND $_GET['keyword']){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE sub_cat_id='$subCatID' AND title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
}
if($_GET['city'] AND $_GET['category'] AND $_GET['keyword']){
	if($provinceCount>0){ 
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE province='".$CityID['id']."' AND sub_cat_id='$subCatID' AND title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}else{	
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE city='".$CityID['id']."' AND sub_cat_id='$subCatID' AND title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}if($CityID['id']==''){
		$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE sub_cat_id='$subCatID' AND title LIKE '%".$_GET['keyword']."%' AND expiry_date > '$crntDate'  AND status='Unblocked'  ");
	}
}
if($_GET['categories']=='all'){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE expiry_date > '$crntDate'  AND status='Unblocked' ORDER BY RAND()  ");
}
// Search By Sub Category

if($_GET['category'] AND $_GET['subCategory'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['city'] AND $_GET['subCategory'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		city		='".$CityID['id']."' AND 
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['keyword'] AND $_GET['subCategory'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		title LIKE '%".$_GET['keyword']."%' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['city'] AND $_GET['keyword'] AND $_GET['subCategory'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		city		='".$CityID['id']."' AND 
		title LIKE '%".$_GET['keyword']."%' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}

// Search By Price
if($_GET['category'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['city'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		city		='".$CityID['id']."' AND 
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['keyword'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		title LIKE '%".$_GET['keyword']."%' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['city'] AND $_GET['keyword'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		city		='".$CityID['id']."' AND 
		title LIKE '%".$_GET['keyword']."%' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}

// Search By Sub Category & Price
if($_GET['category'] AND  $_GET['subCategory'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['city'] AND  $_GET['subCategory'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		city		='".$CityID['id']."' AND 
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['keyword'] AND  $_GET['subCategory'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		title LIKE '%".$_GET['keyword']."%' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['category'] AND $_GET['city'] AND $_GET['keyword'] AND  $_GET['subCategory'] AND $_GET['min'] AND $_GET['max'] ){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		sub_cat_id	='$subCatID' AND
		brand_cat	='".$_GET['subCategory']."' AND
		price BETWEEN '".$_GET['min']."' AND '".$_GET['max']."' AND
		city		='".$CityID['id']."' AND 
		title LIKE '%".$_GET['keyword']."%' AND
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}
if($_GET['userid']){
	$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE 
		email	='$user_email' AND	
		expiry_date > '$crntDate'  AND status='Unblocked' ");
}

$sno=0;
while($row=mysqli_fetch_assoc($getPostAds)){ 
$sno++;
	
$CityName 		= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM cities WHERE id='".$row['city']."'"));
$MainCategory 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM main_categories WHERE id='".$row['main_cat_id']."'"));
$SubCategory 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM sub_categories WHERE id='".$row['sub_cat_id']."'"));

?>

	<tr>
		<td>
	<li class="listing-card">
		<div class="image-area">
			<div class="photo-count-flag"> <?php echo $totalImg; ?> <i class="fa fa-camera"></i></div>
			<a class="listing-thumb" href="index.php?page=detail&ID=<?php echo $row['id'];?>" title=""><img src="assets/images/posts/<?php echo $row['img1']; ?>" /></a>
		</div>
			<div class="listing-detail">
				<div class="listing-cell">
					<div class="listing-data">
						<div class="listing-basicinfo">
							<a href="index.php?page=detail&ID=<?php echo $row['id'];?>" class="title" title="Pattoki Nursery for Landscaping"><?php echo $row['title'];?></a>
							<?php echo strip_tags(substr($row['descriptions'],0,100));?>...
							<div class="listing-attributes"><span class="currency-value"><b><?php if($row['price']){ echo "PKR ". number_format($row['price'],2); }?></b></span></div>
							<div class="listing-attributes">
								<span class="category"><i class="fa fa-th-large fa-fw"></i><?php echo $MainCategory['name'].', '.$SubCategory['name']; ?></span>
								<span class="location"><i class="fa fa-map-marker fa-fw"></i><?php echo $CityName['city_name']; ?></span>
								<span class="date"><i class="fa fa-clock-o fa-fw"></i><?php echo date('d F, Y', strtotime($row['published_date']));?></span>
							</div>                    
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
			<div class="favorite-btn">
				<?php
				if($row['email']!=$pro_email){ 
				
				if($_SESSION['front_user_email']){ 
				
				
					
				$GetWishlist = mysqli_query($con, "SELECT * FROM my_favorites WHERE ad_id='".$row['id']."' AND email='$pro_email'");
					$wishRow=mysqli_num_rows($GetWishlist);
					if($wishRow>0){
				?> 
				<form method="post">
					<input type="hidden" name='getID' value='<?php echo $row['id']; ?>' />
				   <button type="submit" name="delwish" class="btn btn-danger" > Remove from Favourites  </button>
				</form>
				<?php }else{ ?>
				<form method="post">
					<input type="hidden" name='getID' value='<?php echo $row['id']; ?>' />
				   <button type="submit" name="addtowish" class="btn btn-primary" >  Add to Favourites </button>
				</form>
				<?php } ?>
				
				<?php }else{ ?> 
				   <a href="index.php?page=login" class="btn btn-primary" >
				 
				   Add to Favourites
				   </a>
				<?php }} ?>
			
			</div>
	</li>
					</td>
        </tr>

<?php } if($sno==0){ ?>	 
<center>
	<h2>No results found</h2>
</center>
<?php }  
if(isset($_POST['addtowish'])){
	
	$AddToWishlist = mysqli_query($con, "INSERT INTO my_favorites VALUE ('', '".$_POST['getID']."', '$pro_email' )");
	if($AddToWishlist){
		echo "<script>window.location.href='".$url."'</script>";
	}
								
}
if(isset($_POST['delwish'])){
	$delWishlist = mysqli_query($con, "DELETE FROM my_favorites WHERE ad_id='".$_POST['getID']."' AND email='$pro_email' ");
	if($delWishlist){
		echo "<script>window.location.href='".$url."'</script>";							
	}
}
?>

    </tbody>
</table>
<br />
<br />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</ul>
					
     <div class="clear"></div>

	
</div><!-- content -->
</div>