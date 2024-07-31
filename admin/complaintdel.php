<?php

include '../config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM complaints WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:complaints.php");

?>