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
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>Edit Ad</span></li>
		</ul>
    </div>
</div>
<br>

<div class="wrapper" id="content">

<?php 
if(isset($_GET['AdID'])){
	$getActiveAds = mysqli_query($con,"SELECT * FROM post_ad WHERE id='".$_GET['AdID']."' ");
	while($row=mysqli_fetch_assoc($getActiveAds)){
		
		$get_full_name		= $row['full_name'];
		$get_phone			= $row['phone'];
		$get_city_area		= $row['city_area'];
		$get_address		= $row['address'];
		if($row['show_email']==1){
			$show_email_checked	= 'checked';	
		}else{
			$show_email_checked	= '';
		}
		$getProvince 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM province WHERE id='".$row['province']."'"));
		$provinceID		= $getProvince['id'];
		$province 		= $getProvince['province_name'];

		$cityname 	= mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM cities WHERE id='".$row['city']."'"));
		$cityID		= $cityname['id'];
		$city 		= $cityname['city_name'];
		
		$getMainCats = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM main_categories WHERE id='".$row['main_cat_id']."'"));
	 	$mainCatId	 = $getMainCats['id'];
		$mainCatName = $getMainCats['name'];
		
		$getSubCats	 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM sub_categories WHERE id='".$row['sub_cat_id']."'"));
		$SubCatId	 = $getSubCats['id'];
		$SubCatName	 = $getSubCats['name'];
		
		$getBrandCats	= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM brand_others WHERE id='".$row['brand_cat']."'"));
		$BrandCatID		= $getBrandCats['id'];
		$BrandCatName	= $getBrandCats['name'];
		
		$getUser 	= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE email='".$row['email']."'"));
		$p_img		= $getUser['img'];
		$p_gender	= $getUser['gender'];
		$p_username	= $getUser['username'];

if(isset($_POST['save_ad'])){

	$title			= $_POST['title'];
	
	if($_POST['brand_cat']){
		$brand_cat		= $_POST['brand_cat'];
	}else{
		$brand_cat		= $row['brand_cat'];
	}	
	if($_POST['price']){
		$price		= $_POST['price'];
	}else{
		$price		= $row['price'];
	}
	if($_POST['year']){
		$year		= $_POST['year'];
	}else{
		$year		= $row['year'];
	}
	if($_POST['registered']){
		$registered		= $_POST['registered'];
	}else{
		$registered		= $row['registered'];
	}
	if($_POST['fuel']){
		$fuel		= $_POST['fuel'];
	}else{
		$fuel		= $row['fuel'];
	}	
	if($_POST['km']){
		$km		= $_POST['km'];
	}else{
		$km		= $row['km'];
	}	
	if($_POST['veh_condition']){
		$veh_condition		= $_POST['veh_condition'];
	}else{
		$veh_condition		= $row['veh_condition'];
	}	
	if($_POST['furnished']){
		$furnished		= $_POST['furnished'];
	}else{
		$furnished		= $row['furnished'];
	}
	if($_POST['bedrooms']){
		$bedrooms		= $_POST['bedrooms'];
	}else{
		$bedrooms		= $row['bedrooms'];
	}
	if($_POST['bathrooms']){
		$bathrooms		= $_POST['bathrooms'];
	}else{
		$bathrooms		= $row['bathrooms'];
	}	
	if($_POST['floor_level']){
		$floor_level		= $_POST['floor_level'];
	}else{
		$floor_level		= $row['floor_level'];
	}	
	if($_POST['area_unit']){
		$area_unit		= $_POST['area_unit'];
	}else{
		$area_unit		= $row['area_unit'];
	}
	if($_POST['area']){
		$area		= $_POST['area'];
	}else{
		$area		= $row['area'];
	}
	if($_POST['job_type']){
		$job_type		= $_POST['job_type'];
	}else{
		$job_type		= $row['job_type'];
	}	
	if($_POST['4th_cate']){
		$fourth_cate		= $_POST['4th_cate'];
	}else{
		$fourth_cate		= $row['4th_cats'];
	}
	if($_POST['event_date']){
		$event_date		= $_POST['event_date'];
	}else{
		$event_date		= $row['event_date'];
	}	
	if($_POST['website']){
		$website		= $_POST['website'];
	}else{
		$website		= $row['website'];
	}	
	
	$descriptions	= "<pre>".strip_tags($_POST['descriptions'])."</pre>";
	$full_name		= $_POST['full_name'];
	$phone			= $_POST['phone'];
	$show_email		= $_POST['show_email'];
	$province		= $_POST['province'];
	$city			= $_POST['city'];
	$city_area		= $_POST['city_area'];
	$address		= $_POST['address'];
	include "libraries/image.inc.php";
	
	
	$img_temp1 = $_FILES['img1']['tmp_name'];
	$ext1 = pathinfo($_FILES["img1"]["name"], PATHINFO_EXTENSION);
	$rand1 = md5(uniqid().rand());
	$img1 = $rand1.".".$ext1;
		
	if($img_temp1){
		unlink('assets/images/posts/'.$row['img1']);
		move_uploaded_file($img_temp1, "assets/images/posts/".$img1);		
		//create_thumbnail('assets/images/'.$img1, 'assets/images/posts/'.$img1, 800, 580);
		//unlink('assets/images/'.$img1);
	}else{
		$img1 = $row['img1'];
	}
	
	$img_temp2 = $_FILES['img2']['tmp_name'];
	$ext2 = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION);
	$rand2 = md5(uniqid().rand());
	$img2 = $rand2.".".$ext2;
		
	if($img_temp2){
		unlink('assets/images/posts/'.$row['img2']);
		move_uploaded_file($img_temp2, "assets/images/posts/".$img2);		
		//create_thumbnail('assets/images/'.$img2, 'assets/images/posts/'.$img2, 800, 580);
		//unlink('assets/images/'.$img2);
	}else{
		$img2 = $row['img2'];
	}
	
	$img_temp3 = $_FILES['img3']['tmp_name'];
	$ext3 = pathinfo($_FILES["img3"]["name"], PATHINFO_EXTENSION);
	$rand3 = md5(uniqid().rand());
	$img3 = $rand3.".".$ext3;
		
	if($img_temp3){
		unlink('assets/images/posts/'.$row['img3']);
		move_uploaded_file($img_temp3, "assets/images/posts/".$img3);		
		//create_thumbnail('assets/images/'.$img4, 'assets/images/posts/'.$img4, 800, 580);
		//unlink('assets/images/'.$img4);
	}else{
		$img3 = $row['img3'];
	}
	$img_temp4 = $_FILES['img4']['tmp_name'];
	$ext4 = pathinfo($_FILES["img4"]["name"], PATHINFO_EXTENSION);
	$rand4 = md5(uniqid().rand());
	$img4 = $rand4.".".$ext4;
		
	if($img_temp4){
		unlink('assets/images/posts/'.$row['img4']);
		move_uploaded_file($img_temp4, "assets/images/posts/".$img4);		
		//create_thumbnail('assets/images/'.$img4, 'assets/images/posts/'.$img4, 800, 580);
		//unlink('assets/images/'.$img4);
	}else{
		$img4 = $row['img4'];
	}
	$img_temp5 = $_FILES['img5']['tmp_name'];
	$ext5 = pathinfo($_FILES["img5"]["name"], PATHINFO_EXTENSION);
	$rand5 = md5(uniqid().rand());
	$img5 = $rand5.".".$ext5;
		
	if($img_temp5){
		unlink('assets/images/posts/'.$row['img5']);
		move_uploaded_file($img_temp5, "assets/images/posts/".$img5);		
		//create_thumbnail('assets/images/'.$img5, 'assets/images/posts/'.$img5, 800, 580);
		//unlink('assets/images/'.$img5);
	}else{
		$img5 = $row['img5'];
	}
	$img_temp6 = $_FILES['img6']['tmp_name'];
	$ext6 = pathinfo($_FILES["img6"]["name"], PATHINFO_EXTENSION);
	$rand6 = md5(uniqid().rand());
	$img6 = $rand6.".".$ext6;
		
	if($img_temp6){
		unlink('assets/images/posts/'.$row['img6']);
		move_uploaded_file($img_temp6, "assets/images/posts/".$img6);		
		//create_thumbnail('assets/images/'.$img6, 'assets/images/posts/'.$img6, 800, 580);
		//unlink('assets/images/'.$img6);
	}else{
		$img6 = $row['img6'];
	}
	$img_temp7 = $_FILES['img7']['tmp_name'];
	$ext7 = pathinfo($_FILES["img7"]["name"], PATHINFO_EXTENSION);
	$rand7 = md5(uniqid().rand());
	$img7 = $rand7.".".$ext7;
		
	if($img_temp7){
		unlink('assets/images/posts/'.$row['img7']);
		move_uploaded_file($img_temp7, "assets/images/posts/".$img7);		
		//create_thumbnail('assets/images/'.$img7, 'assets/images/posts/'.$img7, 800, 580);
		//unlink('assets/images/'.$img7);
	}else{
		$img7 = $row['img7'];
	}

	$img_temp8 = $_FILES['img8']['tmp_name'];
	$ext8 = pathinfo($_FILES["img8"]["name"], PATHINFO_EXTENSION);
	$rand8 = md5(uniqid().rand());
	$img8 = $rand8.".".$ext8;
		
	if($img_temp8){
		unlink('assets/images/posts/'.$row['img8']);
		move_uploaded_file($img_temp8, "assets/images/posts/".$img8);		
		//create_thumbnail('assets/images/'.$img8, 'assets/images/posts/'.$img8, 800, 580);
		//unlink('assets/images/'.$img8);
	}else{
		$img8 = $row['img8'];
	}
	$img_temp9 = $_FILES['img9']['tmp_name'];
	$ext9 = pathinfo($_FILES["img9"]["name"], PATHINFO_EXTENSION);
	$rand9 = md5(uniqid().rand());
	$img9 = $rand9.".".$ext9;
		
	if($img_temp9){
		unlink('assets/images/posts/'.$row['img9']);
		move_uploaded_file($img_temp9, "assets/images/posts/".$img9);		
		//create_thumbnail('assets/images/'.$img9, 'assets/images/posts/'.$img9, 800, 580);
		//unlink('assets/images/'.$img9);
	}else{
		$img9 = $row['img9'];
	}
	$img_temp10 = $_FILES['img10']['tmp_name'];
	$ext10 = pathinfo($_FILES["img10"]["name"], PATHINFO_EXTENSION);
	$rand10 = md5(uniqid().rand());
	$img10 = $rand10.".".$ext10;
		
	if($img_temp10){
		unlink('assets/images/posts/'.$row['img10']);
		move_uploaded_file($img_temp10, "assets/images/posts/".$img10);		
		//create_thumbnail('assets/images/'.$img10, 'assets/images/posts/'.$img10, 800, 580);
		//unlink('assets/images/'.$img10);
	}else{
		$img10 = $row['img10'];
	}

	$img_temp11 = $_FILES['img11']['tmp_name'];
	$ext11 = pathinfo($_FILES["img11"]["name"], PATHINFO_EXTENSION);
	$rand11 = md5(uniqid().rand());
	$img11 = $rand11.".".$ext11;
		
	if($img_temp11){
		unlink('assets/images/posts/'.$row['img11']);
		move_uploaded_file($img_temp11, "assets/images/posts/".$img11);		
		//create_thumbnail('assets/images/'.$img11, 'assets/images/posts/'.$img11, 800, 580);
		//unlink('assets/images/'.$img11);
	}else{
		$img11 = $row['img11'];
	}
	$img_temp12 = $_FILES['img12']['tmp_name'];
	$ext12 = pathinfo($_FILES["img12"]["name"], PATHINFO_EXTENSION);
	$rand12 = md5(uniqid().rand());
	$img12 = $rand12.".".$ext12;
		
	if($img_temp12){
		unlink('assets/images/posts/'.$row['img12']);
		move_uploaded_file($img_temp12, "assets/images/posts/".$img12);		
		//create_thumbnail('assets/images/'.$img12, 'assets/images/posts/'.$img12, 800, 580);
		//unlink('assets/images/'.$img12);
	}else{
		$img12 = $row['img12'];
	}
	
$UpdatePostAd = mysqli_query($con, "UPDATE post_ad SET 
	
	title			='$title',
	brand_cat		='$brand_cat',
	price			='$price',
	year			='$year',
	registered		='$registered',
	fuel			='$fuel',
	km				='$km',
	veh_condition	='$veh_condition',
	furnished		='$furnished',
	bedrooms		='$bedrooms',
	bathrooms		='$bathrooms',
	floor_level		='$floor_level',
	area_unit		='$area_unit',
	area			='$area',
	job_type		='$job_type',
	event_date		='$event_date',
	website			='$website',
	4th_cats		='$fourth_cate',
	descriptions	='$descriptions',
	img1			='$img1',
	img2			='$img2',
	img3			='$img3',
	img4			='$img4',
	img5			='$img5',
	img6			='$img6',
	img7			='$img7',
	img8			='$img8',
	img9			='$img9',
	img10			='$img10',
	img11			='$img11',
	img12			='$img12',
	full_name		='$full_name',
	phone			='$phone',
	show_email		='$show_email',
	province		='$province',
	city			='$city',
	city_area		='$city_area',
	address			='$address'
	
	WHERE id='".$_GET['AdID']."'
	
");

	if($UpdatePostAd){
		echo "<script>window.location.href='index.php?page=ads&active'</script>";
	}

}
?>
    <div class="form-container form-horizontal">
       <form method="post" enctype="multipart/form-data" id="item-post">
			   <fieldset>
					<div class="box-typ-1 general-information">
						<h2>General information</h2><br/>	
						
						<div class="control-group">
							<label class="control-label">Ad Title <span class='text-danger'>*</span> </label>
							<div class="controls">
								<input type="text" name="title" value="<?= $row['title']; ?>" required  />                            
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Category</label>
							<div class="controls">
							<p style="margin-top: 0px;" class='text-success'><b><?= $mainCatName.' > '.$SubCatName; ?></b> </p>
							<p class='alert alert-warning'> <i class="fa fa-warning"></i> Your Ad has been assigned and accepted in this category. You cannot change this field.</p>
						
							</div>
						</div>
					<?php if($row['brand_cat']>0){?>				
						<div class="control-group">
							<label class="control-label"><?php echo $SubCatName; ?>  <span class='text-danger'>*</span></label>
							<div class="controls">
							<select  name="brand_cat" onchange="showHint3(this.value)" required>
								<option value="<?= $BrandCatID; ?>"><?= $BrandCatName; ?></option>
								<?php
									$SelectBrandCat = mysqli_query($con, "SELECT * FROM brand_others WHERE sub_cat_id='$SubCatId' ");
									   while($row2=mysqli_fetch_assoc($SelectBrandCat)){
								
								?>
								<option value="<?= $row2['id']; ?>"><?= $row2['name']; ?></option>
								<?php } ?>
							</select>
							</div>
						</div>
<script>
function showHint3(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint3").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint3").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "php_ajax/get_4thcats.php?brand_cat_id="+str, true);
        xmlhttp.send();
    }
}
</script>			
			<?php } if($row['4th_cats']){?>	
				<span id="txtHint3">
					<div class="control-group">
						<label class="control-label" for="region"><?php echo $BrandCatName; ?><span class='text-danger'>*</span></label>
						<div class="controls">
							<select name='4th_cate'  >
								<option value="<?= $row['4th_cats']; ?>"><?= $row['4th_cats']; ?></option>
							</select>
						</div>
					</div>
				</span>
 <?php } if($mainCatId==14 AND $SubCatId!=110){  ?>
 
 <?php if($SubCatId==114){  ?>
                        <div class="control-group">
                            <label class="control-label">Event Date <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="date" name="event_date" value="<?php echo $row['event_date']; ?>" required />                         
							</div>
                        </div>
 <?php } ?> 

                        <div class="control-group">
                            <label class="control-label">Website (URL)  <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="url" name="website"  value="<?php echo $row['website']; ?>" required />                         
							</div>
                        </div>
					<?php } if($row['price']){?>
						<div class="control-group">
							<label class="control-label">Price  <span class='text-danger'>*</span></label>
							<div class="controls">
								<input type="number" min='0' name="price" value="<?php echo $row['price']; ?>" required />                         
							</div>
						</div>
					<?php } if($SubCatId==14){ ?>
                        <div class="control-group">
                            <label class="control-label">Year <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1900" name="year"  value="<?= $row['year']; ?>"required />                         
							</div>
                        </div>
                        <div class="control-group">	
                            <label class="control-label">Registered in<span class='text-danger'>*</span></label>
                            <div class="controls">
								<select name="registered"  required  >
									<option value="<?= $row['registered']; ?>"><?= $row['registered']; ?></option>
									<?php
										$SelectCity = mysqli_query($con, "SELECT * FROM cities WHERE city_name!='".$row['registered']."' ORDER BY city_name ");
										   while($CityRow=mysqli_fetch_assoc($SelectCity)){
									?>
									<option value="<?= $CityRow['city_name']; ?>"><?= $CityRow['city_name']; ?></option>
									<?php } ?>
								</select>
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Fuel <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="fuel" required >                         
									<option value="<?= $row['fuel']; ?>"><?= $row['fuel']; ?></option>
									<option value="Petrol">Petrol</option>
									<option value="Diesel">Diesel</option>
									<option value="LPG">LPG</option>
									<option value="CNG">CNG</option>
									<option value="Hybrid">Hybrid</option>
								</select>                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">KM's Driven <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="text"  name="km"  value="<?= $row['km']; ?>"required />                         
							</div>
                        </div>
					<?php } if($SubCatId==15){ ?>
			
						<div class="control-group">
                            <label class="control-label">Year <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1900" name="year" value="<?= $row['year']; ?>" required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">KM's Driven <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="text"  name="km"  value="<?= $row['km']; ?>"required />                         
							</div>
						</div>
					<?php } if($SubCatId==22){ ?>	
                        <div class="control-group">
                            <label class="control-label">Year <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1900" name="year" value="<?= $row['year']; ?>"required />                         
							</div>
                        </div>	

					<?php } if($SubCatId==27 OR $SubCatId==30){ ?>	
                        <div class="control-group">
                            <label class="control-label">Furnished <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="furnished" required >
									<option value="<?= $row['furnished']; ?>"><?= $row['furnished']; ?></option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>             
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bedrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bedrooms" value="<?= $row['bedrooms']; ?>" required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bathrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bathrooms"  value="<?= $row['bathrooms']; ?>"required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Floor Level <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="floor_level" required >
									<option value="<?= $row['floor_level']; ?>"><?= $row['floor_level']; ?></option>
									<option value="Ground">Ground</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7+">7+</option>
								</select>                     
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Area Unit <span class='text-danger'>*</span></label>
                            <div class="controls">
                                 <select name="area_unit" required >
									<option value="">Select</option>
									<option value="Square Feet">Square Feet</option>
									<option value="Square Yards">Square Yards</option>
									<option value="Square Meter">Square Meter</option>
									<option value="Marla">Marla</option>
									<option value="Kanal">Kanal</option>
								</select>               
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Area <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="text" name="area" value="<?= $row['area']; ?>" required />                         
							</div>
                        </div>			
					<?php } if($SubCatId==28){ ?>	
                        <div class="control-group">
                            <label class="control-label">Furnished <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="furnished" required >
									<option value="<?= $row['furnished']; ?>"><?= $row['furnished']; ?></option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>             
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bedrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bedrooms"  value="<?= $row['bedrooms']; ?>"required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bathrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bathrooms"  value="<?= $row['bathrooms']; ?>"required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Area Unit <span class='text-danger'>*</span></label>
                            <div class="controls">
                                 <select name="area_unit" required >
									<option value="<?= $row['area_unit']; ?>"><?= $row['area_unit']; ?></option>
									<option value="Square Feet">Square Feet</option>
									<option value="Square Yards">Square Yards</option>
									<option value="Square Meter">Square Meter</option>
									<option value="Marla">Marla</option>
									<option value="Kanal">Kanal</option>
								</select>               
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Area <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="text" name="area" value="<?= $row['area']; ?>" required />                         
							</div>
                        </div>			
					<?php } if($SubCatId==29 OR $SubCatId==31){ ?>	
                        <div class="control-group">
                            <label class="control-label">Area Unit <span class='text-danger'>*</span></label>
                            <div class="controls">
                                 <select name="area_unit" required >
									<option value="<?= $row['area_unit']; ?>"><?= $row['area_unit']; ?></option>
									<option value="Square Feet">Square Feet</option>
									<option value="Square Yards">Square Yards</option>
									<option value="Square Meter">Square Meter</option>
									<option value="Marla">Marla</option>
									<option value="Kanal">Kanal</option>
								</select>               
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Area <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="text" name="area"  value="<?= $row['area']; ?>"required />                         
							</div>
                        </div>			
					<?php } if($row['job_type']){

							if($row['job_type']=='Offering Job'){
									$checked_offering = 'checked';
							}else{
									$checked_Seeking = 'checked';
							}
					?>
						<div class="control-group">
							<label class="control-label">Type of Job <span class='text-danger'>*</span></label>
							<div class="controls">
								<input type="radio" name="job_type" value="Offering Job" <?php echo $checked_offering; ?> /> Offering Job 
								<input type="radio" name="job_type" value="Seeking Job"  <?php echo $checked_Seeking; ?> /> Seeking Job        
												
							</div>
						</div>
					<?php } if($mainCatId==3 OR $mainCatId['main_cat_id']==4){  ?>	
						<div class="control-group">
							<label class="control-label">Condition <span class='text-danger'>*</span></label>
							<div class="controls">
							<select  name="veh_condition" required >
								<option value="<?= $row['veh_condition']; ?>"><?= $row['veh_condition']; ?></option>
								<option value="New">New</option>
								<option value="Used">Used</option>
							</select>
							</div>
						</div>
					
					<?php } ?>	
					
					
					
                        <div class="control-group">
                            <label class="control-label" >Description <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <textarea id="descriptionen_US" class='editor0'  rows="5" name="descriptions"  style='width:100%;'><?= $row['descriptions']; ?></textarea>   
	
							</div>
                        </div>
                    </div>
                    <div class="box-typ-1 pictures">

<h2>Upload Photos <small>(1st photo  will be your main photo. ) </small></h2>
<small class='text-danger'>1st Photo Required & all images size should be (<b>800 x 580px</b>) </small>	<br /><br />	
<div class="row">
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img1" id="imageUpload1" class="hide" /> 
		<label for="imageUpload1" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px"  >
			<?php if($row['img1']){ ?>
			<img src="assets/images/posts/<?php echo $row['img1']; ?>" id="imagePreview1" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>
			<img src="assets/images/icon/plus.png" id="imagePreview1" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img2" id="imageUpload2" class="hide" /> 
		<label for="imageUpload2" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img2']){ ?>
			<img src="assets/images/posts/<?php echo $row['img2']; ?>" id="imagePreview2" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>
			<img src="assets/images/icon/plus.png" id="imagePreview2" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img3" id="imageUpload3" class="hide" /> 
		<label for="imageUpload3" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img3']){ ?>
			<img src="assets/images/posts/<?php echo $row['img3']; ?>" id="imagePreview3" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>
			<img src="assets/images/icon/plus.png" id="imagePreview3" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img4" id="imageUpload4" class="hide" /> 
		<label for="imageUpload4" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img4']){ ?>
			<img src="assets/images/posts/<?php echo $row['img4']; ?>" id="imagePreview4" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>
			<img src="assets/images/icon/plus.png" id="imagePreview4" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img5" id="imageUpload5" class="hide" /> 
		<label for="imageUpload5" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img5']){ ?>
			<img src="assets/images/posts/<?php echo $row['img5']; ?>" id="imagePreview5" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>
			<img src="assets/images/icon/plus.png" id="imagePreview5" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img6" id="imageUpload6" class="hide" /> 
		<label for="imageUpload6" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img6']){ ?>
			<img src="assets/images/posts/<?php echo $row['img6']; ?>" id="imagePreview6" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>		
			<img src="assets/images/icon/plus.png" id="imagePreview6" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img7" id="imageUpload7" class="hide" /> 
		<label for="imageUpload7" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img7']){ ?>
			<img src="assets/images/posts/<?php echo $row['img7']; ?>" id="imagePreview7" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>		
			<img src="assets/images/icon/plus.png" id="imagePreview7" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img8" id="imageUpload8" class="hide" /> 
		<label for="imageUpload8" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img8']){ ?>
			<img src="assets/images/posts/<?php echo $row['img8']; ?>" id="imagePreview8" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>		
			<img src="assets/images/icon/plus.png" id="imagePreview8" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img9" id="imageUpload9" class="hide" /> 
		<label for="imageUpload9" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img9']){ ?>
			<img src="assets/images/posts/<?php echo $row['img9']; ?>" id="imagePreview9" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>		
			<img src="assets/images/icon/plus.png" id="imagePreview9" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img10" id="imageUpload10" class="hide" /> 
		<label for="imageUpload10" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img10']){ ?>
			<img src="assets/images/posts/<?php echo $row['img10']; ?>" id="imagePreview10" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>		
			<img src="assets/images/icon/plus.png" id="imagePreview10" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img11" id="imageUpload11" class="hide" /> 
		<label for="imageUpload11" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img11']){ ?>
			<img src="assets/images/posts/<?php echo $row['img11']; ?>" id="imagePreview11" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>		
			<img src="assets/images/icon/plus.png" id="imagePreview11" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-6 form-group">
		<input type="file" name="img12" id="imageUpload12" class="hide" /> 
		<label for="imageUpload12" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<?php if($row['img12']){ ?>
			<img src="assets/images/posts/<?php echo $row['img12']; ?>" id="imagePreview12" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php }else{ ?>		
			<img src="assets/images/icon/plus.png" id="imagePreview12" alt="Preview Image" style="width: 80px; height: 80px; " />
			<?php } ?>
		</label>
	</div>
</div>				

	
<script type="text/javascript">
$('#imageUpload1').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview1').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload2').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview2').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload3').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview3').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload4').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview4').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload5').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview5').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload6').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview6').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload7').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview7').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload8').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview8').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload9').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview9').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload10').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview10').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload11').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview11').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
$('#imageUpload12').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#imagePreview12').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
	});
	
</script>	

                    </div>
					<div class="box-typ-1 location">
                        <h2>Location</h2>
						<br/>
                        
						<div class="control-group">
						 <label class="control-label" for="region">Region <span class='text-danger'>*</span></label>
							<div class="controls">
								<select name="province" onchange="showHint4(this.value)" required  >
									<option value="<?= $provinceID; ?>"><?= $province; ?></option>
									<?php
										$SelectProvince = mysqli_query($con, "SELECT * FROM province  ");
										   while($row=mysqli_fetch_assoc($SelectProvince)){
									?>
									<option value="<?= $row['id']; ?>"><?= $row['province_name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
<script>
function showHint4(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint4").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint4").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "php_ajax/get_city.php?province_id="+str, true);
        xmlhttp.send();
    }
}
</script>				<span id="txtHint4">
							<div class="control-group">
								<label class="control-label" for="region">City <span class='text-danger'>*</span></label>
								<div class="controls">
									<select name='city' required >
										<option value="<?= $cityID; ?>"><?= $city; ?></option>
									</select>
								</div>
							</div>
						</span>
						
                        <div class="control-group">
                            <label class="control-label" for="cityArea">City Area <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input id="cityArea" type="text" name="city_area" value="<?php echo $get_city_area; ?>" required />
	                         </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">
                              <input id="address" type="text" name="address"  value="<?php echo $get_address; ?>" />                            
							</div>
                        </div>
                    </div>
                    <!-- seller info -->
                    <div class="box-typ-1 contact-info">
                        <h2>Contact information</h2>
						<br/>
                        <div class="control-group">
                            <label class="control-label" for="userName">Name  <span class='text-danger'>*</span></label>
                            <div class="controls">
								<input type="text" name='full_name' value="<?php echo $get_full_name; ?>" required />
                            </div>
                        </div>
						<div class="control-group">
							<label class="control-label" for="phone">Cell Phone <span class='text-danger'></span></label>
							<div class="controls">
								<input type="text" name="phone" value="<?php echo $get_phone; ?>"  />
							</div>
						</div>
						<?php if($pro_password){ ?>
                        <div class="control-group">
                            <label class="control-label" for="userEmail">E-mail  <span class='text-danger'>*</span></label>
                            <div class="controls">
								<input type="text" name='email' value="<?php echo $pro_email; ?>" readonly />
								<div class="small-info">Your email address is private</div>
                            </div>
                        </div>
					
                        <div class="control-group">
                            <div class="controls checkbox">
                                <input id="showEmail" type="checkbox" name="show_email" value="1" <?php echo $show_email_checked; ?> style="margin-top: 10px !important;" />  Show my e-mail on the ad</label>
                            </div>
                        </div>
							<?php }else{ ?>
							<input type="hidden" name='email' value="<?php echo $pro_email; ?>" />
							<input type="hidden" name="show_email" value="0" style="margin-top: 10px !important;" /> 
                        
						<?php } ?>

					
					</div>
					<div class="box-typ-1">
						<div class="control-group">
							<center>
								<div id="loading0"></div>
								<button type="submit" name='save_ad' class="btn btn-success"><i class='fa fa-save '></i> Save & Update Ad</button>
							</center>
						</div>
					</div>
                </fieldset>
            </form>
		<script type="text/javascript">
			$('.ui-button').click(function () {
					// add loading image to div
				$('#loading').html('<img src="http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif" width="30"> Wait Please <br/> <br/>');
			});
				
		</script> 			
        </div>
		<br/><br/>
<?php }} ?>


</div>


