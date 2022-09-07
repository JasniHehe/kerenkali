<?php
include "dbconnect.php";
if(isset($_POST['Submit'])){
	
	$email = $_POST["email"];
	$name = $_POST["name"];
	
		$sql="INSERT INTO charity_donater (name, email, amount) VALUES('$name', '$email', '10.00')";
	
	if (empty($name)){
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please Insert Your Name')
	    window.location.href='UserCharity.php?Email=$email';
    </SCRIPT>");		exit();
	}
		else if ($conn->query($sql) === TRUE) 
		{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You For Your Donation')
    window.location.href='UserCharity.php?Email=$email';
    </SCRIPT>");		
		}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>

