<?php include "libraries/searchbar.php"; ?>

	</div>
</div>	


<div class="wrapper" id="content">
<div id="main"  class='pull-left'>
    <div class="category-selector-area-on-main">
		<div class="category-selector">
		
<?php if(!isset($_GET['mc'])){ ?>
			<h4 class="caption">SELECT CATEGORY</h4><br />
			<?php 
				$SelectMainCats = mysqli_query($con, "SELECT * FROM main_categories");
				while($row=mysqli_fetch_assoc($SelectMainCats)){
					
				$totalAds = mysqli_num_rows(mysqli_query($con, "SELECT * FROM post_ad WHERE main_cat_id='".$row['id']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  "));	
			?>	
			<div class="categoryGrid">
				<a href="index.php?page=home&mc=<?php echo $row['id']; ?>" class="categoryArea" >
					<div class="categoryIcon"><img src="assets/images/main_categories/<?php echo $row['img']; ?>"  /></div>
					<p class="categoryName"><?php echo $row['name']; ?>
					(<?php echo $totalAds;  ?>)
					</p>
				</a>
			</div>
<?php 		}
	}else{
	$SelectMainCats = mysqli_query($con, "SELECT * FROM main_categories  WHERE id='".$_GET['mc']."' ");
	$row1=mysqli_fetch_assoc($SelectMainCats);
	$main_cat_name = $row1['name'];
	$main_cat_img = $row1['img'];
	
?>	
    <a href="index.php?page=home"><div id="back" class="back" ><i class="fa fa-chevron-left"></i> BACK</div></a>

	<div class="all-area">
		<div class="all">
		   <div class="categoryIcon">
				<img src="assets/images/main_categories/<?php echo $main_cat_img; ?>" />
		   </div>
		   <div class="categoryName">
			   <div><?php echo $main_cat_name; ?></div>
			   <a href='index.php?page=listing&mc=<?php echo $_GET['mc']; ?>' >Select whole category&nbsp;<i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
	</div>

    <h4 class="caption">SELECT SUBCATEGORY</h4>
	<br />
<?php 
	$SelectSubCats = mysqli_query($con, "SELECT * FROM sub_categories WHERE main_cat_id='".$_GET['mc']."'");
	while($row=mysqli_fetch_assoc($SelectSubCats)){
	$totalAds = mysqli_num_rows(mysqli_query($con, "SELECT * FROM post_ad WHERE sub_cat_id='".$row['id']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  "));
?>
			<div class="categoryGrid">
			
				<a href="index.php?page=listing&sc=<?php echo $row['id']; ?>" class="categoryArea" >
					<div class="categoryIcon"><img src="assets/images/sub_categories/<?php echo $row['img']; ?>" /></div>
					<p class="categoryName"><?php echo $row['name']; ?> 
						(<?php echo $totalAds; ?>)
					</p>
				</a>
			</div>
<?php }} ?>
       
		</div>
	</div>

<style type="text/css">
.listing-grid .listing-card {
	width: calc(25% - 16px);
}
</style>
<div class="latest_ads">
	<h4>LATEST ADS</h4>

		<div class="clear"></div>
		<ul class="listing-card-list listing-grid" id="listing-card-list">
<?php 


$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE expiry_date > '$crntDate' AND status='Unblocked' ORDER BY 1 DESC LIMIT 8 ");

while($listRow=mysqli_fetch_assoc($getPostAds)){
			

		
		$getMainCats = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$listRow['main_cat_id']."'"));
		$mainCatId	 = $getMainCats['id'];
		$mainCatName = $getMainCats['name'];	

		$getSubCats	 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM sub_categories WHERE id='".$listRow['sub_cat_id']."'"));
		$SubCatId	 = $getSubCats['id'];
		$SubCatName	 = $getSubCats['name'];
	
$CityName = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM cities WHERE id='".$listRow['city']."'"));

?>
    <li class="listing-card first">
        <div class="image-area">
		            <div class="photo-count-flag"> <i class="fa fa-camera"></i></div>
            <a class="listing-thumb" href="index.php?page=detail&ID=<?php echo $listRow['id'];?>" title=""><img src="assets/images/posts/<?php echo  $listRow['img1']; ?>" /></a>
            </div>
        <div class="listing-detail">
        <div class="listing-cell">
            <div class="listing-data">
                <div class="listing-basicinfo">
                    <a href="index.php?page=detail&ID=<?php echo $listRow['id'];?>" class="title"><?php echo $listRow['title'];?></a>
				
                   
                	<div class="listing-attributes">
								<span class="category"><i class="fa fa-th-large fa-fw"></i><?php echo $mainCatName.', '.$SubCatName; ?></span>
								<span class="location"><i class="fa fa-map-marker fa-fw"></i><?php echo $CityName['city_name']; ?></span>
								<span class="date"><i class="fa fa-clock-o fa-fw"></i><?php echo date('d F, Y', strtotime($listRow['published_date']));?></span>
							</div>                     
                </div>
                            </div>
			<div class="clear"></div>
        </div>
    </div>

	</li>
<?php }  ?>	
	
	
	
	</ul>		
		<div class="clear"></div>
		<p class="see_more_link"><a href="index.php?page=listing&categories=all">
			<strong>See all ads <i class="fa fa-arrow-circle-right"></i></strong></a>
		</p>
	</div>
	
</div><!-- main -->
<div id="sidebar" class='pull-right'>

   		<br/><br/>
	<div class="popular-locations-wgt">
		
		<img src="https://i0.wp.com/ifm923.com/wp-content/uploads/2016/02/PLACE-YOUR-ADVERT-HERE.gif?w=620" width="100%"  />		
	</div>
	<!---div class="popular-locations-wgt" id="dam_return">
		<h3>POPULAR CITIES</h3>
		<ul>
		<?php 
		$GetPopularQuerySideBar = mysqli_query($con,"SELECT * FROM cities WHERE popular='1' ORDER BY city_name ");
		while($row=mysqli_fetch_assoc($GetPopularQuerySideBar)){
		?>
			<li><a href="index.php?page=listing&city=<?php echo $row['city_name']; ?>" style="cursor: pointer;" ><?php echo $row['city_name']; ?></a></li>
		<?php } ?>	
		</ul>
	</div--->
</div>



<br/><br/>


</div>

