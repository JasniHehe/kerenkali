<?php
include('dbconnect.php');
if (isset($_POST['Submit'])){
// Get values from form 
$useremail=$_POST['email'];
$userpass=$_POST['pass'];
$newpass=$_POST['pass2'];

	
$sql1="UPDATE admin SET Password='$userpass' WHERE Email='$useremail'";
	
if ($conn->query($sql1) === TRUE) {
echo '<script type="text/javascript"> 
alert("User information updated.");
window.location = "LoginAdmin.php";
</script>';
}
else {
echo "Error updating record: " . $conn->error;
} }
$conn->close();
?>