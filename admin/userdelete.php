<?php

include '../config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM signup WHERE UserID = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:userlist.php");

?>