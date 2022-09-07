<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
	 <link rel="stylesheet" href="about us.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0.500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
			 
			 <li><a style="background: #F7F7F7" href="about us.php?Email=<?php echo $userEmail ?>">About Us</a></li>
			 <li><a href="contact us.php?Email=<?php echo $userEmail ?>">Contact Us</a></li>	
			 <li><a href="Sign_in.php">Sign Out</a></li>

		</ul>
		</nav>
	</div>
	
	<section class="about">
		<div class="main">
		<img src="img/sojid.jpg" alt="">
			
			<div class="about-text">
				<p>&nbsp;</p>
			<h1> About Us</h1>
				<h5>Kariah Panchor Jaya Mosque</h5>
				<p>Dibina atas tapak seluas 2.5 hektar <br>
Boleh menampung 2000 jemaah dalam sesuatu masa <br>
Kos pembinaan RM3.6 juta<br>
Mesyuarat Ahli Jawatankuasa Penaja dengan Jabatan Agama Islam pada 23 Mac 2003<br>
Pengisytiharan rasmi Solat Jumaat oleh YB Mufti Negeri Sembilan Sahibus Samahah Dato' Hj. Mohd Murtadza Hj Ahmad pada 27 Disember 2007<br>
Perasmian bangunan disempurnakan oleh YAB Dato' Seri Utama Hj Mohamad Hj Hasan Menteri Besar Negeri Sembilan pada 5 Mac 2008 </p>
			</div>
			
		</div>
	
	</section>

	<div class="container">
				<div class="box">
		<h2>01</h2>
			<h3>BOOKING</h3>
			<p> Provide a futsal court and hall that can be book to make an event</p>
		</div>
		
				<div class="box">
		<h2>02</h2>
			<h3>CHARITY</h3>
			<p> Generosity and helpfulness especially toward the needy or suffering using the donation collected.</p>
		</div>
		
				<div class="box">
		<h2>03</h2>
			<h3>TALK</h3>
			<p> Provide islamic talk where we invite special guest. </p>
		</div>
	</div>
		
	<div class="wrapper">
		<h1>Organization Members</h1>
			
		<div class="team">
			<div class="team_member">
			<h3>Hj Wan Abdullah Hj Wan Su</h3>
				<p class="role">NAZIR</p>
			</div>
			
			<div class="team_member">
			<h3>Hj Abdullah Hj Talib</h3>
				<p class="role">NAZIR</p>
			</div>
			
			<div class="team_member">
			<h3>Hj Wan Abdullah Hj Wan Su</h3>
				<p class="role">TIMBALAN NAZIR</p>
			</div>
			
			<div class="team_member">
			<h3>Mohd Saleh Ibrahim</h3>
				<p class="role">SETIAUSAHA</p>
			</div>
			
			<div class="team_member">
			<h3>Md Din Dolah</h3>
				<p class="role">PENOLONG SETIAUSAHA</p>
			</div>
			
			<div class="team_member">
			<h3>Azmi Mohd Yusof</h3>
				<p class="role">BENDAHARI </p>
			</div>
			
			<div class="team_member">
			<h3>Tn.Hj.Dahalan Lahasan</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Hj.Ab Manan b.Hj Ab.Majid</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Hj.Md.Ridzuan Md Muhiyuddin</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Kdr (B) Hj  Abdul Majid Hj.Hassan</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Hjh Siti Nor bt Daud</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Hj Omar Othman</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Hjh Robiah bt Hj Abu Samah</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Zahari Hj Rashid</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Nawawi Othman</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Pn.Hamidah Mohd Noor</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>Hj.Zubir b.Hj.Dahari</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Sahrom .Yasin</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Ramlan b.Salih</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Mohd Salleh b.Hassan</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Mohd Shaidali @ Johari Ahmad</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Muhammad Khalid b. Paimon</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Mohamad b.Ahmad</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			
			<div class="team_member">
			<h3>En.Mokhtar b. Sani</h3>
				<p class="role">AHLI JAWATANKUASA</p>
			</div>
			<p>&nbsp;</p>
		</div>
	</div>
	
	<div class="location">
	<h1>Visit Kariah Panchor Jaya Mosque</h1>
		<div class="mapBox">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.2846807658143!2d101.9982223153279!3d2.731654056337565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdde167d713215%3A0xf137bfa8c12a79f4!2sMasjid%20Kariah%20Panchor%20Jaya!5e0!3m2!1sen!2smy!4v1644313395628!5m2!1sen!2smy" allowfullscreen="" loading="lazy"></iframe>
		</div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
	</div>
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
