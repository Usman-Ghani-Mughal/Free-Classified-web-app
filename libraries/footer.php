
<!-- footer -->
<div id="footer">
<div class="footer-image"></div>

    <div class="wrapper">
        <div class="footer-links-area">
            <div class="links-col">
                <h4>Assabuur.com</h4>
                <ul>
					<?php if($_SESSION['front_user_email']){ ?>
					<li>Welcome <b><?php echo $pro_first_name.' '.$pro_last_name; ?>!</b></li>
					<li><a href="index.php?page=ads&active">My account</a></li>
					<li><a href="logout.php">Logout</a></li>
					<?php }else{ ?>
					<li><a href="index.php?page=login">Login</a></li>
					<li><a href="index.php?page=register">Register Free Account</a></li>
					<?php }?>
					<li><a href="index.php?page=post_ad">Post Free Ad</a></li>
               </ul>
            </div>
			
            <div class="links-col">
                <h4>Help &amp; Information</h4>
                <ul>
                    <li><a href="index.php?page=contact_us">Contact us</a></li>
					<li><a href="index.php?page=contents&pid=1">Terms of Use</a></li>
					<li><a href="index.php?page=contents&pid=2">Privacy Policy </a></li>
					<li><a href="index.php?page=contents&pid=3">About us </a></li>
                </ul>
            </div>
			<div class="links-col">
				<h4>Follow us</h4>
				<ul>
					<li style='float:left;' ><a rel="nofollow" href="<?php echo $social['facebook']; ?>" target="_blank"><i class="fa fa-facebook-square fa-lg fa-fw" style="color: #3a5795;  font-size:40px; margin-top:3px;"></i> </a></li>
					<li style='float:left'><a rel="nofollow" href="<?php echo $social['google']; ?>" target="_blank"><i class="fa fa-google-plus-square fa-lg fa-fw" style="color: #e43b00; font-size:40px; margin-top:3px;"></i> </a></li>
					<li style='float:left'><a rel="nofollow" href="<?php echo $social['twitter']; ?>" target="_blank"><i class="fa fa-twitter-square fa-lg fa-fw" style="color: #00abb3; font-size:40px; margin-top:3px;"></i> </a></li>
					<li style='float:left'><?php echo $social['youtube']; ?></li>
				</ul>
				<br /><br /><br />
				<img src="assets/images/apple.png"><img src="assets/images/android.png" style="margin-left:10px;">
			</div>
		</div>
    </div>
</div>


	<div class="copyright">
		Copyright &copy; <?php echo date('Y'); ?> <strong>Assabuur.com</strong> - All Rights Reserved.
	</div>
