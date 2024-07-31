<?php

include '../config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM hostel_booking WHERE BookingID = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:hostelbooklist.php");

?>