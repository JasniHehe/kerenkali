<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> CONTACT US</title>
	  <link rel="stylesheet" href="contact us.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

	</head>

<body>
	<?php
		include('dbconnect.php');
// get value of id that sent from address bar
$userEmail=$_GET['Email'];
?>
		<div class="dropdwn">
	
	<nav>
		<img class="logo" src="img/logo.png" alt="">
	
		 <ul>
			 <li><a href="UserHome.php?Email=<?php echo $userEmail ?>">Home</a></li>
			 <li><a href="UserPrayer.php?Email=<?php echo $userEmail ?>">Prayer Times</a></li>
			 <li><a href="UserEvent.php?Email=<?php echo $userEmail ?>">Event</a></li>		
			 
			 <li><a href="#">Booking <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="hall.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Hall</a></li>
			 <li><a href="court.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Court</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#.">Donate <i class="fas fa-caret-down"></i></a>	
			 <ul>
			 <li><a href="UserCharity.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Charity</a></li>
			 <li><a href="foodbank.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Foodbank</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#">My Booking <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="MyHall.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Hall</a></li>
			 <li><a href="MyCourt.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Court</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#.">My Donation <i class="fas fa-caret-down"></i></a>	
			 <ul>
			 <li><a href="MyCharity.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Charity</a></li>
			 <li><a href="MyFoodbank.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Foodbank</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="about us.php?Email=<?php echo $userEmail ?>">About Us</a></li>
			 <li><a style="background: #F7F7F7" href="contact us.php?Email=<?php echo $userEmail ?>">Contact Us</a></li>	
			 <li><a href="Sign_in.php">Sign Out</a></li>

		</ul>
		</nav>
	</div>
	
	<section class="contact">
	<div class="content">
		<h2>Contact Us</h2>
		<p>KARIAH PANCHOR JAYA MOSQUE WAS BUILT ON A SITE OF 2.5 HECTARES. THIS MOSQUE WAS ORIGINALLY FOLLOWING THE DESIGN OF MASJID SENALING BATU 46 WITH THE COST OF THE PROJECT APPROVED BY THE STATE GOVERNMENT AMOUNTING TO RM1.5 MILLION, BUT YAB DATO 'SERI UTAMA HJ MOHAMAD BIN HJ HASAN HAS AGREED TO INCREASE THE COST OF THE PROJECT TO RM3.3 MILLION WITH A CAPACITY OF 2000 PILGRIMS.THIS MOSQUE BEGAN TO BE USED UNOFFICIALLY ON 13 OCTOBER 2007 FOR THE SUNAT PRAYER OF HARI RAYA AIDILFITRI. THIS MOSQUE MANAGES FIVE SURAU UNDER ITS SUPERVISION.</p>
		</div>
		<div class="container">
		<div class="contactInfo">
		<div class="box">
			<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
			<div class="text">
			<h3>Address</h3>
				<p>Persiaran Semarak 3,<br> Taman Panchor Jaya,<br>70400 Seremban, <br>Negeri Sembilan</p>
			</div>
			</div>
			
			<div class="box">
			<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
			<div class="text">
			<h3>Phone</h3>
				<p>013-357 2277</p>
			</div>
			</div>
			
			<div class="box">
			<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
			<div class="text">
			<h3>Email</h3>
				<p>jasnihusaini7@gmail.com</p>
			</div>
			</div>
		</div>
			
			<div class="contactForm">
			<form class="form" id="feedback" method="post" action="feedbackprocess.php">
				<h2>Send Message</h2>
				<div class="inputBox">
				<input type="text" name="name" required="required">
					<span>Full Name</span>
				</div>
				
				<div class="inputBox">
				<input type="text" name="email" required="required">
					<span>Email</span>
				</div>
				
				<div class="inputBox">
				<textarea name="feedback" required="required"></textarea>
					<span>Type your Message...</span>
				</div>
				
				<div class="inputBox">
					<input type="submit" name="Submit" value="Send">
				</div>
				</form>
			</div>
		</div>
	</section>
	
	<!-- footer -->
	
	<section class="footer">
		<div class="icons">
			<a href="https://www.facebook.com/jasnihusaini" target="_blank" class="fab fa-facebook"></a>
			<a href="https://www.instagram.com/jasnihusaini/" target="_blank" class="fab fa-instagram"></a>	
			<p style="color:#BCBCBC; font-family: 'Ubuntu'; font-size: 12px">Artwork by Jasni Husaini | Powered by Dreamweaver</p>
		</div>	
	
	</section>
</body>
</html>
