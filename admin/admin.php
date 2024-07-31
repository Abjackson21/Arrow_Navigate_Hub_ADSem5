<?php
include '../config.php';
session_start();

$usermail = "";
$usermail = $_SESSION['usermail'];
if ($usermail == true) {

} else {
  header("location: http://localhost/hotelmanage_system/index.php");
}

// Include the HTML content
include 'admin.html';
?>


