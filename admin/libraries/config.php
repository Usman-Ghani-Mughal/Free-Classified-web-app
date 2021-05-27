<?php

	// Create connection
		$con = mysqli_connect("localhost", "root", "", "accounts");
	// Check connection
		if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
		}

?>