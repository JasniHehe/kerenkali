<?php
include('dbconnect.php');
// get value of id that sent from address bar 
$item=$_GET['item'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM product WHERE item='$item'";
if ($conn->query($sql) === TRUE) {
echo '<script type="text/javascript"> 
alert("Product has been removed.");
window.location = "ProductList.php";
</script>';
}
else {
echo "Error deleting record: " . $conn->error;
}
// close connection 
$conn->close();
?>