<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> KARIAH PANCHOR JAYA MOSQUE</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="sign_in.css">
<link href="https://fonts.googleapis.com/css2family=Roboto:ital,wght@0,400;0,00;1,700&display=swap" rel="stylesheet">
</head>
	<body>
	<div class="dropdwn">
	
	<nav>
		<img class="logo" src="img/logo.png" alt="">
	
		 <ul>
			 <li><a href="hom.html">Home</a></li>	
			 <li><a href="Sign_in.php">User</a></li>
			 <li><a href="LoginAdmin.php" style="background: #F7F7F7;">Admin</a></li>		
			 
		</ul>
		</nav>
	</div>
		
		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>

		<h5>&nbsp;</h5>
		
		<div class="container">
		<form class="form" id="login" method="post" action="CheckAdmin.php">

		<h1 class="form__title">Login</h1>
		  <?php if (isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error']; ?></p><?php }?>
		<div class="form__message form_message--error"></div>
		<div class="form__input-group">
			<input type="text" name="adminemail" class="form__input" autofocus placeholder="Email">
			<div class="form__input-error-message"></div>
		  </div>
			<div class="form__input-group">
			<input type="Password" name="adminpass" class="form__input" autofocus placeholder="Password">
			<div class="form__input-error-message"></div>
		  </div>
			
			<button class="form__button" type="submit" name="Submit" id="Submit" >Continue</button>
		  <p class="form__text">
			<a href="ForgotPassUser.php" class="form__link">Forgot your password?</a>
			</p>
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
