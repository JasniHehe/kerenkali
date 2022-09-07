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
			 <li><a href="AdminHome.php">Home</a></li>
			 <li><a href="AdminEvent.php">Event</a></li>
			 <li><a href="UserList.php">User</a></li>
			 
			 <li><a style="background: #F7F7F7" href="#">Hall <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="AdminHallBooking.php" style="background-color:white;">Booking List</a></li>
			 <li><a style="background: #F7F7F7" href="HallList.php" style="background-color:white;">Hall List</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#">Court <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="AdminCourtBooking.php" style="background-color:white;">Booking List</a></li>
			 <li><a href="CourtList.php" style="background-color:white;">Hall List</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#">Charity <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="CharityDonater.php" style="background-color:white;">Donater</a></li>
			 <li><a href="CharityTotal.php" style="background-color:white;">Total Amount</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#">Foodbank <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="FoodbankDonater.php" style="background-color:white;">Donater</a></li>
			 <li><a href="ProductAmount.php" style="background-color:white;">Total Amount</a></li>
			 <li><a href="ProductList.php" style="background-color:white;">Products List</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="AdminFeedback.php">Feedback</a></li>	
			 <li><a href="LoginAdmin.php">Sign Out</a></li>

		</ul>
		</nav>
	</div>
	<h1>&nbsp;</h1>
	<h1>&nbsp;</h1>
	
		<div class="kandungan" align="center">
<form method="post" name="form1" id="form1">
  <p style="text-align: center"> Hall List </p>
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
$sql="SELECT * FROM hall";
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
	  <td><div align="center"><?php echo $rows['Name']; ?></div></td>
        <td><div align="center"><a href="RemoveHall.php?Hall=<?php echo $rows['Name']; ?>">Delete</a></div></td>
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
  <button class="form_btn" style="width: 15%;padding: 1rem 2rem;font-weight: bold;font-size: 1rem;color: #ffffff;border: none;border-radius: 4px;outline: pointer;background: #009579;margin-bottom: 1rem;" type="submit" name="Submit" onclick="window.location.href='TambahHall.php'">Insert New Hall</button>
</div>


</body>
</html>