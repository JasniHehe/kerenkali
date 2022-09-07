<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testa";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>