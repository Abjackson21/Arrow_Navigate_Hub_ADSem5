<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/homefindhc.css">
    <title>Arrow Navigate Hub</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>
</head>

<body>
<nav>
  <div class="logo" onclick="window.location.href='home.php'" style="cursor: pointer;">
  <img class="ARROWILOGO" src="./IMAGES/ArrowLogoMain.png" alt="logo">
  <p style="cursor: pointer;">Arrow Navigate Hub</p>
    </div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="#secondsection">Services</a></li>
      <li><a href="#contactus">Contact us</a></li>
      <li><a href="accountview.php">Account</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./IMAGES/Students1.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./IMAGES/main3.jpg">
        </div>  
        

        <div class="welcomeline">
          <h1 class="welcometag">Welcome, Students</h1>
        </div>

      <!-- Boxes -->
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">


        
  
  </section>
 
<style>
    /* CSS Styling for the Reservation Form */

/* Adjusting overall form layout */
.form-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Styling form headings */
.form-container h3 {
  color: #333;
  margin-bottom: 15px;
}

/* Styling input fields */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container select {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

/* Styling select dropdown */
.form-container select {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url("data:image/svg+xml;utf8,<svg fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M6 9l6 6 6-6'/></svg>");
  background-repeat: no-repeat;
  background-position-x: 98%;
  background-position-y: center;
  cursor: pointer;
  padding-right: 30px;
}

/* Styling buttons */
.form-container button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.form-container button:hover {
  background-color: #0056b3;
}

/* Styling the form footer */
.form-container .footer {
  text-align: right;
}

</style>
  </section>
  <section id="secondsection"> 
  <div class="form-container">
  <form method="post">
  <div class="head">
                <h3>RESERVATION</h3>
                <a class="btn btn-primary bookbtn" href="homediscstudents.php">Back To Students</a>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Student information</h4>
                    <input type="text" name="GuestName" placeholder="Enter Guest Name">
    <input type="email" name="GuestEmail" placeholder="Enter Guest Email">
    <input type="text" name="Phone" placeholder="Enter Phone Number">

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
							endforeach;
						?>
            <select name="RoomType" class="selectinput">
         </select>
         <!-- Inside the form -->
<select name="hostel_room" class="selectinput">
    <option value="" selected disabled>Select Hostel</option>
    <?php
    $hostelNames = [
        'College Tun Fatimah',
        'College Tun Dr. Ismail',
        'College Tun Hussein Onn',
        'College Datin Seri Endon',
        'College Perdana',
        'Scholar’s Inn',
        'College Tun Razak',
        'College Rahman Putra',
        'College Tuanku Canselor',
        'College Dato Onn Jaafar',
        'College 9 & 10',
        'K Hotel Sdn. Bhd.',
        'KLG Campus Residence'
    ];

    foreach ($hostelNames as $hostel) {
        echo "<option value='$hostel'>$hostel</option>";
    }
    ?>
</select>

                    </select>
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <div class="reservationinfo">
    <h4>Room information</h4>
    <select name="RoomType">
        <option value="Single Room">Single Room</option>
        <option value="Double Room">Double Room</option>
    </select>
    <input type="date" name="CheckIn" placeholder="Check-in Date">
    <input type="date" name="CheckOut" placeholder="Check-out Date">
</div>
<div class="footer">
<button class="btn btn-success" name="reservationSubmit">Reserve</button>
</form>
</div>
                    </div>
                </div>
            
            </div>

            </form>
            <!-- ==== hostel book php ====-->
            <?php   
if (isset($_POST['reservationSubmit'])) {
    $GuestName = $_POST['GuestName'];
    $GuestEmail = $_POST['GuestEmail'];
    $Phone = $_POST['Phone'];
    $RoomType = $_POST['RoomType'];
    $CheckIn = $_POST['CheckIn'];
    $CheckOut = $_POST['CheckOut'];
    $hostel_room = $_POST['hostel_room'];

    if ($GuestName == "" || $GuestEmail == "" || $Phone == "" || $RoomType == "" || $CheckIn == "" || $hostel_room == "" ) {
        echo "<script>swal({
            title: 'Fill the proper details',
            icon: 'error',
        });
        </script>";
    } else {

        // SQL query to insert data into the hostel_booking table
        $sql = "INSERT INTO hostel_booking (RoomID, CheckIn, CheckOut, NumberOfNights, GuestName, GuestEmail, Phone, hostel_room)
        SELECT RoomID, '$CheckIn', '$CheckOut', DATEDIFF('$CheckOut', '$CheckIn'), '$GuestName', '$GuestEmail', '$Phone', '$hostel_room'
        FROM hostel_room
        WHERE RoomType = '$RoomType'";


       // Execute the query and handle success or error
if ($conn->query($sql) === TRUE) {
  echo "<script>swal({
      title: 'Reservation successful',
      icon: 'success',
  });
  </script>";
} else {
  // Display the actual error message from the database
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    }
}
?>


          </div>

    </div>
    
  </section>
  </section>

  <section id="contactus">
  <div class="social">
    <a href="https://www.instagram.com/ammar_elshaer_">
      <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="https://www.facebook.com/profile.php?id=100009033535855">
      <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="mailto:your-arrowtech5563@gmail.com">
      <i class="fa-solid fa-envelope"></i>
    </a>
  </div>
  <div class="createdby">
  <h5>Group Arrow Tech</h5>
</div>
</section>


</body>

<script>

    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>