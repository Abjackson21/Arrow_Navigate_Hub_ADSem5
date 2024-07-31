<?php

include 'config.php';
session_start();

// page redirect
$usermail = "";
$usermail = $_SESSION['usermail'];
if ($usermail == true) {
} else {
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/homeextrafeatures.css">
  <title>Arrow Navigate Hub</title>
  <!-- boot -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- fontowesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    #guestdetailpanel {
      display: none;
    }

    #guestdetailpanel .middle {
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
        <img class="carousel-image" src="./IMAGES/main1.jpg">
      </div>
      <div class="carousel-item">
        <img class="carousel-image" src="./IMAGES/main2.jpg">
      </div>
      <div class="carousel-item">
        <img class="carousel-image" src="./IMAGES/main3.jpg">
      </div>
      <div class="carousel-item">
        <img class="carousel-image" src="./IMAGES/main5.jpg">
      </div>

      <div class="welcomeline">
        <h1 class="welcometag">Have Fun!</h1>
      </div>

      <!-- Boxes -->
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
          <div class="head">




  </section>

  <section id="thirdsection">
    <br>
    <br>
    <h1 class="head"> Our Team </h1>
    <div class="facility">
      <div class="box">
        <h2>Amar Hassan - Team Leader</h2>
      </div>
      <div class="box">
        <h2>Yassin Samy - Scrum Master</h2>
      </div>
      <div class="box">
        <h2>Youssef Ramez - Developer</h2>
      </div>
      <div class="box">
        <h2>Mohamed Suhaib - Tester</h2>
      </div>
      <div class="box">
        <h2>Abidalsalam - Stakeholder</h2>
      </div>
    </div>
  </section>
  <section id="secondsection">
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <h1 class="head"> Our Services </h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Get Your Location!</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <a class="btn btn-primary bookbtn" href="SERVICES/mylocation.html">Click Here!</a>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Gecode</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
            </div>
            <a class="btn btn-primary bookbtn" href="SERVICES/gecode.html">Click Here!</a>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Reverse Gecode</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
            </div>
            <a class="btn btn-primary bookbtn" href="SERVICES/revresegecode.html">Click Here!</a>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h4"></div>
          <div class="roomdata">
            <h2>Street View</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <a class="btn btn-primary bookbtn" href="SERVICES/streetViewimagery.html">Click Here!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  </section>
  <section id="secondsection">
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h5"></div>
          <div class="roomdata">
            <h2>Style Your Map!</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <a class="btn btn-primary bookbtn" href="SERVICES/stylingtoyourmap.html">Click Here!</a>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h6"></div>
          <div class="roomdata">
            <h2>Earthquakes!</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
            </div>
            <a class="btn btn-primary bookbtn" href="SERVICES/earthquake.html">Click Here!</a>
          </div>
        </div>

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
      <li><a href="complaint_form.html">Complaints</a></li> 
    </div>
  </section>


</body>

<script>
  var bookbox = document.getElementById("guestdetailpanel");

  openbookbox = () => {
    bookbox.style.display = "flex";
  }
  closebox = () => {
    bookbox.style.display = "none";
  }
</script>

</html>