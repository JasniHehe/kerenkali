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
			 
			 <li><a style="background: #F7F7F7" href="#">My Booking <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a style="background: #F7F7F7" href="MyHall.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Hall</a></li>
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
	
		<div class="kandungan" align="center">
<form method="post" name="form1" id="form1">
  <p style="text-align: center"> My Hall Booking List </p>
	<h3>&nbsp;</h3>
  <p align="center">
 Search Date : 
   <input type="text" name="date" id="date">
   <input type="submit" name="search" id="search" value="Search">
  </p>
	<h3>&nbsp;</h3>
  <table width="1086" height="53" border="1" cellpadding="0" cellspacing="0" align="center">
    <tbody>
      <tr>
        <td width="44" height="29" style="text-align: center">No</td>
        <td width="154" style="text-align: center">Email</td>
        <td width="149" style="text-align: center">Name</td>
		<td width="110" style="text-align: center">Date</td>
		<td width="126" style="text-align: center">Time</td>
		<td width="126" style="text-align: center">Hall</td>
		<td width="126" style="text-align: center">Description</td>
      </tr>
<?php
include('dbconnect.php');
//check either button search is clicked or not
$userEmail=$_GET['Email'];
if(isset($_POST['search']))
{
$date = $_POST['date'];
// Retrieve data from database
$sql="SELECT * FROM event_booking WHERE Email='$userEmail' and Date='$date'";
	$result = $conn->query($sql);
}
else
{
// Retrieve data from database
$sql="SELECT * FROM event_booking WHERE Email='$userEmail'";
$result = $conn->query($sql);
}
// Start looping rows in mysql database.
$i=0;
if ($result->num_rows > 0) {
 // output data of each row
while($rows = $result->fetch_assoc())
{
$i++;
?>
 <tr>
 <td height="20"><div align="center"><?php echo $i; ?>
   </div>
 </div></td>
	  <td><div align="center"><?php echo $rows['Email']; ?></div></td>
      <td><div align="center"><?php echo $rows['Name']; ?></div></td>
	  <td><div align="center"><?php echo $rows['Date']; ?></div></td>
	  <td><div align="center"><?php echo $rows['Time']; ?></div></td>
      <td><div align="center"><?php echo $rows['Hall']; ?></div></td>
	  <td><div align="center"><?php echo $rows['Description']; ?></div></td>
      </tr>
    
<?php
}
}
$conn->close();
?>
    
    </tbody>
  </table>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
</div>
</body>
</html>