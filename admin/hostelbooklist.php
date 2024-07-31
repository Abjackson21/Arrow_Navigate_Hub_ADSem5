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
            $dormbooksql = "SELECT * FROM hostel_booking";
            $bookresult = mysqli_query($conn, $dormbooksql);

            $nums = mysqli_num_rows($bookresult);
        ?>
        <table class="table table-bordered" id="table-data">
            <thead>
                <tr>
                    <th scope="col">Booking Id</th>
                    <th scope="col">Hostel ID</th>
                    <th scope="col">Room Id</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check out</th>
                    <th scope="col">Num of Nights</th>
                    <th scope="col">G name</th>
                    <th scope="col">G email</th>
                </tr>
            </thead>

            <tbody>
            <?php
            while ($res = mysqli_fetch_array($bookresult)) {
            ?>
                <tr>
                    <td><?php echo $res['BookingID'] ?></td>
                    <td><?php echo $res['HostelID'] ?></td>
                    <td><?php echo $res['RoomID'] ?></td>
                    <td><?php echo $res['CheckIn'] ?></td>
                    <td><?php echo $res['CheckOut'] ?></td>
                    <td><?php echo $res['NumberOfNights'] ?></td>
                    <td><?php echo $res['GuestName'] ?></td>
                    <td><?php echo $res['GuestEmail'] ?></td>
                    <td class="action">
						<a href="dormbookdel.php?id=<?php echo $res['BookingID']?>"><button class="btn btn-danger">Delete</button></a>
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