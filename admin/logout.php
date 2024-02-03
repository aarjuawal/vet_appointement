<?php 
session_start();
$_SESSION["admin_id"] = '';
session_destroy();
header("Location:../user/home.php");
?>
