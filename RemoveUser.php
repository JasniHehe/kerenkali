<?php
include('dbconnect.php');
// get value of id that sent from address bar 
$list=$_GET['email'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM user WHERE email='$list'";
if ($conn->query($sql) === TRUE) {
echo '<script type="text/javascript"> 
alert("User has been removed.");
window.location = "UserList.php";
</script>';
}
else {
echo "Error deleting record: " . $conn->error;
}
// close connection 
$conn->close();
?><!doctype html>
