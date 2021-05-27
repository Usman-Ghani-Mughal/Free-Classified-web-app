<?php 
if(isset($_GET['ID'])){
	$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM post_ad WHERE id='".$_GET['ID']."'  AND expiry_date > '$crntDate' AND status='Unblocked' "));
	
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
		
		$getBrandCats	 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM brand_others WHERE id='".$row['brand_cat']."'"));
		$BrandCatId	 		= $getBrandCats['id'];
		$BrandCatName	 = $getBrandCats['name'];
		
		$getUser 	= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE email='".$row['email']."'"));
		$p_img		= $getUser['img'];
		$p_gender	= $getUser['gender'];
		$p_id		= $getUser['id'];
		$p_username	= $getUser['username'];
}
if(isset($_GET['check'])){
		if(isset($_POST['submit'])){
		 $pic_name = $_FILES['cat_pic']['name']; 
	
	
	$pic_name_temp	= $_FILES['cat_pic']['tmp_name'];
	move_uploaded_file($pic_name_temp ,"pages/".$pic_name);
		}
	?>
	<form method="post" enctype="multipart/form-data">
    <input type="file" name="cat_pic">
	<input type="submit" name="submit" value="submit">
	</form>
	<?php 
	
	}
?>	
	</div>
</div>
<div class="wrapper wrapper-flash">
	<div class="breadcrumb">
        <div class="home-icon"><i class="fa fa-home"></i></div>
            <ul class="breadcrumb">
				<li class="first-child" ><a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a></li>
				<li><i class="fa fa-angle-right"></i> <a href="index.php?page=home&mc=<?php echo $mainCatId; ?>" ><span itemprop="title"><?php echo $mainCatName; ?></span></a></li>
				<li><i class="fa fa-angle-right"></i> <a href="index.php?page=listing&sc=<?php echo $SubCatId; ?>" ><span itemprop="title"><?php echo $SubCatName; ?></span></a></li>
				<li class="last-child"><i class="fa fa-angle-right"></i> <span itemprop="title"><?php echo $row['title']; ?></span></li>
			</ul>
    </div>
</div>
<br>

<div class="wrapper" id="content">
    
<div id="main">
   <div id="item-content">
	<div class="block-01 as-content-box">
		<h3><?php echo $row['title']; ?></h3>
		<div class="item-header">
			<div class="item-location-cell">
				<i class="fa fa-map-marker thm-clr2-txt"></i>&nbsp; <?php echo $province; ?>, <?php echo $city; ?>				
			
			</div>
			<div class="price thm-clr2-txt"><?php if($row['price']){ echo "PKR ". number_format($row['price'],2); }?>      </div> 


			
			<div class="clear"></div>
		</div>
		<div class="item-photo-gallery-area">

<script type="text/javascript">
    var DealMarkaz = window.DealMarkaz || {};
    DealMarkaz.base_url = 'http://assabuur.com/index.php?page=home';
	DealMarkaz.base_url_with_index_false = 'http://assabuur.com/';
    DealMarkaz.langs = {"delete":"Delete","cancel":"Cancel"};
    DealMarkaz.fancybox_prev = 'Previous image';
    DealMarkaz.fancybox_next = 'Next image';
    DealMarkaz.fancybox_closeBtn = 'Close';
</script>
<link 	type="text/css" href="slider/fotorama.css" rel="stylesheet" />
<script type="text/javascript" src="slider/jquery.min.js"></script>
<script type="text/javascript" src="slider/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="slider/global.min.js?v=1.0.33"></script>
<script type="text/javascript" src="slider/fotorama.js"></script>		
<div id="item-content">
	<div class="block-01 as-content-box">
		<div class="item-photo-gallery-area">
			<div class="item-photo-gallery">
			<?php if($row['img1']){ ?>
				<a href="assets/images/posts/<?php echo $row['img1']; ?>"><img src="assets/images/posts/<?php echo $row['img1']; ?>"></a>
			<?php }if($row['img2']){ ?>	
				<a href="assets/images/posts/<?php echo $row['img2']; ?>"><img src="assets/images/posts/<?php echo $row['img2']; ?>"></a>
			<?php }if($row['img3']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img3']; ?>"><img src="assets/images/posts/<?php echo $row['img3']; ?>"></a>
			<?php }if($row['img4']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img4']; ?>"><img src="assets/images/posts/<?php echo $row['img4']; ?>"></a>
			<?php }if($row['img5']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img5']; ?>"><img src="assets/images/posts/<?php echo $row['img5']; ?>"></a>
			<?php }if($row['img6']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img6']; ?>"><img src="assets/images/posts/<?php echo $row['img6']; ?>"></a>
			<?php }if($row['img7']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img7']; ?>"><img src="assets/images/posts/<?php echo $row['img7']; ?>"></a>
			<?php }if($row['img8']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img8']; ?>"><img src="assets/images/posts/<?php echo $row['img8']; ?>"></a>
			<?php }if($row['img9']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img9']; ?>"><img src="assets/images/posts/<?php echo $row['img9']; ?>"></a>
			<?php }if($row['img10']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img10']; ?>"><img src="assets/images/posts/<?php echo $row['img10']; ?>"></a>
			<?php }if($row['img11']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img11']; ?>"><img src="assets/images/posts/<?php echo $row['img11']; ?>"></a>
			<?php }if($row['img12']){ ?>		
				<a href="assets/images/posts/<?php echo $row['img12']; ?>"><img src="assets/images/posts/<?php echo $row['img12']; ?>"></a>
			<?php } ?>	
			</div>
		</div>
	</div>
</div>
		



		
		

		
	

	
	<script type="text/javascript">
function show(){
	document.getElementById('div1').style.display ='block';
	document.getElementById('div2').style.display ='none';
}

</script>	
		
	
	
<!----		
		
		
<div class="w3-content w3-display-container">
<?php if($row['img1']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img1']; ?>" style="width:100%">
<?php }if($row['img2']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img2']; ?>" style="width:100%">
<?php }if($row['img3']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img3']; ?>" style="width:100%">
<?php }if($row['img4']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img4']; ?>" style="width:100%">
<?php }if($row['img5']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img5']; ?>" style="width:100%">
<?php }if($row['img6']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img6']; ?>" style="width:100%">
<?php }if($row['img7']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img7']; ?>" style="width:100%">
<?php }if($row['img8']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img8']; ?>" style="width:100%">
<?php }if($row['img9']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img9']; ?>" style="width:100%">
<?php }if($row['img10']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img10']; ?>" style="width:100%">
<?php }if($row['img11']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img11']; ?>" style="width:100%">
<?php }if($row['img12']){ ?>
	<img class="mySlides" src="assets/images/posts/<?php echo $row['img12']; ?>" style="width:100%">
<?php } ?>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
------------------------>
		</div>
	
	</div>

<style type="text/css">
pre{
	width:100%;
	background:none;
	border:none;
	display: flex;
	white-space: pre;
	word-break: break-word;
}
</style>	
	<div id="description" class="as-content-box">
		<h4>DESCRIPTION</h4><hr>
	
	
	<?php echo $row['descriptions']; ?>	

	<table class='table table-striped table-bordered'>
		<?php if($row['year']){ ?>
			<tr>
				<td>Year </td>
				<td><?php echo $row['year']; ?></td>
			</tr> 
		<?php }if($row['registered']){ ?>
			<tr>
				<td>Registered In </td>
				<td><?php echo $row['registered']; ?></td>
			</tr> 
		<?php }if($row['km']){ ?>
			<tr>
				<td>KM's Driven </td>
				<td><?php echo $row['km']; ?></td>
			</tr> 
		<?php }if($row['veh_condition']){ ?>
			<tr>
				<td>Condition </td>
				<td><?php echo $row['veh_condition']; ?></td>
			</tr> 
		<?php }if($row['furnished']){ ?>
			<tr>
				<td>Furnished </td>
				<td><?php echo $row['furnished']; ?></td>
			</tr> 
		<?php }if($row['bedrooms']){ ?>
			<tr>
				<td>Bedrooms </td>
				<td><?php echo $row['bedrooms']; ?></td>
			</tr> 
		<?php }if($row['bathrooms']){ ?>
			<tr>
				<td>Bathrooms </td>
				<td><?php echo $row['bathrooms']; ?></td>
			</tr> 
		<?php }if($row['floor_level']){ ?>
			<tr>
				<td>Floor Level</td>
				<td><?php echo $row['floor_level']; ?></td>
			</tr> 
		<?php }if($row['area_unit']){ ?>
			<tr>
				<td>Unit Area</td>
				<td><?php echo $row['area_unit']; ?></td>
			</tr> 
		<?php }if($row['area']){ ?>
			<tr>
				<td>Area</td>
				<td><?php echo $row['area']; ?></td>
			</tr> 
		<?php }if($row['job_type']){ ?>
			<tr>
				<td>Type of Job</td>
				<td><?php echo $row['job_type']; ?></td>
			</tr> 
		<?php }if($row['event_date']!='0000-00-00'){ ?>
			<tr>
				<td>Event Date</td>
				<td><?php echo $row['event_date']; ?></td>
			</tr> 
		<?php }if($row['website']){ ?>
			<tr>
				<td>Website</td>
				<td><?php echo $row['website']; ?></td>
			</tr> 
		<?php } ?>
		<tr>
			<td>Address </td>
			<td><?php echo $row['address'].', '.$row['city_area'].', '.$city; ?></td>
		</tr>
	</table>

	</div>
    <div class="ad-category as-content-box">
        <?php echo $mainCatName.', '.$SubCatName; if($BrandCatName){echo ', '.$BrandCatName; }if($row['4th_cats']){echo ', '.$row['4th_cats']; } ?>    
	</div>
    <div class="ad-id as-content-box">
        Ad ID: <?php echo $row['id']; ?>    </div>
		
	<div class="clear"></div>
    <br><br>


	
	
<div class="similar_ads">
		<br>
		<h4>RELATED ADS</h4>
	
<ul class="listing-card-list " id="listing-card-list">
<?php 


$getPostAds = mysqli_query($con,"SELECT * FROM post_ad WHERE sub_cat_id='$SubCatId'  AND expiry_date > '$crntDate' AND status='Unblocked' ORDER BY rand() LIMIT 4 ");

while($listRow=mysqli_fetch_assoc($getPostAds)){
	
$CityName = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM cities WHERE id='".$listRow['city']."'"));

?>

	<li class="listing-card ">
		<div class="image-area">
			<div class="photo-count-flag"> <?php echo $totalImg; ?> <i class="fa fa-camera"></i></div>
			<a class="listing-thumb" href="index.php?page=detail&ID=<?php echo $listRow['id'];?>" title=""><img src="assets/images/posts/<?php echo  $listRow['img1']; ?>" /></a>
		</div>
			<div class="listing-detail">
				<div class="listing-cell">
					<div class="listing-data">
						<div class="listing-basicinfo">
							<a href="index.php?page=detail&ID=<?php echo $listRow['id'];?>" class="title"><?php echo $listRow['title'];?></a>
							<?php echo strip_tags(substr($listRow['descriptions'],0,80));?>
							<div class="listing-attributes"><span class="currency-value"><?php if($listRow['price']){ echo "PKR ". number_format($listRow['price'],2); }?></span></div>
							<div class="listing-attributes">
								<span class="category"><i class="fa fa-th-large fa-fw"></i><?php echo $mainCatName; ?></span>
								<span class="location"><i class="fa fa-map-marker fa-fw"></i><?php echo $CityName['city_name']; ?></span>
								<span class="date"><i class="fa fa-clock-o fa-fw"></i><?php echo date('d F, Y', strtotime($listRow['published_date']));?></span>
							</div>                    
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		<div class="favorite-btn">
				<?php 
				if($listRow['email']!=$pro_email){
					
				if($_SESSION['front_user_email']){ 
				
				$GetWishlist = mysqli_query($con, "SELECT * FROM my_favorites WHERE ad_id='".$listRow['id']."' AND email='$pro_email'");
					$wishRow=mysqli_num_rows($GetWishlist);
					if($wishRow>0){
				?> 
				<form method="post">
					<input type="hidden" name='getID' value='<?php echo $listRow['id']; ?>' />
				   <button type="submit" name="delwish" class="btn btn-danger" > Remove from Favourites </button>
				</form>
				<?php }else{ ?>
				<form method="post">
					<input type="hidden" name='getID' value='<?php echo $listRow['id']; ?>' />
				   <button type="submit" name="addtowish" class="btn btn-primary" >  Add to Favourites  </button>
				</form>
				<?php } ?>
				
				<?php }else{ ?> 
				   <a href="index.php?page=login" class="btn btn-primary" >
				 
				   Add to Favourites
				   </a>
				<?php }} ?>
					
		</div>
	</li>
<?php }  
if(isset($_POST['addtowish'])){
	
	$AddToWishlist = mysqli_query($con, "INSERT INTO my_favorites VALUE ('', '".$_POST['getID']."', '$pro_email' )");
	if($AddToWishlist){
		echo "<script>window.location.href='index.php?page=detail&ID=".$_GET['ID']."'</script>";
	}
								
}
if(isset($_POST['delwish'])){
	$delWishlist = mysqli_query($con, "DELETE FROM my_favorites WHERE ad_id='".$_POST['getID']."' AND email='$pro_email' ");
	if($delWishlist){
		echo "<script>window.location.href='index.php?page=detail&ID=".$_GET['ID']."'</script>";							
	}
}
?>	
</ul>

<div class="clear"></div>
</div>
	</div>
<br /><br />
</div><!-- content -->
<div id="sidebar">
	<div class="item-info-area">
		<div class="item-info">
			<div class="seller-name">
				<div class="cell-1">
					<div class="profile-picture">
					<?php 
					
					if(stripos($p_img, 'http') !== FALSE){
						echo '<img src="'.$p_img.'" />';
					}else{ 
					
					if($p_img){?>
						<img src="assets/images/avatar/<?php echo $p_img; ?>" />
					<?php }else{ 
							if($p_gender=="Male"){
					?>  
						<img src="assets/images/avatar/male.jpg" />
					<?php }else{ ?>
						<img src="assets/images/avatar/female.jpg" />	
					<?php }}} ?> 
						
						
											</div>
					<i class="fa fa-circle"></i>
				</div>
				<div class="cell-2">
					<?php echo $row['full_name']; ?>						
					<p><a href="index.php?page=listing&userid=<?php echo $p_id; ?>" >See all my ads</a></p>
				</div>
			</div>
			<div class="phone">
				<div class="cell-1">Cell Phone&nbsp;<i class="fa fa-phone fa-fw"></i></div>
				<div class="cell-2">
					<div class="phone-number" data-last="065">
					
					<div id="div1" style="display:none;" >
						<?php echo $row['phone']; ?>
					</div>
					<div id="div2">
						<?php echo str_pad(substr($row['phone'], 5), strlen($row['phone']), '*', STR_PAD_RIGHT); ?>  
						
						<a href="#"  onclick="show()">  Reveal</a>
					</div>
		
					
					</div>
				</div>
			</div>
			<?php if($row['show_email']==1){ ?>
			<div class="published">
				<div class="cell-1">Email&nbsp;<i class="fa fa-envelope-o fa-fw"></i></div>
				<div class="cell-2"><?php echo $row['email']; ?></div>
			</div>
			<?php } ?>
			<div class="published">
				<div class="cell-1">Published&nbsp;<i class="fa fa-clock-o fa-fw"></i></div>
				<div class="cell-2"><?php echo date('d F, Y', strtotime($row['published_date']));?></div>
			</div>
		</div>
<?php 
if($row['email']!=$pro_email){	
?>	
		<?php if($_SESSION['front_user_email']){ ?>
		<?php
				$GetWishlist = mysqli_query($con, "SELECT * FROM my_favorites WHERE ad_id='".$_GET['ID']."' AND email='$pro_email'");
					$wishRow=mysqli_num_rows($GetWishlist);
					if($wishRow>0){
				?> 
				<form method="post">
					<input type="hidden" name='getID' value='<?php echo $_GET['ID']; ?>' />
				   	<div class="grid-table">
						<div class="grid-row">
							<div class="grid-col-50">
								<div class="save-ad btn">
									 <button type="submit" name="delwish" class="btn btn-danger" ><i class="fa fa-trash-o fa-lg fa-fw"></i>&nbsp;&nbsp; Remove from Favourites </button>
									
								</div>
							</div>
						</div>
					</div>
				</form>
				<?php }else{ ?>
				<form method="post">
					<input type="hidden" name='getID' value='<?php echo $_GET['ID']; ?>' />
				   	<div class="grid-table">
						<div class="grid-row">
							<div class="grid-col-50">
								<div class="save-ad btn">
									 <button type="submit" name="addtowish" class="btn btn-danger" ><i class="fa fa-heart-o fa-lg fa-fw"></i>&nbsp;&nbsp; Add to Favourites </button>
									
								</div>
							</div>
						</div>
					</div>
				</form>
				<?php } ?>
		

		<div class="grid-table">
			<div class="grid-row">
				<div class="save-ad btn">
					<!---a href="index.php?page=send_message&ID=<?php echo $row['id']; ?>"><i class="fa fa-paper-plane-o fa-lg fa-fw" ></i>&nbsp;&nbsp;Contact advertiser</a--->
					<a href="index.php?page=messages&userid=<?php echo $p_id; ?>&user=<?php echo $p_username; ?>"><i class="fa fa-paper-plane-o fa-lg fa-fw" ></i>&nbsp;&nbsp;Contact advertiser</a>
				</div>
			</div>
		</div>
		<?php }else{ ?>
		<div class="grid-table">
		<center>
			<p>You must log in or register an account in order to contact the advertiser.</p>
			<hr />
			<b>LOGIN</b>
		</center>
<?php 		
if(isset($_POST['login'])){
	
	$email 	= $_POST['email'];
	$password = md5($_POST['password']);
	

$AdminLoginQuery = mysqli_query($con,"SELECT * FROM  users WHERE username='$email' OR email='$email'");
$NumRows = mysqli_num_rows($AdminLoginQuery); 
	if($NumRows!=0){
		while($row=mysqli_fetch_assoc($AdminLoginQuery)){
			$dbusename	= $row['username'];
			$dbemail	= $row['email'];
			$dbpassword	= $row['password'];
			$dbstatus	= $row['status'];
			
			if($dbusename==$email){
				$crnt_email = $dbusename;
				$checkuser  = $dbusename;
			}
			if($dbemail==$email){
				$crnt_email = $dbemail;
				$checkuser  = $dbemail;
			}
		}
		
		if($checkuser==$crnt_email&&$password==$dbpassword){
	
	
		if($dbstatus=="Activated"){
		$_SESSION['front_user_email'] = $dbemail;
		echo "<script>window.location.href='".$url."'</script>";
		}else{
		echo "<p style='color:Red; '><b>Your Account is Inactivate. Please Check your email <em>(".$dbemail.")</em></b></p>";
	
		}
	}
	else{
		echo "<p style='color:Red; '><b>Incorrect Your Password</b></p>";
		
	}	
	}
	else{
		echo "<p style='color:Red; '><b>That User doesn't exist...!</b></p>";
		
	}

}

?>		
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "php_ajax/get_pro_img.php?email="+str, true);
        xmlhttp.send();
    }
}
</script>
			<span id="txtHint"></span>	
		<form method="post">
			<table width='100%'>
				<tr>
					<td>
					Email Or Username <br />
					<input  type="text" name="email"  required onfocusout="showHint(this.value)" style="width:100%; padding:10px;"  /></td>
				</tr>
				<tr>
					<td>
					Password<br />	
					<input type="password" name="password" required style="width:100%; padding:5px;" /></td>
				</tr>
				<tr>
					<td>
					<button type="submit" name='login' class="ui-button ui-button-middle ui-button-main">Log in</button></td>
				</tr>
			</table>
		</form>
			<div class="grid-row">
				<div class="save-ad btn">
					<a href="index.php?page=register"><i class="fa fa-user-plus fa-lg fa-fw" ></i>&nbsp;&nbsp; Register</a>
				</div>
			</div>
		</div>
	<?php }} ?>
	</div>

	
	<div id="useful_info" class="bordered-box">
        <h2 class="red-txt"><i class="fa fa-info-circle fa-lg"></i>&nbsp;&nbsp;Stay Safe</h2>
        <hr>
        <ul>
			<li>Meet face to face, never send payments for items you’ve not seen.</li>
			<li>Meet at a safe location.</li>
			<li>Collect the item and pay at the same time.</li>
			<li>Don’t carry large sums of money with you when meeting up.</li>
			<li>Tell others when/where you’re going to trade.</li>
			<li>Always trade face to face.</li>
	   </ul>
    </div>
	<br><br>

	
</div>
	
    

	
	<br><br>
</div><!-- /sidebar -->

</div>







