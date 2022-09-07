<?php
include('dbconnect.php');
// get value of id that sent from address bar 
$list=$_GET['id'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM court_booking WHERE id='$list'";
if ($conn->query($sql) === TRUE) {
echo '<script type="text/javascript"> 
alert("Court booking has been removed.");
window.location = "AdminCourtBooking.php";
</script>';
}
else {
echo "Error deleting record: " . $conn->error;
}
// close connection 
$conn->close();
?>