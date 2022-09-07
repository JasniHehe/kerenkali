<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> KARIAH PANCHOR JAYA MOSQUE</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="Charity.css">
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
			 
			 <li><a href="#">Booking <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="hall.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Hall</a></li>
			 <li><a href="court.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Court</a></li>
			 </ul>
			 </li>
			 
			 <li><a style="background: #F7F7F7" href="#.">Donate <i class="fas fa-caret-down"></i></a>	
			 <ul>
			 <li><a style="background: #F7F7F7" href="UserCharity.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Charity</a></li>
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
		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
		<h5>&nbsp;</h5>
		<script src="https://www.paypal.com/sdk/js?client-id=AbBJ7pxbcJue3hfJwZnBDd5k83eTsFbx7ldL7_yEdg1C-fEWs31asnvWvZOvKndR6wBk9EPViDJzhpom&currency=MYR"></script>
		
		<div class="container">
		<form class="form" id="charity" method="post" action="charityprocess.php">
		<h1 class="form__title">Donate Now</h1>
		<div class="form__message form_message--error"></div>
					

			<div class="form__input-group">
			<input type="text" class="form__input" id="name" name="name" autofocus placeholder="Name">
			<div class="form__input-error-message"></div>
				</div>
			
			<div class="form__input-group">
			<input type="text" class="form__input" name="email" value="<?php echo $userEmail ?>" readonly>
			<div class="form__input-error-message"></div>
				</div>
			
			<label class="amount"><strong>AMOUNT : RM 10.00</strong></label>
			
			<button class="form__button" type="submit" name="paypal">
				
			<div id="paypal-button-container">
			<script>
      		paypal.Buttons({

        	// Sets up the transaction when a payment button is clicked
        	createOrder: function(data, actions) {
          	return actions.order.create({
            purchase_units: [{
              amount: {
                value: '10.00' 
				// Can reference variables or functions. Example: `value: document.getElementById('...').value`
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
          onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {


            // Successful capture! For dev/demo purposes:
			  window.alert("Please click continue to confirm your donation");
			  // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
		
      }).render('#paypal-button-container');
				
			</script>
				</div>
				</button>
						<button class="form_btn" style="width: 100%;padding: 1rem 2rem;font-weight: bold;font-size: 1rem;color: #ffffff;border: none;border-radius: 4px;outline: pointer;background: #009579;margin-bottom: 1rem;" type="submit" name="Submit">Continue</button>

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
