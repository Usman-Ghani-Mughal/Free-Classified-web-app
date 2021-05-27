<script>
    $(function() {
        var data = [
		<?php
			$SelectTitle	= mysqli_query($con,"SELECT * FROM post_ad ");
				while($rowtitle=mysqli_fetch_assoc($SelectTitle)){
				
		?>
            { label: "<?php echo $rowtitle['title']; ?>", category: "" },
		<?php } ?>
        ];

        $( "#keyword" ).catcomplete({
            delay: 0,
            source: data
        });
    });
</script>


<script type="text/javascript">
function myFunction()
{
    var myForm = document.getElementById('form-id');
    var allInputs = myForm.getElementsByTagName('input');
    var input, i;

    for(i = 0; input = allInputs[i]; i++) {
        if(input.getAttribute('name') && !input.value) {
            input.setAttribute('name', '');
        }
    }
}
</script>
						
<div id="content" style='background-color:#222; background-image: url(assets/images/search_bg.jpg);
    background-size: contain;
    background-repeat: repeat-x;
    background-position: bottom center;'>

<br />
<div class="wrapper" id="content">


	<div class="header-search-container-wrapper" style="border-radius:10px;">
<?php if(!$_GET['page'] OR $_GET['page']=="home"){ ?>	
	<form id="form-id" method="get" onsubmit="myFunction()">
		
		<input type="hidden" name='page' value='listing' />
			<div class="row">
				<div class="col-sm-3">
					<i class="fa fa-map-marker serchInputIcon"></i>
					<input type="text" class='form-control searchInput' id="dam" name='city' value='<?php echo $_GET['city']; ?>' placeholder="Select location" data-toggle="modal" data-target="#choose_location"  readonly />
				</div>
				<div class="col-sm-6">
					<i class="fa fa-search serchInputIcon"></i>
					<input type="text" class='form-control searchInput' id='keyword' name='keyword' value='<?php echo $_GET['keyword']; ?>' placeholder='<?php echo $TotalUsersAds; ?> Ads ' />
				</div>
				<div class="col-sm-3">
				<button type='submit' style="width: 100%;  color: #FFF;  border-radius: 8px;">
					<div class="search-ad-tab" >
						<i class="fa fa-search fa-fw"></i><span>SEARCH </span>
					</div>
				</button>
				
				</div>
			</div>	
		</form>
<?php }else{ ?>
		
	<form id="form-id" method="get" onsubmit="myFunction()">
		<input type="hidden" name='page' value='listing' />
			<div class="row">
				<div class="col-sm-3">
					<i class="fa fa-map-marker serchInputIcon"></i>
					<input type="text" class='form-control searchInput' id="dam"  name='city' value='<?php echo $_GET['city']; ?>' placeholder="Select location"  data-toggle="modal" data-target="#choose_location" readonly />
				</div>
				<div class="col-sm-3">
					<i class="fa fa-th-large serchInputIcon"></i>
					<input type="text" class='form-control searchInput' id="dam_cat"  name='category' value="<?php echo $subCatName; ?>"  placeholder="Select Category"  data-toggle="modal" data-target="#choose_category" readonly />
				</div>
				<div class="col-sm-4">
					<i class="fa fa-search serchInputIcon"></i>
					<input type="text" class='form-control searchInput' id='keyword' name='keyword' value='<?php echo $_GET['keyword']; ?>' placeholder='<?php echo $TotalUsersAds; ?> Ads ' />
				</div>
				<div class="col-sm-2">
				<button type='submit' style="width: 100%;  color: #FFF;  border-radius: 8px;">
					<div class="search-ad-tab" >
						<i class="fa fa-search fa-fw"></i><span>SEARCH </span>
					</div>
				</button>
				
				</div>
			</div>	
		</form>
<?php } ?>		
	</div>
</div>
<h2 align='center' style='color:#FFF; text-shadow:1px 2px 1px #000; font-weight:bold;'>Free Local Classified Ads</h2>
<h4 align='center' style='color:#FFF; text-shadow:1px 2px 1px #000;' >Buy & sell with ease on our fast growing online marketplace</h4>
<br />
</div>


<!------------------------------select-location------------------------------------------>

<!-- Modal -->
<div id="choose_location" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
 
      <div class="modal-body">
      
	  
<script type="text/javascript">
$(document).ready(function(){
	$("#dam_return a.get_name").click(function(){
		var value = $(this).html();
        var input = $('#dam');
        input.val(value);
	});
});
</script>
<button type="button" class="close fancybox-close" data-dismiss="modal">&times;</button>

<div class="location-selection-popup-container" id="dam_return">

    <!---div class="type-location-box">
<script>
    $(function() {
        var data = [
		<?php
			$GetCity	= mysqli_query($con,"SELECT * FROM cities ");
				while($rowtitle=mysqli_fetch_assoc($GetCity)){
				
		?>
            { label: "<?php echo $rowtitle['city_name']; ?>", category: "" },
		<?php } ?>
        ];

        $( "#findcity" ).catcomplete({
            delay: 0,
            source: data
        });
    });
</script>
        <input type="text" id="findcity" class="location-input-text ui-autocomplete-input" placeholder="Type city name here" >

        
    </div--->

    <h5 class="popular-cities">POPULAR CITIES</h5>
    <div class="popular-cities-box">
		<ul>
		
		<?php 
		$GetPopularQuery = mysqli_query($con,"SELECT * FROM cities WHERE popular='1' ORDER BY city_name ");
		while($row=mysqli_fetch_assoc($GetPopularQuery)){
		?>
			<li><a href="" class='get_name' data-dismiss="modal"><?php echo $row['city_name']; ?></a></li>
		<?php } ?>
		</ul>
    </div>
	
    <h5 class="select-location">SELECT LOCATION</h5>
    <div class="select-location-box">
        <div class="location-selector">

    <a  href="" class="get_name all" data-dismiss="modal" >All Pakistan</a>
    <div class="clear"></div>
	
 <div class="panel-group" id="accordion">
	
	
	<?php 
		$GetProvinceQuery = mysqli_query($con,"SELECT * FROM province ORDER BY province_name ");
		$btn_no=0;
		while($row=mysqli_fetch_assoc($GetProvinceQuery)){
			$btn_no++;
		?>
	<div class="panel">
		<a data-toggle="collapse" data-parent="#accordion" href="#location_btn<?php echo $btn_no; ?>">
			<div class="has-more-locations">
				 <?php echo $row['province_name']; ?> <i class="fa fa-chevron-circle-right pull-right"></i>
			</div>
		</a>

      <div id="location_btn<?php echo $btn_no; ?>" class="collapse ">
     
		<div class="select-location-box">
        <div class="location-selector">

			<div data-toggle="collapse" data-parent="#accordion" href="#location_btn_1" class="back" id="back-top">
				<i class="fa fa-chevron-left"></i>CHANGE REGION
			</div>
			<br>
			 <a href="" class='get_name all' data-dismiss="modal"><?php echo $row['province_name']; ?></a>
				<div class="clear"></div>
				<?php 
					$GetCitiesQuery = mysqli_query($con,"SELECT * FROM cities WHERE province='".$row['id']."' ORDER BY city_name ");
					while($row=mysqli_fetch_assoc($GetCitiesQuery)){
				?>
				<div class="cities-list-cell">
					<a href="" class='get_name cities' data-dismiss="modal"><?php echo $row['city_name']; ?></a>
				</div>
				<?php } ?>
				<div style="clear: both;"></div>
			</div>
		</div>
      </div>
    </div>
	<!----------------End Panel--------------->
	<?php } ?>
	
	
  </div> 

           

                  
         
            </div>
    </div>

</div>

      </div>
 
    </div>

  </div>
</div>

<!-------------------------------Select Category----------------------------------------->

<!-- Modal -->
<div id="choose_category" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
 
      <div class="modal-body">

<script type="text/javascript">
$(document).ready(function(){
	$("#dam_return_cat .get_name").click(function(){
		var value = $(this).html();
        var input = $('#dam_cat');
        input.val(value);
		
		document.getElementById('try').innerHTML = value;
		
	});
});
</script>
	  
<button type="button" class="close fancybox-close" data-dismiss="modal">&times;</button>

<div class="location-selection-popup-container" id="dam_return_cat">

	
    <h5 class="select-location">SELECT CATEGORY</h5>
    <div class="select-location-box">
        <div class="location-selector">
            
    <div class="clear"></div>
	
 <div class="panel-group" id="accordion_cates">
	
	
	<?php 
		$GetMainCats = mysqli_query($con,"SELECT * FROM main_categories ");
		$btn_no=0;
		while($row=mysqli_fetch_assoc($GetMainCats)){
			$btn_no++;
			$totalAds = mysqli_num_rows(mysqli_query($con, "SELECT * FROM post_ad WHERE main_cat_id='".$row['id']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  "));
		?>
	<div class="panel">
		<a data-toggle="collapse" data-parent="#accordion_cates" href="#category_btn<?php echo $btn_no; ?>">
			<div class="has-more-locations">
				<img src="assets/images/main_categories/<?php echo $row['img']; ?>" style="height: 36px;" /> <?php echo $row['name']; ?>  <span class="badge"><?php echo $totalAds; ?></span><i class="fa fa-chevron-circle-right pull-right"></i>
			</div>
		</a>

      <div id="category_btn<?php echo $btn_no; ?>" class="collapse ">
     
		<div class="select-location-box">
        <div class="location-selector" style='padding:20px;'>

			
			
				<div class="clear"></div>
				<?php 
					$GetCitiesQuery = mysqli_query($con,"SELECT * FROM sub_categories WHERE main_cat_id='".$row['id']."'  ");
					while($row=mysqli_fetch_assoc($GetCitiesQuery)){
					$subtotalAds = mysqli_num_rows(mysqli_query($con, "SELECT * FROM post_ad WHERE sub_cat_id='".$row['id']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  "));
				?>
				<div class="cities-list-cell" style="width:50%;">
					<a href="" class=' cities' data-dismiss="modal"> <img src="assets/images/sub_categories/<?php echo $row['img']; ?>" style="height: 30px;" /> <span class='get_name'><?php echo $row['name']; ?></span> <span class="badge"><?php echo $subtotalAds; ?></span></a>
				</div>
				<?php } ?>
					
				<div style="clear: both;"></div>
		</div>
			
			
		</div>
      </div>
    </div>
	<!----------------End Panel--------------->
	<?php } ?>
	
	
  </div> 

           

                  
         
            </div>
    </div>

</div>
	  
      </div>
 
    </div>

  </div>
</div>



	