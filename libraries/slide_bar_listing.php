
<a href="#" data-bclass-toggle="display-filters" class="resp-toogle show-filters-btn"><i class="fa fa-sliders"></i> Search Filters</a>
<div id="sidebar">
	<div class="filters">
		<h5><i class="fa fa-sliders"></i> ADVANCED FILTERS</h5>
<fieldset>
	<div class="row2">
		<h4>Refine category</h4>
		
<?php if($mainCatName){ ?>
	<ul class="category" style='background-color:#F4F4F4'>
<?php }else{ ?>
	<ul id="tree1" class="category" style='background-color:#F4F4F4'>
<?php } ?>	
		<li style='padding:10px;'><a href="index.php?page=listing&categories=all">All categories</a></li>
			

<?php 
if($mainCatName) {
	$GetMainCatsSide = mysqli_query($con,"SELECT * FROM main_categories WHERE name='$mainCatName'");
}else{
	$GetMainCatsSide = mysqli_query($con,"SELECT * FROM main_categories ");
}
		while($row=mysqli_fetch_assoc($GetMainCatsSide)){
		
?>
		<li style='padding:10px;'><a href="#"><?php echo ltrim($row['name']); ?></a>
			<ul>
<?php 
	$GetSubCatsSide = mysqli_query($con,"SELECT * FROM sub_categories WHERE main_cat_id='".$row['id']."'");
		while($row=mysqli_fetch_assoc($GetSubCatsSide)){
			
		$TotalAdsSubCat = mysqli_num_rows(mysqli_query($con, "SELECT * FROM post_ad WHERE sub_cat_id='".$row['id']."'  AND expiry_date > '$crntDate'  AND status='Unblocked'  "));

?>
				<li <?php  if($subCatName==$row['name']){ ?> style='padding:10px; background-color:#FFF; border:1px solid #444; border-radius:5px;' <?php }else{ ?> style='padding:10px;' <?php } ?> >
					<a href="index.php?page=listing&sc=<?php echo $row['id']; ?>">
						<?php if($subCatName==$row['name']){ echo ltrim($row['name'])."(".$TotalAdsSubCat.")"; }else{ echo ltrim($row['name'])."(".$TotalAdsSubCat.")"; } ?>
					</a>
			<?php  if($subCatName==$row['name']){ ?>
					<div class='pull-right' style='
						margin-right:-21px;
						margin-top:-5px;
						border-right: 1px solid #444;
						border-top: 1px solid #444;
						width:25px; 
						height:25px; 
						display:block; 
						background-color:#FFF; 
						-ms-transform: rotate(45deg); /* IE 9 */
						-webkit-transform: rotate(45deg); /* Safari */
						transform: rotate(45deg); /* Standard syntax */ 
					'></div>
			<?php } ?>
				</li>
				
<?php } ?>
			</ul>
		</li>		
<?php } ?>		
	</ul>
<script type="text/javascript">
$.fn.extend({
    treed: function (o) {
      
      var openedClass = '';
      var closedClass = '';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
      tree.find('.branch .indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$('#tree1').treed();

$('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});

</script>		
	</div>
</fieldset>
<script type="text/javascript">
function myFunction2()
{
    var myForm = document.getElementById('form-id2');
    var allInputs = myForm.getElementsByTagName('input');
    var input, i;

    for(i = 0; input = allInputs[i]; i++) {
        if(input.getAttribute('name') && !input.value) {
            input.setAttribute('name', '');
        }
    }
}
</script>
<?php  if($_GET['categories']!='all' AND $mainCatName ){ ?>
	<form id="form-id2" method="get" class="nocsrf" onsubmit="myFunction2()">
			<input type="hidden" name="page" value="listing"/>
			<input type="hidden" name="city" value="<?php echo $_GET['city']; ?>"/>
			<input type="hidden" name="category" value="<?php echo $subCatName; ?>"/>
			<input type="hidden" name="keyword" value="<?php echo $_GET['keyword']; ?>"/>				
<?php 
 $getTotalBrandCats	= mysqli_num_rows(mysqli_query($con, "SELECT * FROM brand_others WHERE sub_cat_id='$subCatID'"));
if($getTotalBrandCats>0){
?>
			<fieldset>
				<div class="row">
					<h4><?php echo $subCatName; ?></h4>
					<select name="subCategory" id="" class="input-text"  >
					<?php if($_GET['subCategory']){

					$crrntSubCat	= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM brand_others WHERE id='".$_GET['subCategory']."'"));
						
					?>
					<option value="<?php echo $crrntSubCat['id']; ?>"><?php echo $crrntSubCat['name']; ?></option>
					<?php }else{
					echo "<option value=''>Select</option>";	
					}
						$getBrandCats	= mysqli_query($con, "SELECT * FROM brand_others WHERE sub_cat_id='$subCatID'");
						while($row=mysqli_fetch_assoc($getBrandCats)){
					?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
					<?php } ?>
					</select>
				</div>
			</fieldset>
<?php } 
if($mainCatId==6 OR $mainCatId==7 OR $mainCatId==14 ){}
else{

?>
			<fieldset>
				<div class="row price-slice">
					<h4>Price</h4>
					<span>Minimum</span>
					<input class="input-text" type="text" id="priceMin" name="min" value="<?php echo $_GET['min']; ?>"  />
					<br>
					<span>Maximum</span>
					<input class="input-text" type="text" id="priceMax" name="max" value="<?php echo $_GET['max']; ?>"   />
				</div>
			</fieldset>
<?php } ?>

			<div class="actions">
				<button type="submit">Apply Filters</button>
			</div>
		</form>
<?php } ?>	

	</div>
	<br>
	<br>
</div>    
