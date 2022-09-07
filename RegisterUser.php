<?php
include('dbconnect.php');
if (isset($_POST['Submit'])){
// Get values from form 
$username=$_POST['name'];
$useremail=$_POST['email'];
$userphone=$_POST['phone'];
$userpass=$_POST['password'];
$useraddress=$_POST['address'];
	
$sql="INSERT INTO user (name, password, email, phone, address) VALUES( '$username', '$userpass', '$useremail', '$userphone', '$useraddress')";
if ($conn->query($sql) === TRUE) 
{
 echo '<script type="text/javascript">
alert("Record successfully saved.");
window.location = "Sign_in.php";
</script>'; 
}
else 
{
		echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>