<?php 
if(!$_SESSION['front_user_email'])
	{
		echo "<script>window.location.href='index.php?page=login'</script>";
	}  
?>

	</div>
</div>


<div class="wrapper wrapper-flash">
            <div class="breadcrumb">
            	<div class="home-icon">
					<i class="fa fa-home"></i>
				</div>
            	<ul class="breadcrumb">
					<li class="first-child" ><a href="index.php?view=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a></li>
					<li class="last-child" > <i class="fa fa-angle-right"></i> <span itemprop="title">Publish an ad </span></li>
				</ul>
            	<div class="clear">
            		
            	</div>
        	</div>
</div>
<br>

<div class="wrapper" id="content">
	<div id="main">
		<?php 
			if(isset($_GET['check']))
			{
				if(isset($_POST['submit']))
				{
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
			if(isset($_POST['post_ad']))
			{
				
	
				$title =  $_POST['title'];
				$descriptions 	= "<pre>".strip_tags($_POST['descriptions'])."</pre>";
				include "libraries/image.inc.php";
				
				

				$img_temp1 = $_FILES['img1']['tmp_name'];
				$ext1 = pathinfo($_FILES["img1"]["name"], PATHINFO_EXTENSION);
				$rand1 = md5(uniqid().rand());
				$img1 = $rand1.".".$ext1;
		
				if($img_temp1)
				{
					move_uploaded_file($img_temp1, "assets/images/posts/".$img1);
					//create_thumbnail('assets/images/'.$img1, 'assets/images/posts/'.$img1, 800, 580);
					//unlink('assets/images/'.$img1);
				}
				else
				{
					$img1 = "";
					
				}		
				$img_temp2 = $_FILES['img2']['tmp_name'];
				$ext2 = pathinfo($_FILES["img2"]["name"], PATHINFO_EXTENSION);
				$rand2 = md5(uniqid().rand());
				$img2 = $rand2.".".$ext2;
		
				if($img_temp2)
				{
					move_uploaded_file($img_temp2, "assets/images/posts/".$img2);
					//create_thumbnail('assets/images/'.$img2, 'assets/images/posts/'.$img2, 800, 580);
					//unlink('assets/images/'.$img2);
				}
				else
				{
					$img2 = "";
				}

				$img_temp3 = $_FILES['img3']['tmp_name'];
				$ext3 = pathinfo($_FILES["img3"]["name"], PATHINFO_EXTENSION);
				$rand3 = md5(uniqid().rand());
				$img3 = $rand3.".".$ext3;
		
				if($img_temp3)
				{
					move_uploaded_file($img_temp3, "assets/images/posts/".$img3);
					//create_thumbnail('assets/images/'.$img3, 'assets/images/posts/'.$img3, 800, 580);
					//unlink('assets/images/'.$img3);
				}else
				{
					$img3 = "";
				}
				$img_temp4 = $_FILES['img4']['tmp_name'];
				$ext4 = pathinfo($_FILES["img4"]["name"], PATHINFO_EXTENSION);
				$rand4 = md5(uniqid().rand());
				$img4 = $rand4.".".$ext4;
		
				if($img_temp4)
				{
					move_uploaded_file($img_temp4, "assets/images/posts/".$img4);
					//create_thumbnail('assets/images/'.$img4, 'assets/images/posts/'.$img4, 800, 580);
					//unlink('assets/images/'.$img4);
				}else
				{
					$img4 = "";
				}
				$img_temp5 = $_FILES['img5']['tmp_name'];
				$ext5 = pathinfo($_FILES["img5"]["name"], PATHINFO_EXTENSION);
				$rand5 = md5(uniqid().rand());
				$img5 = $rand5.".".$ext5;
		
				if($img_temp5)
				{
					move_uploaded_file($img_temp5, "assets/images/posts/".$img5);
					//create_thumbnail('assets/images/'.$img5, 'assets/images/posts/'.$img5, 800, 580);
					//unlink('assets/images/'.$img5);
				}
				else
				{
					$img5 = "";
				}

				$img_temp6 = $_FILES['img6']['tmp_name'];
				$ext6 = pathinfo($_FILES["img6"]["name"], PATHINFO_EXTENSION);
				$rand6 = md5(uniqid().rand());
				$img6 = $rand6.".".$ext6;
		
				if($img_temp6)
				{
					move_uploaded_file($img_temp6, "assets/images/posts/".$img6);
					//create_thumbnail('assets/images/'.$img6, 'assets/images/posts/'.$img6, 800, 580);
					//unlink('assets/images/'.$img6);
				}
				else
				{
					$img6 = "";
				}
				$img_temp7 = $_FILES['img7']['tmp_name'];
				$ext7 = pathinfo($_FILES["img7"]["name"], PATHINFO_EXTENSION);
				$rand7 = md5(uniqid().rand());
				$img7 = $rand7.".".$ext7;
		
				if($img_temp7)
				{
					move_uploaded_file($img_temp7, "assets/images/posts/".$img7);
					//create_thumbnail('assets/images/'.$img7, 'assets/images/posts/'.$img7, 800, 580);
					//unlink('assets/images/'.$img7);
				}
				else
				{
					$img7 = "";
				}

				$img_temp8 = $_FILES['img8']['tmp_name'];
				$ext8 = pathinfo($_FILES["img8"]["name"], PATHINFO_EXTENSION);
				$rand8 = md5(uniqid().rand());
				$img8 = $rand8.".".$ext8;
		
				if($img_temp8)
				{
					move_uploaded_file($img_temp8, "assets/images/posts/".$img8);
					//create_thumbnail('assets/images/'.$img8, 'assets/images/posts/'.$img8, 800, 580);
					//unlink('assets/images/'.$img8);
				}
				else
				{
					$img8 = "";
				}
				$img_temp9 = $_FILES['img9']['tmp_name'];
				$ext9 = pathinfo($_FILES["img9"]["name"], PATHINFO_EXTENSION);
				$rand9 = md5(uniqid().rand());
				$img9 = $rand9.".".$ext9;
		
				if($img_temp9)
				{
					move_uploaded_file($img_temp9, "assets/images/posts/".$img9);
					//create_thumbnail('assets/images/'.$img9, 'assets/images/posts/'.$img9, 800, 580);
					//unlink('assets/images/'.$img9);
				}
				else
				{
					$img9 = "";
				}
				$img_temp10 = $_FILES['img10']['tmp_name'];
				$ext10 = pathinfo($_FILES["img10"]["name"], PATHINFO_EXTENSION);
				$rand10 = md5(uniqid().rand());
				$img10 = $rand10.".".$ext10;
		
				if($img_temp10)
				{
					move_uploaded_file($img_temp10, "assets/images/posts/".$img10);
					//create_thumbnail('assets/images/'.$img10, 'assets/images/posts/'.$img10, 800, 580);
					//unlink('assets/images/'.$img10);
				}
				else
				{
					$img10 = "";
				}

				$img_temp11 = $_FILES['img11']['tmp_name'];
				$ext11 = pathinfo($_FILES["img11"]["name"], PATHINFO_EXTENSION);
				$rand11 = md5(uniqid().rand());
				$img11 = $rand11.".".$ext11;
		
				if($img_temp11)
				{
					move_uploaded_file($img_temp11, "assets/images/posts/".$img11);
					//create_thumbnail('assets/images/'.$img11, 'assets/images/posts/'.$img11, 800, 580);
					//unlink('assets/images/'.$img11);
				}
				else
				{
					$img11 = "";
				}
				$img_temp12 = $_FILES['img12']['tmp_name'];
				$ext12 = pathinfo($_FILES["img12"]["name"], PATHINFO_EXTENSION);
				$rand12 = md5(uniqid().rand());
				$img12 = $rand12.".".$ext12;
		
				if($img_temp12)
				{
					move_uploaded_file($img_temp12, "assets/images/posts/".$img12);
					//create_thumbnail('assets/images/'.$img12, 'assets/images/posts/'.$img12, 800, 580);
					//unlink('assets/images/'.$img12);
				}else
				{
					$img12 = "";
				}
				
				// get all data
				$main_cat_id = $_POST['main_cat_id'];
				$sub_cat_id = $_POST['sub_cat_id'];
				$brand_cat_id = $_POST['brand_cat_id'];
				$price = $_POST['price'];
				$year = $_POST['year'];
				$registered = $_POST['registered'];
				$fuel = $_POST['fuel'];
				$km = $_POST['km'];
				$veh_condition = $_POST['veh_condition'];
				$furnished = $_POST['furnished'];
				$bedrooms = $_POST['bedrooms'];
				$bathrooms = $_POST['bathrooms'];
				$floor_level = $_POST['floor_level'];
				$area_unit = $_POST['area_unit'];
				$area = $_POST['area'];
				$job_type = $_POST['job_type'];
				$event_date = $_POST['event_date'];
				$website = $_POST['website'];
				$th_cate = $_POST['4th_cate'];
				$full_name = $_POST['full_name'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$show_email = $_POST['show_email'];
				$province = $_POST['province'];
				$city = $_POST['city'];
				$city_area = $_POST['city_area'];
				$address = $_POST['address'];
				$brand_cat_id = $_POST['brand_cat_id'];
				$brand_cat_id = $_POST['brand_cat_id'];
				

				$InsertPostAd = mysqli_query($con, "INSERT INTO post_ad VALUE(
								'',
								'$title',
								'$main_cat_id',
								'$sub_cat_id',
								'$brand_cat_id',
								'$price',
								'$year',
								'$registered',
								'$fuel',
								'$km',
								'$veh_condition',
								'$furnished',
								'$bedrooms',
								'$bathrooms',
								'$floor_level',
								'$area_unit',
								'$area',
								'$job_type',
								'$event_date',
								'$website',
								'$th_cate',
								'$descriptions',
								'$img1',
								'$img2',
								'$img3',
								'$img4',
								'$img5',
								'$img6',
								'$img7',
								'$img8',
								'$img9',
								'$img10',
								'$img11',
								'$img12',
								'$full_name',
								'$phone',
								'$email',
								'$show_email',
								'$province',
								'$city',
								'$city_area',
								'$address',
								'$crntDate',
								'$expDate',
								'Unblocked',
								''
							)");

				if($InsertPostAd)
				{
					
					echo "<script>window.location.href='index.php?page=ads&active'</script>";
				}
				else
				{
					echo '<script>alert("query failed")</script>';

				}

			}
?>
    <div class="form-container form-horizontal">

       <form method="post" enctype="multipart/form-data" id="item-post">
	   <fieldset>
			<div class="box-typ-1 general-information">
				<h2>General information</h2><br/>	
				
				<div class="control-group">
					<label class="control-label">Ad Title <span class='text-danger'>*</span></label>
					<div class="controls">
						<input type="text" name="title" required  />                            
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="select_1">Category <span class='text-danger'>*</span></label>
					<div class="controls">
						<select name="main_cat_id" onchange="showHint1(this.value)" required  >
							<option value="">Select Category</option>
							<?php
								$SelectmainCat = mysqli_query($con, "SELECT * FROM main_categories  ");
								   while($row=mysqli_fetch_assoc($SelectmainCat)){
							
							?>
							<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
<script>
function showHint1(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint1").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "php_ajax/get_subcats.php?cat_id="+str, true);
        xmlhttp.send();
    }
}
</script>				
<span id="txtHint1"></span>

<script>
function showHint2(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint2").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint2").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "php_ajax/multi_form.php?sub_cat_id="+str, true);
        xmlhttp.send();
    }
}
</script>	
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


                         <div class="control-group">
                            <label class="control-label" >Description <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <textarea id="descriptionen_US" class='editor0' rows="5" name="descriptions" style='width:100%;' ></textarea>   
							</div>
                        </div>
                    </div>
                    <div class="box-typ-1 pictures">
<h2>Upload Photos <small>(1st photo  will be your main photo. ) </small></h2>
<small class='text-danger'>1st Photo Required & all images size should be (<b>800 x 580px</b>) </small>	<br /><br />					
<div class="row">
	<div class="col-md-3 col-sm-4 col-xs-4 form-group"> 
		<input type="file" name="img1" id="imageUpload1" class="hide" required /> 
		<label for="imageUpload1" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px"  >
			<img src="assets/images/icon/plus.png" id="imagePreview1" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img2" id="imageUpload2" class="hide" /> 
		<label for="imageUpload2" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview2" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img3" id="imageUpload3" class="hide" /> 
		<label for="imageUpload3" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview3" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img4" id="imageUpload4" class="hide" /> 
		<label for="imageUpload4" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview4" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img5" id="imageUpload5" class="hide" /> 
		<label for="imageUpload5" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview5" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img6" id="imageUpload6" class="hide" /> 
		<label for="imageUpload6" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview6" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img7" id="imageUpload7" class="hide" /> 
		<label for="imageUpload7" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview7" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img8" id="imageUpload8" class="hide" /> 
		<label for="imageUpload8" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview8" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img9" id="imageUpload12" class="hide" /> 
		<label for="imageUpload9" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview9" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img10" id="imageUpload10" class="hide" /> 
		<label for="imageUpload10" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview10" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img11" id="imageUpload11" class="hide" /> 
		<label for="imageUpload11" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview11" alt="Preview Image" style="width: 80px; height: 80px; " />
		</label>
	</div>
	<div class="col-md-3 col-sm-4 col-xs-4 form-group">
		<input type="file" name="img12" id="imageUpload12" class="hide" /> 
		<label for="imageUpload12" class="btn btn-primary"  style="width: 80px; height: 80px; padding:0px" >
			<img src="assets/images/icon/plus.png" id="imagePreview12" alt="Preview Image" style="width: 80px; height: 80px; " />
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
									<option value="">Select a region...</option>
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
									<select >
										<option value="">Select City...</option>
									</select>
								</div>
							</div>
						</span>
						
                        <div class="control-group">
                            <label class="control-label" for="cityArea">City Area <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input id="cityArea" type="text" name="city_area" required />
	                         </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">
                              <input id="address" type="text" name="address" value="" />                            
							</div>
                        </div>
                    </div>
                    <!-- seller info -->
                    <div class="box-typ-1 contact-info">
                        <h2>Contact information</h2>
						<br/>
                        <div class="control-group">
                            <label class="control-label" for="userName">Name <span class='text-danger'>*</span></label>
                            <div class="controls">
								<input type="text" name='full_name' value="<?php echo $pro_full_name; ?>" required >
                            </div>
                        </div>
						<div class="control-group">
							<label class="control-label" for="phone">Cell Phone </label>
							<div class="controls">
								<input type="text" name="phone" value="<?php echo $pro_phone; ?>"   >
							</div>
						</div>
						<?php if($pro_password){ ?>
                        <div class="control-group">
                            <label class="control-label" for="userEmail">E-mail <span class='text-danger'>*</span></label>
                            <div class="controls">
							
								<input type="text" name='email' value="<?php echo $pro_email; ?>" readonly >
								<div class="small-info">Your email address is private</div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls checkbox">
                                <input id="showEmail" type="checkbox" name="show_email" value="1" style="margin-top: 10px !important;" />  Show my e-mail on the ad</label>
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
						<button type="submit" name='post_ad'  class="btn btn-primary"><li class='fa fa-upload'></li> Publish</button>
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

</div><!-- content -->
<div id="sidebar">
    <div id="useful_info" class="bordered-box">
        <h2 class="red-txt"><i class="fa fa-info-circle fa-lg"></i>&nbsp;&nbsp;We do not promote:</h2>
        <ul>
            <li>Ads with offensive content.</li>
			<li>Identical ads published in different regions or cities.</li>
			<li>Ads published in categories that are not related to the product offered.</li>
			<li>Ads with erotic or pornographic content.</li>
			<li>Ads selling tobacco, drugs or any other illegal medication.</li>
			<li>Firearms and related items.</li>
			<li>Ads in other languages.</li>
			<li>Ads offering money loans.</li>
			<li>Business opportunities to earn money easily, multi-level marketing or any pyramid scheme.</li>
			<li>Any other illegal content.</li>
        </ul>
    </div>
	<br><br>
</div><!-- /sidebar -->
</div>


