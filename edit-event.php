<?php
require_once "dbconnect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sqlUpdate = "UPDATE table_events SET title='" . $title . "',start='" . $start . "',end='" . $end . "' WHERE id='" . $id;

?>