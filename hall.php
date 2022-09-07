<?php
//connect to mysql database
$connection = mysqli_connect("localhost","root","","it project") or die("Error " . mysqli_error($connection));

//fetch data from database
$sql = "select name from hall";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> KARIAH PANCHOR JAYA MOSQUE</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="hall.css">
	<link href="https://fonts.googleapis.com/css2family=Roboto:ital,wght@0,400;0,00;1,700&display=swap" rel="stylesheet">

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
			 
			 <li><a style="background: #F7F7F7" href="#">Booking <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a style="background: #F7F7F7" href="hall.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Hall</a></li>
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
			 <li><a href="Sign_in.php">Sign In</a></li>

		</ul>
		</nav>
	</div>
		
		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
		
		<div class="container">
		<form class="form" id="createAccount" method="post" action="bookhall.php">
		<h1 class="form__title">Book Hall Now</h1>
		<div class="form__message form_message--error"></div>
					
			<div class="form__input-group">
			<input type="text" class="form__input" name="email" value="<?php echo $userEmail ?>" readonly>
			<div class="form__input-error-message"></div>
				</div>
			
			<div class="form__input-group">
			<input type="text" class="form__input" name="name" autofocus placeholder="Name">
			<div class="form__input-error-message"></div>
				</div>
			
			<div class="form__input-group">
			<input type="text" class="form__input" name="desc" autofocus placeholder="Description">
			<div class="form__input-error-message"></div>
				</div>
			
			
			<div class="form__input-group">
			<input style="display: block;width: 100%;padding: 0.75rem;box-sizing: border-box;border-radius: 4px;border: 1px solid #dddddd;outline: none;background: #eeeeee;transition: background 0.2s, border-color 0.2s;" list="hall" name="hall" autofocus placeholder="Hall">
  			<datalist id="hall">
        <?php while($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </datalist>
			<div class="form__input-error-message"></div>
		  </div>
			
			<div class="form__input-group">
			<input type="date" id="date" class="form__input" name="date" autofocus placeholder="Select Your Date">
			<div class="form__input-error-message"></div>
		  </div>
			
			<div class="form__input-group">
			<input type="time" id="time" class="form__input" name="time" autofocus placeholder="Select Your Time">
			<div class="form__input-error-message"></div>
		  </div>
			
			<button class="form__button" type="submit" name="Submit">Continue</button>
		</form>
		</div>
	
		<section class="footer">
		<div class="icons">
			<a href="https://www.facebook.com/jasnihusaini" target="_blank" class="fab fa-facebook"></a>
			<a href="https://www.instagram.com/jasnihusaini/" target="_blank" class="fab fa-instagram"></a>	
			<p style="color:#BCBCBC; font-family: 'Ubuntu'; font-size: 12px">Artwork by Jasni Husaini | Powered by Dreamweaver</p>
		</div>	
	
	</section>

</body>
</html>
