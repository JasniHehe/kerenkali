<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> KARIAH PANCHOR JAYA MOSQUE</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="AdminHallBooking.css">
	<link href="https://fonts.googleapis.com/css2family=Roboto:ital,wght@0,400;0,00;1,700&display=swap" rel="stylesheet">
</head>

<body>
		
	<div class="dropdwn">
	
	<nav>
		<img class="logo" src="img/logo.png" alt="">
	
		 <ul>
			 <li><a href="AdminHome.php?Email=<?php echo $adminemail ?>">Home</a></li>
			 <li><a href="AdminEvent.php?Email=<?php echo $adminemail ?>">Event</a></li>		
			 
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
			 
			 <li><a style="background: #F7F7F7" href="AdminFeedback.php?Email=<?php echo $userEmail ?>">Feedback</a></li>	
			 <li><a href="LoginAdmin.php">Sign Out</a></li>

		</ul>
		</nav>
	</div>
	<h1>&nbsp;</h1>
	<h1>&nbsp;</h1>
	
		<div class="kandungan" align="center">
<form method="post" name="form1" id="form1">
  <p style="text-align: center"> Total Charity Amount </p>
	<h3>&nbsp;</h3>
	<h3>&nbsp;</h3>
  <table width="1086" height="53" border="1" cellpadding="0" cellspacing="0" align="center">
    <tbody>
      <tr>
        <td width="44" height="29" style="text-align: center">No</td>
        <td width="154" style="text-align: center">Name</td>
		<td width="154" style="text-align: center">Action</td>
      </tr>
<?php
include('dbconnect.php');
// Retrieve data from database
$sql="SELECT Products, SUM(Amount)FROM foodbank_donater GROUP BY Products";
$result = $conn->query($sql);

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
	  <td><div align="center"><?php echo $result?></div></td>
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
  <button class="form_btn" style="width: 15%;padding: 1rem 2rem;font-weight: bold;font-size: 1rem;color: #ffffff;border: none;border-radius: 4px;outline: pointer;background: #009579;margin-bottom: 1rem;" type="submit" name="Submit" onclick="window.location.href='TambahProduct.php'">Insert New Product</button>
</div>


</body>
</html>