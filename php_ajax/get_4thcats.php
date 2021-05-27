<?php 
error_reporting(0);
session_start();
include("../admin/libraries/config.php"); 

$brand_cat_id = $_GET['brand_cat_id'];
	
	$getBrandRow = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM brand_others WHERE id='$brand_cat_id' "));
if($brand_cat_id==191 OR $brand_cat_id==192){
?>					
				<div class="control-group">
					<label class="control-label"><?php echo $getBrandRow['name'] ?><span class='text-danger'>*</span></label>
					<div class="controls">
						<select  name="4th_cate"  required  >
							<option value="">Select</option>
							<option value="Private Practice">Private Practice</option>
							<option value="Advocate">Advocate</option>
							<option value="Attorney">Attorney</option>
							<option value="Public Prosecutor">Public Prosecutor</option>
							<option value="Government counsel">Government counsel</option>
							<option value="Corporate in-house Counsel ">Corporate in-house Counsel </option>
							<option value="Administrative Law Judge">Administrative Law Judge</option>
							<option value="Judge">Judge</option>
							<option value="Arbitrator">Arbitrator</option>
							<option value="Law professor">Law professor</option>
							<option value="Politician">Politician</option>
							<option value="Legal Advisor">Legal Advisor</option>
							<option value="Other Legal">Other Legal</option>
						</select>
					</div>
				</div>
<?php }if($brand_cat_id==211){ ?>
				<div class="control-group">
					<label class="control-label"><?php echo $getBrandRow['name'] ?><span class='text-danger'>*</span></label>
					<div class="controls">
					<select  name="4th_cate"  required  >
						<option value="">Select</option>
						<option value="Guitar Player ">Guitar Player </option>
						<option value="Drummer">Drummer</option>
						<option value="Keyboard Player">Keyboard Player </option>
						<option value="Naat Khawan">Naat Khawan</option>
						<option value="Band">Band</option>
						<option value="Vocalists">Vocalists</option>
					</select>
					</div>
				</div>
<?php } ?>
