<?php 
session_start();
header("location: index.php?page=login");
session_destroy();
?>