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
				<b><?php echo $tempalert; ?></b>
			</center>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default btn-raised rippler rippler-default" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
  <!--****** End Basic Modal ******-->
<!-- Bootstrap - Latest compiled and minified JavaScript -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#autoModal').modal('show');
    });
</script>


