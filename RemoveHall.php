<?php
include('dbconnect.php');
// get value of id that sent from address bar 
$hall=$_GET['Hall'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM hall WHERE Name='$hall'";
if ($conn->query($sql) === TRUE) {
echo '<script type="text/javascript"> 
alert("Hall has been removed.");
window.location = "HallList.php";
</script>';
}
else {
echo "Error deleting record: " . $conn->error;
}
// close connection 
$conn->close();
?>