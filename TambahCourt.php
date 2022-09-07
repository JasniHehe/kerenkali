<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Insert Court</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <link rel="stylesheet" href="TambahHall.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	</head>
	<body>
	<div class="dropdwn">
	
	<nav>
		<img class="logo" src="img/logo.png" alt="">
	
		 <ul>
			 <li><a style="background: #F7F7F7" href="AdminHome.php">Home</a></li>
			 <li><a href="AdminEvent.php">Event</a></li>
			 <li><a href="UserList.php">User</a></li>
			 
			 <li><a href="#">Hall <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="AdminHallBooking.php" style="background-color:white;">Booking List</a></li>
			 <li><a href="HallList.php" style="background-color:white;">Hall List</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#.">Donate <i class="fas fa-caret-down"></i></a>	
			 <ul>
			 <li><a href="UserCharity.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Charity</a></li>
			 <li><a href="foodbank.php?Email=<?php echo $userEmail ?>" style="background-color:white;">Foodbank</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="AdminFeedback.php">Feedback</a></li>	
			 <li><a href="LoginAdmin.php">Sign Out</a></li>

		</ul>
		</nav>
	</div>
<h1>&nbsp;</h1>
		<h1>&nbsp;</h1>

      <form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p>Insert New Court</p>
    <table width="400" height="200" border="1" cellpadding="0" cellspacing="1">
      <tr>
        <td>Court Name:</td>
        <td><label for="textfield2"></label>
        <input name="courtname" type="text" id="textfield2" size="60" /></td>
      </tr>
      
<?php
include('dbconnect.php');
if (isset($_POST['Submit'])){
// Get values from form 
$courtname=$_POST['courtname'];

$sql="INSERT INTO court(name) VALUES( '$courtname')";
if ($conn->query($sql) === TRUE) 
{
 echo '<script type="text/javascript">
alert("Record successfully saved.");
window.location = "CourtList.php";
</script>'; 
}
else 
{
		echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
    </table>
	  <p>&nbsp;</p>
    <p>
      <input style="width: 10%;padding: 1rem 2rem;font-weight: bold;font-size: 1rem;color: #ffffff;border: none;border-radius: 4px;outline: pointer;background: #009579;margin-bottom: 1rem;"  type="submit" name="Submit" id="button" value="Add" />
    </p>
  </div>
</form>
      <script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  $('.menu-toggle').click(function(){
	  $('.menu-toggle').toggleClass('active')
	   $('nav').toggleClass('active')
  })
  })
  </script>
</body>
</html>
