<?php 
error_reporting(0);
session_start();
include("../admin/libraries/config.php"); 

  $sub_cat_id = $_GET['sub_cat_id'];
  
  $getSubCatName = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM sub_categories WHERE id='$sub_cat_id' "));
	 				  
								   
  $totalBran = mysqli_num_rows(mysqli_query($con, "SELECT * FROM brand_others WHERE sub_cat_id='$sub_cat_id' "));
  if($totalBran>0){
?>					
				<div class="control-group">
					<label class="control-label"><?php echo $getSubCatName['name']; ?> <span class='text-danger'>*</span></label>
					<div class="controls">
					<select  name="brand_cat_id"  onchange="showHint3(this.value)" required  >
						<option value="">Select</option>
						<?php
							$SelectBrandCat = mysqli_query($con, "SELECT * FROM brand_others WHERE sub_cat_id='$sub_cat_id' ");
							   while($row=mysqli_fetch_assoc($SelectBrandCat)){
						
						?>
						<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
						<?php } ?>
					</select>
					</div>
				</div>
<span id="txtHint3"></span>	

 <?php } if($getSubCatName['main_cat_id']==14 AND $sub_cat_id!=110){  ?>
 
 <?php if($sub_cat_id==114){  ?>
                        <div class="control-group">
                            <label class="control-label">Event Date <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="date" name="event_date" required />                         
							</div>
                        </div>
 <?php } ?> 

                        <div class="control-group">
                            <label class="control-label">Website (URL)  <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="url" name="website" required />                         
							</div>
                        </div>

 
  <?php } if($sub_cat_id==14){ ?>	
                        <div class="control-group">
                            <label class="control-label">Year <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1900" name="year" required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Registered in<span class='text-danger'>*</span></label>
                            <div class="controls">
								<select name="registered"  required  >
									<option value="">Select</option>
									<?php
										$SelectCity = mysqli_query($con, "SELECT * FROM cities ORDER BY city_name ");
										   while($row=mysqli_fetch_assoc($SelectCity)){
									?>
									<option value="<?= $row['city_name']; ?>"><?= $row['city_name']; ?></option>
									<?php } ?>
								</select>
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Fuel <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="fuel" required >                         
									<option value="">Select</option>
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
                                <input type="text"  name="km" required />                         
							</div>
                        </div>
  <?php } if($sub_cat_id==15){ ?>	
                        <div class="control-group">
                            <label class="control-label">Year <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1900" name="year" required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">KM's Driven <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="text"  name="km" required />                         
							</div>
                        </div>
  <?php } if($sub_cat_id==22){ ?>	
                        <div class="control-group">
                            <label class="control-label">Year <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1900" name="year"required />                         
							</div>
                        </div>
<?php } if($getSubCatName['main_cat_id']==3 OR $getSubCatName['main_cat_id']==4){  ?>	
				<div class="control-group">
					<label class="control-label">Condition <span class='text-danger'>*</span></label>
					<div class="controls">
					<select  name="veh_condition" required  >
						<option value="">Select Condition</option>
						<option value="New">New</option>
						<option value="Used">Used</option>
					</select>
					</div>
				</div>
  <?php } if($sub_cat_id==27 OR $sub_cat_id==30){ ?>	
                        <div class="control-group">
                            <label class="control-label">Furnished <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="furnished" required >
									<option value="">Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>             
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bedrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bedrooms" required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bathrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bathrooms" required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Floor Level <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="floor_level" required >
									<option value="">Select</option>
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
                                <input type="text" name="area" required />                         
							</div>
                        </div>
  <?php } if($sub_cat_id==28){ ?>	
                        <div class="control-group">
                            <label class="control-label">Furnished <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <select name="furnished" required >
									<option value="">Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>             
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bedrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bedrooms" required />                         
							</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bathrooms <span class='text-danger'>*</span></label>
                            <div class="controls">
                                <input type="number" min="1" name="bathrooms" required />                         
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
                                <input type="text" name="area" required />                         
							</div>
                        </div>
  <?php } if($sub_cat_id==29 OR $sub_cat_id==31){ ?>	

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
                                <input type="text" name="area" required />                         
							</div>
                        </div>

<?php } ?>	
				

							