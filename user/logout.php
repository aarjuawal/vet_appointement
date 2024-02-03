<?php 
session_start();
$_SESSION["customer_id"] = '';
session_destroy();
header("Location:home.php");
?>
