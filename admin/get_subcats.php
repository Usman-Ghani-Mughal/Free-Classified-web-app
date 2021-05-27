<?php 
error_reporting(0);
session_start();
include("libraries/config.php"); 

 $cat_id = $_GET['cat_id'];
?>					
				<div class="col-sm-6 form-group">
					<label for="">Select Sub Category</label>
					<select class="form-control" name="sub_cat_id"  required  >
						<option value="">Select Category</option>
						<?php
							$SelectmainCat = mysqli_query($con, "SELECT * FROM sub_categories WHERE main_cat_id='$cat_id' ");
							   while($row=mysqli_fetch_assoc($SelectmainCat)){
						
						?>
						<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
						<?php } ?>
					</select>
				</div>
				

							