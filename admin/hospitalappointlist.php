<?php
    session_start();
    include '../config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArroWwi - Payment</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<!-- css for table and search bar -->
	<link rel="stylesheet" href="./css/roombook.css">

</head>
<body>
	<div class="searchsection">
        <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
    </div>

    <div class="roombooktable" class="table-responsive-xl">
        <?php
            $appointmentsql = "SELECT * FROM hospital_appointment";
            $appointmentresult = mysqli_query($conn, $appointmentsql);

            $nums = mysqli_num_rows($appointmentresult);
        ?>
        <table class="table table-bordered" id="table-data">
            <thead>
                <tr>
                    <th scope="col">AppointmentID</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Patient Email</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Reason</th>
                </tr>
            </thead>

            <tbody>
            <?php
            while ($res = mysqli_fetch_array($appointmentresult)) {
            ?>
                <tr>
                    <td><?php echo $res['AppointmentID'] ?></td>
                    <td><?php echo $res['PatientName'] ?></td>
                    <td><?php echo $res['PatientEmail'] ?></td>
                    <td><?php echo $res['AppointmentDate'] ?></td>
                    <td><?php echo $res['Reason'] ?></td>
                    <td class="action">
						<a href="appointmentdel.php?id=<?php echo $res['AppointmentID']?>"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>

<script src="paymentscript.js"></script>

</html>