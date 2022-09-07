<?php
include "dbconnect.php";

	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	
	 $sql1 = "SELECT * FROM `user` where email = '$email'";
	 $result1 = mysqli_query($conn, $sql1);
	 $usern = mysqli_fetch_array($result1);

	$sql = "SELECT name FROM user WHERE email = '$email'";

//echo "$sql";
$result = mysqli_query($conn, $sql);

$desc = $_POST['desc'];
$name = $_POST['name'];
$hall = $_POST['hall'];
$date = $_POST['date'];
$time = $_POST['time'];

	$dup = mysqli_query($conn, "SELECT * FROM event_booking WHERE date = '$date' AND time = '$time' AND hall = '$hall'");

		if(mysqli_num_rows($dup)>0){
	
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Booking on " .$date. " at " .$hall. " at " .$time. " is not available')
    window.location.href='hall.php?Email=$email';
    </SCRIPT>");
 }

else{
	$sql = "INSERT INTO event_booking(Email, Name, Date, Time, Hall, Description) VALUES 
	( '$email', '$name', '$date','$time', '$hall', '$desc')";
	
    $result = mysqli_query($conn, $sql);
	if($result == 1 && $time){
		
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Booked')
    window.location.href='hall.php?Email=$email';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
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
