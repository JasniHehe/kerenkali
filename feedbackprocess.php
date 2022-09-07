<?php
include('dbconnect.php');
if (isset($_POST['Submit'])){
// Get values from form 
$username=$_POST['name'];
$useremail=$_POST['email'];
$feedback=$_POST['feedback'];
	
$sql="INSERT INTO feedback (name, email, feedback) VALUES( '$username', '$useremail', '$feedback')";
if ($conn->query($sql) === TRUE) 
{
 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You For Your Feedback')
    window.location.href='contact us.php?Email=$useremail';
    </SCRIPT>");		
}
else 
{
		echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>