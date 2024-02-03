<?php
	$con = mysqli_connect('localhost','root','','pasavet')or die('Unable to connect');
	$email = $_POST["email"];
	$password = $_POST["password"];
	$sql ="SELECT * FROM admin WHERE email = '$email' AND password = '$password' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	session_start();
	if(is_array($row)){
		$_SESSION['admin'] = $row['email'];
		
		echo"
		<script>
		alert('Login sucessful');
		window.location.href='index.php'
		</script>
		";
	}else{
		echo"
		<script>
		alert('Invalid username/password');
		window.location.href='login.php'
		</script>
		";
	}
	
?>