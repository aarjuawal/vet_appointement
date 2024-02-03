<?php
	$con = mysqli_connect('localhost','root','','pasavet')or die('Unable to connect');
	$customer_name = $_POST["customer_name"];
	$customer_password = $_POST["customer_password"];
	$sql ="SELECT * FROM customer WHERE customer_name = '$customer_name' AND customer_password = '$customer_password' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	session_start();
	
	if(is_array($row)){
		$_SESSION['user'] = $row['customer_name'];
		
		echo"
		<script>
		alert('Login sucessful');
		window.location.href='home.php'
		</script>
		";
	}else{
		echo"
		<script>
		alert('Invalid username/password');
		window.location.href='Userlogin.php'
		</script>
		";
	}
	
?>