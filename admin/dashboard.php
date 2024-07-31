<?php
session_start();
include '../config.php';

// roombook
$roombooksql = "Select * from roombook";
$roombookre = mysqli_query($conn, $roombooksql);
$roombookrow = mysqli_num_rows($roombookre);

// staff
$usersql = "Select * from signup";
$userre = mysqli_query($conn, $usersql);
$userrow = mysqli_num_rows($userre);

// Complaint
$compsql = "Select * from complaints";
$compre = mysqli_query($conn, $compsql);
$totcomp = mysqli_num_rows($compre);

// hostelbook
$dormsql = "Select * from hostel_booking";
$dormre = mysqli_query($conn, $dormsql);
$dormrow = mysqli_num_rows($dormre);

// appointment
$appointsql = "Select * from hospital_appointment";
$appointre = mysqli_query($conn, $appointsql);
$appointrow = mysqli_num_rows($appointre);



//roombook roomtype
$chartroom1 = "SELECT * FROM roombook WHERE RoomType='Superior Room'";
$chartroom1re = mysqli_query($conn, $chartroom1);
$chartroom1row = mysqli_num_rows($chartroom1re);

$chartroom2 = "SELECT * FROM roombook WHERE RoomType='Deluxe Room'";
$chartroom2re = mysqli_query($conn, $chartroom2);
$chartroom2row = mysqli_num_rows($chartroom2re);

$chartroom3 = "SELECT * FROM roombook WHERE RoomType='Guest House'";
$chartroom3re = mysqli_query($conn, $chartroom3);
$chartroom3row = mysqli_num_rows($chartroom3re);

$chartroom4 = "SELECT * FROM roombook WHERE RoomType='Single Room'";
$chartroom4re = mysqli_query($conn, $chartroom4);
$chartroom4row = mysqli_num_rows($chartroom4re);

?>
<!-- morris profit -->
<?php
$query = "SELECT * FROM payment";
$result = mysqli_query($conn, $query);
$chart_data = '';
$tot = 0;
while ($row = mysqli_fetch_array($result)) {
    $chart_data .= "{ date:'" . $row["cout"] . "', profit:" . $row["finaltotal"] * 10 / 100 . "}, ";
    $tot = $tot + $row["finaltotal"] * 10 / 100;
}

$chart_data = substr($chart_data, 0, -2);

include 'dashboard.html';
?>
