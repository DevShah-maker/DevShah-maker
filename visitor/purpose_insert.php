<?php

include 'db.php';
// echo $_GET['sno'];
$pov      = $_GET['purpose_of_visit'];
$username = $_GET['username'];
// echo $_GET['quantity'];

$sql = "UPDATE `visitor_info` SET `purpose` = '$pov' WHERE `username` = '$username'";
$result = $conn->query($sql);

header("Location: visitor_confirm.php");

?>