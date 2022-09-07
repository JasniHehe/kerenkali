<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prayer Times</title>
	
	  <link rel="stylesheet" href="prayerr.css">
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
			 <li><a style="background: #F7F7F7" href="UserPrayer.php?Email=<?php echo $userEmail ?>">Prayer Times</a></li>
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
			 <li><a href="contact us.php?Email=<?php echo $userEmail ?>">Contact Us</a></li>	
			 <li><a href="Sign_in.php">Sign Out</a></li>

		</ul>
		</nav>
	</div>
	
	<div class="waktu" style="background:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(img/bg3.jpeg); background-size: cover; width: 100%; height: 100vh; background-position:center;" >
		<h3>&nbsp;</h3>
	<h1 style="font-size: 70px; color: #fff;">Prayer Times</h1>
	<iframe id="iframe" title="prayerWidget" class="widget" style=" height: 358px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/1734810/shafi/13/0/20.0/18.0"> </iframe>
	</div>
	
	<div class="bg" style="background:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(img/bg1.jpg); background-size: cover; width: 100%; height: 100vh; background-position:center;" >
		
	<div class="info" style="width: 100%;margin-top:20%;transform: translateY(-50%);text-align: center;color: #fff;">
			
	<h1 style="font-size: 70px;margin-top:80px;"> Praying Salah on Time</h1>
	<p> The earlier you pray and if you pray on time, Allah will guide you and shall refrain you from sinning.</p>
	
	<p style="margin:20px auto;font-weight:400;line-height: 25px;"> "Abdullah asked the Prophet Muhammad (SAW) "Which deed is the dearest to Allah?" He replied, "To offer the prayers at their early stated fixed times.".
	<br> (Sahih al-Bukhari 527)</p>
			
			<p style="margin-top:20px auto;font-weight:400;line-height: 25px;">Hz. Nawfal bin Muawiya (r.a.):  “A person who does not perform a prayer on time is like someone whose family and property were removed.”
<br> (Ibn Hibban)</p>

</div>	
	</div>
	
	<div class="bg1" style="background:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(img/bg2.jpg); background-size: cover; width: 100%; height: 100vh; background-position:center;" >
	
	<div class="benefits" style="width: 100%;transform: translateY(-50%);text-align: center;color: #fff;"> 
		
		<h1 style="font-size: 70px;">Benefits of Salah</h1>

		<p style="margin:20px auto;font-weight:400;line-height: 25px;"> The Prophet (SAW) said: “The key to Paradise is prayer; the key to prayer is wudu (ablution).” 
<br> (Musnad Ahmad)</p>
		
			<p style="margin:20px auto;font-weight:400;line-height: 25px;"> {O you who believe! Seek help in patience and As-Salat (the prayer). Truly! Allah is with As-Sabirin (the patient ones, etc.)}<br>
يَا أَيُّهَا الَّذِينَ آمَنُوا اسْتَعِينُوا بِالصَّبْرِ وَالصَّلَاةِ ۚ إِنَّ اللَّـهَ مَعَ الصَّابِرِينَ
<br> (Al-Baqara 2:153)</p>

		</div>
	</div>
	
	<section class="footer">
		<div class="icons">
			<a href="https://www.facebook.com/wak.jas.792/" target="_blank" class="fab fa-facebook"></a>
			<a href="https://www.instagram.com/jasnihusaini/" target="_blank" class="fab fa-instagram"></a>	
			<p style="color:#BCBCBC; font-family: 'Ubuntu'; font-size: 12px">Artwork by Jasni Husaini | Powered by Dreamweaver</p>
		</div>	
	
	</section>
	
</body>
</html>
