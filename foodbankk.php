<?php
include "dbconnect.php";
if(isset($_POST['Submit'])){
	
	$email = $_POST['email'];
	$name = $_POST['name'];
	$item = $_POST['item'];
	$amount = $_POST['amount'];
	
		$sql="INSERT INTO foodbank_donater (DonaterEmail, DonaterName, Amount, Products) VALUES('$email', '$name', '$amount', '$item')";
	
		if ($conn->query($sql) === TRUE) 
		{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You For Your Donation')
    window.location.href='foodbank.php?Email=$email';
    </SCRIPT>");
		}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>

