
	</div>
</div>	
<?php 
$getRow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM pages WHERE id='".$_GET['pid']."'"));
?>
<div class="wrapper wrapper-flash">
	<div class="breadcrumb">
        <div class="home-icon"><i class="fa fa-home"></i></div>
            <ul class="breadcrumb">
				<li class="first-child" ><a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a></li>
				<li class="last-child"><i class="fa fa-angle-right"></i> <span itemprop="title"><?= $getRow['title']; ?></span></li>
			</ul>
    </div>
</div>
<br />
<div class="wrapper" id="content">
        <div id="main">

		
<h3><?= $getRow['title']; ?></h3>
<?= $getRow['body']; ?>
		
<br />
<br />
<br />
<br />
	</div><!-- content -->
</div>