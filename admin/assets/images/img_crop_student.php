<?php 
session_start();

error_reporting(0);

$img = $_GET['img'];

include ('image.inc.php');

create_thumbnail($img, 'students/'.$img, 300, 300);

$unlink	= unlink("$img");
if($unlink){
	$_SESSION['success'] = "Student Records Has Been Successfully Saved";	
	echo '<script>window.location.href = "../../index.php?page=student_records";</script>';
}
?>
<table width="100%" height="100%" border="0">
	<tr>
		<td align="center"  ><img src="loading.gif" width="100" /></td>
	</tr>
</table>