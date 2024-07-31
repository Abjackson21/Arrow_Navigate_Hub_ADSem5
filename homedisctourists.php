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
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./admin/css/roombook.css">
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

      section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 2em;
        }

        .place {
            width: 30%;
            margin: 1em;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .place:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .place a {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .place img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #ddd;
        }

        .place-content {
            padding: 1em;
        }  
        
        .book {
    position: relative;
    display: flex; /* Use flexbox to align items */
    width: 100%;
    margin: 1em;
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease-in-out;
}

.blurry-image {
    position: relative;
    filter: blur(5px); /* Adjust the blur amount as needed */
}

/* Style for the image */
.book img {
    display: block;
    max-width: 100%;
    height: auto;
}

/* Style for the slogan */
.book .slogan {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 28px;
    font-weight: bold;
    text-align: center;
    z-index: 1;
}

/* Style for the content wrapper */
.content-wrapper {
    flex: 1; /* Allow content to grow and fill the available space */
    overflow: hidden;
}

/* Style for the content */
.book .content {
  position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center vertically */
    align-items: center; /* Center horizontally */
    height: 100%; /* Take the full height of the parent container */
    padding: 16px; /* Adjust as needed */
    box-sizing: border-box; /* Include padding in height calculation */
}


/* Style for the additional text */
.book p {
    margin-top: 8px; /* Adjust as needed */
}

/* Style for the book button */
.book-button {
    padding: 10px 20px;
    margin-top: 10px; /* Adjust as needed */
    font-size: 16px;
    color: white;
    background-color: #3498db; /* Change the color as needed */
    border: none;
    border-radius: 5px;
    cursor: pointer;
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
            <img class="carousel-image" src="./IMAGES/C1Lego.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./IMAGES/C2Harbour.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./IMAGES/C3Tanjung.jpg">
        </div>  
        <div class="carousel-item">
            <img class="carousel-image" src="./IMAGES/C4pasar.jpg">
        </div>

        <div class="welcomeline">
          <h1 class="welcometag" style = "text-align: center;">Jobs fill your pocket, but adventures fill your soul</h1>
        </div>

      <!-- Boxes -->
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name">
                    <input type="email" name="Email" placeholder="Enter Email">

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
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phoneno">
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="hotel_name" class="selectinput">
                    <option value="" selected>Select Hotel</option>
                    <option value="Amari Johor Bahru">Amari Johor Bahru</option>
                    <option value="Doubletree By Hilton Hotel Johor Bahru">Doubletree By Hilton Hotel Johor Bahru</option>
                    <option value="TROVE Johor Bahru">TROVE Johor Bahru</option>
                    <option value="Holiday Inn Johor Bahru City Centre, an IHG hotel">Holiday Inn Johor Bahru City Centre, an IHG hotel</option>
                    <option value="Capri by Fraser Johor Bahru">Capri by Fraser Johor Bahru</option>
                    <option value="LEGOLAND Hotel Malaysia">LEGOLAND Hotel Malaysia</option>
                    <option value="Tune Hotel Danga Bay">Tune Hotel Danga Bay</option>
                    <option value="St. Giles Southkey">St. Giles Southkey</option>
                    <option value="Hyatt Place Johor Bahru">Hyatt Place Johor Bahru</option>
                    <option value="KSL Hotel & Resort">KSL Hotel & Resort</option>
                    </select>
              <select name="RoomType" class="selectinput">
                    <option value selected >Type Of Room</option>
                    <option value="Superior Room">SUPERIOR ROOM</option>
                    <option value="Deluxe Room">DELUXE ROOM</option>
                    <option value="Guest House">GUEST HOUSE</option>
                    <option value="Single Room">SINGLE ROOM</option>
              </select>
              <select name="Bed" class="selectinput">
						            <option value selected >Bedding Type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
						            <option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
						            <option value="None">None</option>
              </select>
              <select name="NoofRoom" class="selectinput">
						            <option value selected >No of Room</option>
                        <option value="1">1</option>
              </select>
                    <select name="Meal" class="selectinput">
						        <option value selected >Meal</option>
                    <option value="Room only">Room only</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Half Board">Half Board</option>
                    <option value="Full Board">Full Board</option>
					    </select>
                <div class="datesection">
                            <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type ="date">
                             </span>
                             <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type ="date">
                            </span>
                </div>
              </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                }
            }
            ?>
          </div>

    </div>

        
    
  </section>
 
  <section>

  

          <div class="book" >
          <div class="blurry-image">
        <img src="./IMAGES/BukitSerene.jpg" alt="Your Image">
          </div>
            <div class="slogan">Seize the Stay: Effortless Booking, Endless Memories. Your Journey Starts Here!</div>
            <div class="content-wrapper">
                <div class="content">
                    <p>Secure your spot and experience luxury <br> -----------Book your stay-----------</p>
                    <button class="book-button" onclick="openbookbox()">Book</button>
                </div>
            </div>
        </div>


        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction2.html'">
            <img src="./IMAGES/BukitSerene.jpg" alt="Place 1">
            <div class="place-content">
                <h2>Laman Mahkota Istana Bukit Serene</h2>
                <p>Istana Bukit Serene is the royal palace and official residence of the Sultan of Johor, located in Johor Bahru, Malaysia. The palace faces the Straits of Johor and has a bird's eye view of Singapore, a former possession of the Sultanate.From historical records, the palace was completed in 1933.

                </p>
            </div>
          </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction.html'">
            <img src="./IMAGES/DataranMahkota.jpg" alt="Place 2">
            <div class="place-content">
                <h2>Dataran Mahkota</h2>
                <p>This central square of the Johor State administration complex harmonises Islamic and Malaysian culture and heritage with the natural surroundings. It is a shallow, sunken area defined by mounds to the north giving views over the square and a ‘heritage wall’ to the south.

                </p>
            </div>
        </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction2.html'">
            <img src="./IMAGES/HutanBandar.jpg" alt="Place 3">
            <div class="place-content">
                <h2>Hutan Bandar MBJB</h2>
                <p>Hutan Bandar MBJB is a lovely park that is ideal for a leisurely stroll or a brisk walk. The park is popular with joggers and runners, who appreciate the well-maintained walking paths that wind around the beautiful lake. The park also features several playgrounds for children, making it an ideal place for families to spend time together.

                </p>
            </div>
        </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction2.html'">
            <img src="./IMAGES/MasjidJamek.jpg" alt="Place 4">
            <div class="place-content">
                <h2>Masjid Jamek Tun Hussein Onn</h2>
                <p>Tun Hussein Onn Jamek Mosque or Larkin Jamek Mosque is a mosque in Larkin Sentral, Larkin, Johor Bahru, Johor, Malaysia. It was named after former Malaysia's third Prime Minister, Tun Hussein Onn.

                </p>
            </div>
        </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction.html'">
            <img src="./IMAGES/Park.jpg" alt="Place 5">
            <div class="place-content">
                <h2>Recreational Park</h2>
                <p>Easily accessible from the city center of Johor Bahru, making it a popular destination for residents and visitors alike. The park is designed to offer a peaceful retreat not far from the city's amenities.</p>
            </div>
        </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction3.html'">
            <img src="./IMAGES/Puteri.jpg" alt="Place 6">
            <div class="place-content">
                <h2>Puteri harbour</h2>
                <p>Puteri Harbour, the pearl of Johor, is a well-known waterfront development located on the southern coast of Johor, close to neighboring Singapore. Its ideal location and award-winning master plan have transformed the harbour into a popular dining, entertainment and resort destination.
                  
                </p>
            </div>
        </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction.html'">
            <img src="./IMAGES/db.jpg" alt="Place 6">
            <div class="place-content">
                <h2>Danga Bay</h2>
                <p>Danga Bay offers a lot of activities with luxury and glam. It possesses the high end retail outlets and fine dines restaurants. It is considered as the biggest recreation park in Johor Bahru as there are many activities that are suitable for all ages. The Danga Park is suitable for children as it offers interesting activities exclusively for them. Danga Bay is too famous as a romantic spot for couples as there are top notch restaurants which offer fine dining with the awesome night view.
                </p>
            </div>
        </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction.html'">
            <img src="./IMAGES/pontian.jpg" alt="Place 8">
            <div class="place-content">
                <h2>Pontian</h2>
                <p>Puteri Harbour, the pearl of Johor, is a well-known waterfront development located on the southern coast of Johor, close to neighboring Singapore. Its ideal location and award-winning master plan have transformed the harbour into a popular dining, entertainment and resort destination.
                  
                </p>
            </div>
        </div>

        <div class="place" onclick="window.location.href = './SERVICES/touristsattraction.html'">
            <img src="./IMAGES/Puteri.jpg" alt="Place 9">
            <div class="place-content">
                <h2>Puteri harbour</h2>
                <p>Puteri Harbour, the pearl of Johor, is a well-known waterfront development located on the southern coast of Johor, close to neighboring Singapore. Its ideal location and award-winning master plan have transformed the harbour into a popular dining, entertainment and resort destination.
                  
                </p>
            </div>
        </div>
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
  <li><a href="complaint_form.html">Complaints</a></li> 
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