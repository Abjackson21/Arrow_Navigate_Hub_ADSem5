<?php

include '../config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM hospital_appointment WHERE AppointmentID = $id";

$result = mysqli_query($conn, $deletesql);

header("Location: hospitalappointlist.php");

?>