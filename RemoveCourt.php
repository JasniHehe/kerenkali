<?php
include('dbconnect.php');
// get value of id that sent from address bar 
$court=$_GET['Court'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM court WHERE Name='$court'";
if ($conn->query($sql) === TRUE) {
echo '<script type="text/javascript"> 
alert("Court has been removed.");
window.location = "CourtList.php";
</script>';
}
else {
echo "Error deleting record: " . $conn->error;
}
// close connection 
$conn->close();
?>