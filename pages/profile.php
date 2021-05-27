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
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>Profile</span></li>
		</ul>
    </div>
</div>
<br>

<div class="wrapper" id="content">
    <a href="#" data-bclass-toggle="display-filters" class="resp-toogle show-filters-btn">User menu</a>

	<?php include "libraries/profile_sidebar.php"; ?>

    <div id="main">
        <div class="list-header">
		<h2>Profile</h2>

                
			<div class="row">
							<div class="col-sm-3">
							<br />
							<br />
								<center>
									<?php
									if(stripos($pro_img, 'http') !== FALSE){
									echo '<img class="thumbnail" src="'.$pro_img.'" width="100%" />';
									}else{ 
									if($pro_img){?>
										<img class="thumbnail" src="assets/images/avatar/<?php echo $pro_img; ?>" width="100%" />
									<?php }else{ 
										
											if($pro_gender=="Male"){
									?>  
										<img  class="thumbnail" src="assets/images/avatar/male.jpg" width="100%" />
									<?php }else{ ?>
										<img class="thumbnail" src="assets/images/avatar/female.jpg" width="100%" />	
									<?php }}} ?> 

									
									
								</center>
							</div>
							<div class="col-sm-9">
							
							<div class="page-header">
						
								
								<h2><?php echo $pro_first_name.' '.$pro_last_name;?></h2>
							</div>
					<table class="table table-striped table-bordered">
			
					<?php if($pro_password){?>
						<tr>
							<td>Username</td>
							<td><?php echo $pro_username;?></td>
						</tr>
						<tr>
							<td>E-Mail ID</td>
							<td><?php echo $pro_email;?></td>
						</tr>
					<?php } ?>
						<tr>
							<td>Phone Number</td>
							<td><?php echo $pro_phone;?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $pro_gender;?></td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td><?php echo $pro_birthday;?></td>
						</tr>
						<tr>
							<td>City</td>
							<td><?php echo $pro_city; ?></td>
						</tr>
						<tr>
							<td>State</td>
							<td><?php echo $pro_state; ?></td>
						</tr>
						<tr>
							<td>Zip Code</td>
							<td><?php echo $pro_zip; ?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $pro_street; ?></td>
						</tr>
							
							
					</table>

							</div>
				</div>
				
		</div><!-- content -->
	</div>
	

</div>
