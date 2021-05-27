<?php 
error_reporting(0);
session_start();
include("../admin/libraries/config.php"); 

	 $province_id = $_GET['province_id'];
?>					
					<div class="control-group">
						 <label class="control-label" for="region">City  <span class='text-danger'>*</span></label>
							<div class="controls">
								<select name="city"  required  >
									<option value="">Select City...</option>
									<?php
										$SelectCity = mysqli_query($con, "SELECT * FROM cities WHERE province='$province_id'  ");
										   while($row=mysqli_fetch_assoc($SelectCity)){
									?>
									<option value="<?= $row['id']; ?>"><?= $row['city_name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

