<?php
include "dbconnect.php";

	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	
	 $sql1 = "SELECT * FROM `user` where email = '$email'";
	 $result1 = mysqli_query($conn, $sql1);
	 $usern = mysqli_fetch_array($result1);

	$sql = "SELECT name FROM user WHERE email = '$email'";

//echo "$sql";
$result = mysqli_query($conn, $sql);

$name = $_POST['name'];
$court = $_POST['court'];
$date = $_POST['date'];
$time = $_POST['time'];

	$dup = mysqli_query($conn, "SELECT * FROM court_booking WHERE date = '$date' AND time = '$time' AND court = '$court'");

		if(mysqli_num_rows($dup)>0){
	
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Booking on " .$date. " at " .$court. " at " .$time. " is not available')
    window.location.href='court.php?Email=$email';
    </SCRIPT>");
 }

else{
	$sql = "INSERT INTO court_booking(Email, Name, court, Date, Time) VALUES 
	( '$email', '$name', '$court','$date', '$time')";
	
    $result = mysqli_query($conn, $sql);
	if($result == 1 && $time){
		
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Booked')
    window.location.href='court.php?Email=$email';
    </SCRIPT>");
	}
   else if($time == 0){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please select time')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>"); 
   }
 
	else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Book Failed')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
}

$conn->close();
?>
