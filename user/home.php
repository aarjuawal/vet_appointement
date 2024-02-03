<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Veterinary Management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	


	
</head>

<body>
	<section class="header">
		<nav>
			<a href="home.php"><img src="images/logo.jpg"></a>
		
			<div class="links" >
				
		<ul>
			<span class="text-warning pe-2"><i></i>Hello,
                <?php 
                session_start();
            if(isset($_SESSION['user'])){
            echo $_SESSION['user'];
            echo "<li><a href='logout.php'>Logout</a></li>";


            }
            else{
                echo "<li><a href='Userlogin.php'>Login</a></li>";

            }
                 ?></span>
			
			
					<li><a href="home.php">Home</a></li>
		<li><a href="about.php">About Us</a></li>

		<li><a href="#">Doctor Login</a></li>
		<li><a href="../admin/login.php">Admin Login</a></li>

         </ul>
				
		    </div>
		   
		</nav>
	<div class="text">
		<div class="top-title">welcome to </div>
		<div class="main-title">PASA VETERINARY</div>
		<a href="appointment/select.php" class="Book">BOOk APPOINTMENT</a>
		
	</div>	
	</section>

	<!-- about us -->
	<section class="about">
		<h2>ABOUT US</h2>
	<div class="row">	
	<div class="about-col">
		<p>Vet for Your Pet, Veterinarian, Dr. Pranav Raj Joshi and Dr. Ekata Pandey at Vet for Your Pet are the best veterinarians in the Kathmandu Valley to care for your pets. They are committed to your pet’s health and well being. Vet for Your Pet excels in compassionate pet care and the science of veterinary medicine.
		Vet for Your Pet, Veterinarian, Dr. Pranav Raj Joshi and Dr. Ekata Pandey at Vet for Your Pet are the best veterinarians in the Kathmandu Valley to care for your pets. They are committed to your pet’s health and well being. Vet for Your Pet excels in compassionate pet care and the science of veterinary medicine.

</p>
</div>
<div class="about-col">
	<p>Vet for Your Pet, Veterinarian, Dr. Pranav Raj Joshi and Dr. Ekata Pandey at Vet for Your Pet are the best veterinarians in the Kathmandu Valley to care for your pets. They are committed to your pet’s health and well being. Vet for Your Pet excels in compassionate pet care and the science of veterinary medicine.

</p>
</div>
</div>
</section>


<!-- testimonials -->
<section class="testimonials">
	<h2> Customer Reviews</h2>
 	<p>Some of our Pet Owner have shared their expirence to us.</p>
	<div class="row">
		<div class="testimonial-col">
			<img src="images/person1.jpg">
			<div>
				<p>My pet jackson has recoverd so fast.</p>
				<h3>Muskan thapa</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				
			</div>
		</div>
		<div class="testimonial-col">
			<img src="images/person2.jpg">
			<div>
				<p>This is best vet in bhaktapur.</p>
				<h3>manasha laxmi gurung</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				
			</div>
		</div>
	</div>
</section>


<!-- call to action
	 -->
	 <section class="cta">
	 	<h2>Any querrys for booking</h2>
	 
	 	<a href="contact.php" class="contact">Contact Us</a>
	 	
	 </section>
 


<!--  footer -->
<section class="footer">
	<h4>know more about us:<h4>
		<ul>	
		<li>Bhaktapur</li>
		<li>Phone:98776644</li>
		<li>Email:pasavet@gmail.com</li>

		</ul>

	<div class="icons">
		
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-linkedin"></i>
		
	</div>
	<p></p>
</section>



</body>
</html>