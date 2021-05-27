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
			<li class="last-child" > <i class="fa fa-angle-right"></i> <span>Messages</span></li>
		</ul>
    </div>
</div>
<br>

<div class="wrapper" id="content">
    <a href="#" data-bclass-toggle="display-filters" class="resp-toogle show-filters-btn">User menu</a>

<style type="text/css">
.list-group-item {
    padding: 0px;
}
</style>
<?php


$_SESSION['to_user'] 	= $_GET['user'];

$_SESSION['user1'] 	= $pro_username.$_GET['userid'];
$_SESSION['user2'] 		= $_GET['user'].$pro_id;

	$user1 = $_SESSION['user1'];
	$user2 = $_SESSION['user2'];	
?>

<div class="row">
	<div class="col-sm-4">


			<span class="user_nav"></span>
	</div>
	<div class="col-sm-8">

<style type="text/css">
.messages{
	border: 1px solid #ccc; 
	width:100%;
	height: 400px; 
	padding: 10px; 
	overflow-y:scroll; 
	margin-top:-1px; 

}
.message_input{ 
	padding: 17px; 
	width: 100%; 
</style>
<?php if($_GET['user']){ 
 
 $GetUserRow = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE username='".$_GET['user']."'"));
?>
<table width='100%'>
	<tr>
		<td width='80'  valign='middle'>
	<?php 
	
	if(stripos($GetUserRow['img'], 'http') !== FALSE){
	echo '<img  src="'.$GetUserRow['img'].'" style="width:80%; border:1px solid #333;" />';

	}else{ 
									
		if($GetUserRow['img']){?>
		<img class="img-circle" src="assets/images/avatar/<?php echo $GetUserRow['img']; ?>" style="width:80%; border:1px solid #333;" />
	<?php }else{  if($GetUserRow['gender']=="Male"){ ?>  
		<img  class="img-circle" src="assets/images/avatar/male.jpg" style="width:80%; border:1px solid #333;" />
	<?php }else{ ?>
		<img class="img-circle" src="assets/images/avatar/female.jpg" style="width:80%; border:1px solid #333;" />	
	<?php }}} ?> 		
		</td>
		<td valign='middle'><h3> <?php echo $GetUserRow['first_name'].' '.$GetUserRow['last_name']; ?></h3></td>
	</tr>
</table>
<br />
	
	
<form id="myForm" action="php_ajax/send_message.php" method="post">
	<input type="hidden" name='sender' value="<?php echo $user1; ?>" />
	<input type="hidden" name='recover' value="<?php echo $user2; ?>" />
	<input type="hidden" name='date' value="<?php echo $crntDate; ?>" />
	<input type="hidden"name='time' value="<?php echo $crntTime; ?>" />
	<input type="text" name='message' placeholder="Type your message here" class='message_input' />
	<button hidden id="sub" >Save</button>
</form>

<div class='messages'></div>			  
<?php }else{ ?>
<script>
    $(function() {
        var data = [
		<?php
			$SelectUser	= mysqli_query($con,"SELECT * FROM users WHERE username!='$pro_username' AND status='Activated' ");
				while($rowUser=mysqli_fetch_assoc($SelectUser)){
				
		?>
            { label: "<?php echo $rowUser['email']; ?>", category: "" },
		<?php } ?>
        ];

        $( "#email" ).catcomplete({
            delay: 0,
            source: data
        });
    });
</script>

<form method="post">
<div class="row">
	<div class="col-sm-8">
		<input type="email" class='form-control' id='email' name='email' placeholder='Search People by Email' style="padding: 20px; border-radius:0px !important; " /></div>
	<div class="col-sm-4">
	<button type='submit' style="width: 100%;  color: #FFF; ">
		<div class="search-ad-tab"  >
			<i class="fa fa-search fa-fw"></i><span>SEARCH </span>
		</div>
	</button>
		
</div>
	
	
	
</form>
<br />
<br />
<br />
<?php 	
if(isset($_POST['email'])){
	$checkEmailForMsg = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email='".$_POST['email']."' AND status='Activated'"));
	
	if($checkEmailForMsg>0){
	$userRow = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE email='".$_POST['email']."'"));
	
		echo "<script>window.location.href='index.php?page=messages&userid=".$userRow['id']."&user=".$userRow['username']."'</script>";	
		
	}else{
		echo "<p align='center' style='color:Red; '><b>That User doesn't exist...!</b></p><br />";
		
	}
}
	
	
 } ?>
 
<script type="text/javascript">
$("#sub").click( function() {
 $.post( $("#myForm").attr("action"), 
         $("#myForm :input").serializeArray(), 
         function(info){ $("#result").html(info); 
   });
 clearInput();
});
 
$("#myForm").submit( function() {
  return false;	
});
 
function clearInput() {
	$("#myForm :input").each( function() {
	   $(this).val('');
	});
}
</script>
	</div>
</div>




		

		
	
			 

</div>
