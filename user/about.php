<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Pasa Veterinary</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    
</head>
<body>
    <section class=" sub-header">
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
    <h1>About Us</h1>
</section>
    <!-- About Us Content -->
    <section class="about-us">
    	<div class="row">
    		<div class="about-col">
    			<h1>The Oldest Vet In Bhaktapur</h1>
    			<p>We are the Oldest Vet giving the best service in the town.This vet was established in 2041B.S.It is the oldest veterinaryof Bhaktapur.<br><br>
                We are well known for a great pet services.The main motto of Pasa Veterinary is to provide"The best Pet services."<br><br>
                  The mission of the Pasa Veterinary is to distribute pet service all over Nepal but in initial phases it is more focused on Services inside the Bhaktapur.It is a well-marketed organization.The primary goal is to provide quality pet service and delivery of the pet products.</p>
            <a href="services.html" class="Explore">Explore Now</a>


    		</div>
    		<div class="about-col">
    			<img src="images/image4.jpg">

    		</div>
    	</div>
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