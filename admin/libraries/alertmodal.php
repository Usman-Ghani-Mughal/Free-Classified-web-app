<?php if(@$_SESSION['success']){ ?>
 
<!--****** Start Basic Modal ******-->
  <div class="modal" id="autoModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
		  <h4 class="modal-title"><strong>Success!</strong> </h4>
		</div>
		<div class="modal-body">
			<center>
				<img src="assets/images/check.png" alt="error" /><br><br>
				<b><?php echo $_SESSION['success']; ?></b>
			</center>
		</div>
		<div class="modal-footer">
		  <button type="button" id='myButtonId' class="btn btn-default btn-raised rippler rippler-default" data-dismiss="modal">Close</button>
			<script type="text/javascript">
			setInterval(function () {document.getElementById("myButtonId").click();}, 5000);
			</script>
		</div>
	  </div>
	</div>
  </div>
  <!--****** End Basic Modal ******--> 
  
<!-- Bootstrap - Latest compiled and minified JavaScript -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#autoModal').modal('show');
    });
</script>
<?php  
	unset($_SESSION['success']);  
	} 

if(@$_SESSION['danger']){ ?>
 
<!--****** Start Basic Modal ******-->
  <div class="modal" id="autoModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
		  <h4 class="modal-title"><strong>Warning!</strong> </h4>
		</div>
		<div class="modal-body">
			<center>
				<img src="assets/images/error.png" alt="error" /><br><br>
				<b><?php echo $_SESSION['danger']; ?></b>
			</center>
		</div>
		<div class="modal-footer">
		  <button type="button" id='myButtonId' class="btn btn-default btn-raised rippler rippler-default" data-dismiss="modal">Close</button>
			<script type="text/javascript">
			setInterval(function () {document.getElementById("myButtonId").click();}, 5000);
			</script>
		</div>
	  </div>
	</div>
  </div>
  <!--****** End Basic Modal ******--> 
  
<!-- Bootstrap - Latest compiled and minified JavaScript -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#autoModal').modal('show');
    });
</script>
<?php  
	unset($_SESSION['danger']);  
	} 
?>


