<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
	<script src="fullcalendar/lib/jquery.min.js"></script>
	<script src="fullcalendar/lib/moment.min.js"></script>
	<script src="fullcalendar/fullcalendar.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cookie&family=Prata&display=swap"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;1,500&display=swap"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Allura&family=Josefin+Sans:ital,wght@1,300&display=swap"/>
		
<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        }
	}
 )}
)
</script>

<style>

		*{
		margin: 0;
	padding: 0;
	box-sizing: border-box;
	}
	
body {
    margin: 0;
    text-align: center;
    font-size: 12px;
    font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
}

#calendar {
    width: 800px;
    margin-left:auto;
	margin-right: auto;
background: linear-gradient(#bcbcbc, #9198e5);}

.response {
    height: 60px;
	margin-left:auto;
	margin-right: auto;
}

	
.dropdwn{
	margin: 0 auto;
}


nav{
	height: 90px;
	background: #F4E4A1;
	box-shadow: 0 10px 15px rgba(0,0,0,0.1);	
	font-family: 'Josefin Sans', sans-serif;
} 

.logo{
	padding: 10px 0 0 80px;
	width: 150px;
	height: auto;
}

nav ul{
	padding: 10px 0 0 0;
	margin: 0;
	float: right;
	margin-right: 30px;
}

nav ul li:hover{
		background: white;

}

nav ul li{
	position: relative;
	list-style: none;
	display: inline-block;
	z-index: 1;
}

nav ul li a{
	display: block;
	padding: 0 15px;
	color: black;
	text-decoration: none;
	line-height: 60px;
	font-size: 20px;
	text-align: center;
}

nav ul li a:hover{
	background: white;
	color: crimson;
	z-index: 1;
}

nav ul ul{
	position: absolute;
	top: 60px;
	display: none;
}

nav ul li:hover > ul{
	display: block;
}

nav ul ul li {
	width: 150px;
	float: none;
	display: list-item;
	position: relative;
}
	
.footer{
		margin-top: 40px;
}	
	
.fab {
  padding: 10px;
  font-size: 30px;
  color: white;
  text-decoration: none;
  padding-top: 50px;
  margin-left: 10px;
  margin-bottom: 20px;
  cursor: pointer;
}
.footer .icons a:hover{
	color: #504FAF;
}

.footer .icons{
	padding-top: 10px;
	padding-bottom: 20px;
	background-color: black;
	text-align: center;
}
</style>
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
			 <li><a style="background: #F7F7F7" href="UserEventt.php?Email=<?php echo $userEmail ?>">Event</a></li>		
			 
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
	<h1>&nbsp;</h1>

    <div class="response"></div>
    <div id='calendar'></div>
	
	<section class="footer">
		<div class="icons">
			<a href="https://www.facebook.com/jasnihusaini" target="_blank" class="fab fa-facebook"></a>
			<a href="https://www.instagram.com/jasnihusaini/" target="_blank" class="fab fa-instagram"></a>	
			<p style="color:#BCBCBC; font-family: 'Ubuntu'; font-size: 12px">Artwork by Jasni Husaini | Powered by Dreamweaver</p>
		</div>	
	
	</section>
</body>


</html>