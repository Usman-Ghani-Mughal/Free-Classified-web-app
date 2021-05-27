<?php 
error_reporting(0);
session_start();
include("../admin/libraries/config.php"); 

	 $cat_id = $_GET['cat_id'];
?>					
				<div class="control-group">
					<label class="control-label">Select Sub Category <span class='text-danger'>*</span></label>
					<div class="controls">
					<select  name="sub_cat_id" onchange="showHint2(this.value)" required  >
						<option value="">Select Category</option>
						<?php
							$SelectmainCat = mysqli_query($con, "SELECT * FROM sub_categories WHERE main_cat_id='$cat_id' ");
							   while($row=mysqli_fetch_assoc($SelectmainCat)){
						
						?>
						<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
						<?php } ?>
					</select>
					</div>
				</div>
<span id="txtHint2"></span>

<?php if($cat_id==7 OR $cat_id==14){
}else{
		if($cat_id==6){
?>	
				<div class="control-group">
					<label class="control-label">Type of Job <span class='text-danger'>*</span></label>
					<div class="controls">
						<input type="radio" name="job_type" value="Offering Job" checked /> Offering Job                         
						<input type="radio" name="job_type" value="Seeking Job"  /> Seeking Job                    
					</div>
				</div>
<?php }else{ ?>	
				<div class="control-group">
					<label class="control-label">Price <span class='text-danger'>*</span></label>
					<div class="controls">
						<input type="number" min='0' name="price" required />                         
					</div>
				</div>
<?php }} ?>


