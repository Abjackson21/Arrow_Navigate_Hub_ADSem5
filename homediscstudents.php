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
    <link rel="stylesheet" href="css/homediscstudents.css">
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

  <section id="thirdsection">
    <br> 
    <br> 
    <h1 class="head"> Popular Places </h1>
    <div class="facility">
      <div class="box">
        <h2>UTM</h2>
        <ul>
      <li><a href="https://www.google.com/maps/place/Meranti+Food+Court,+UTM/@1.559706,103.6311834,17z/data=!3m1!4b1!4m6!3m5!1s0x31da76ad959aa8f5:0xc5049564612bc801!8m2!3d1.5597006!4d103.6337583!16s%2Fg%2F1tfg55ks?entry=ttu">Arked Mirante</a></li>
      <li><a href="https://www.google.com/maps/place/UTM+Health+Centre/@1.5594342,103.6247917,17z/data=!3m1!4b1!4m6!3m5!1s0x31da76af1f67f15b:0x55859cb64612767b!8m2!3d1.5594288!4d103.6273666!16s%2Fg%2F11bwzyxs2h?entry=ttu">UTM Health Centre</a></li>
      <li><a href="https://www.google.com/maps/place/Masjid+Sultan+Ismail,+Universiti+Teknologi+Malaysia/@1.5621297,103.6332565,17.15z/data=!4m14!1m7!3m6!1s0x31da76af1f67f15b:0x55859cb64612767b!2sUTM+Health+Centre!8m2!3d1.5594288!4d103.6273666!16s%2Fg%2F11bwzyxs2h!3m5!1s0x31da715340a749e3:0x19dc872ddd924d1b!8m2!3d1.5592644!4d103.637528!16s%2Fg%2F1hc2ztb5b?entry=ttu">Masjid Sultan Ismail</a></li>
      <li><a href="https://www.google.com/maps/place/Perpustakaan+Sultanah+Zanariah/@1.5623177,103.6328424,17z/data=!4m14!1m7!3m6!1s0x31da76af1f67f15b:0x55859cb64612767b!2sUTM+Health+Centre!8m2!3d1.5594288!4d103.6273666!16s%2Fg%2F11bwzyxs2h!3m5!1s0x31da715331491f27:0x823c2e5b0155f23f!8m2!3d1.5594732!4d103.6367237!16s%2Fg%2F1tg7z_5d?entry=ttu">Library</a></li>
      <li><a href="SERVICES/discoverutm.html">Discover More...</a></li>
    </ul>
      </div>
      <div class="box">
        <h2>Taman Universiti
        </h2>
        <ul>
      <li><a href="https://www.google.com/maps/place/AEON+Taman+Universiti+Shopping+Centre/@1.5427817,103.626578,17z/data=!3m1!4b1!4m6!3m5!1s0x31da740f3c333759:0xbad7436fbdbf7c81!8m2!3d1.5427763!4d103.6291529!16s%2Fg%2F1hc5jxld4?entry=ttu">Aeon Mall</a></li>
      <li><a href="https://www.google.com/maps/place/Eco-Shop+@+Taman+Universiti/@1.5427587,103.6266892,17.04z/data=!4m14!1m7!3m6!1s0x31da740f3c333759:0xbad7436fbdbf7c81!2sAEON+Taman+Universiti+Shopping+Centre!8m2!3d1.5427763!4d103.6291529!16s%2Fg%2F1hc5jxld4!3m5!1s0x31da740f5385c1e7:0x9a32f82ae192ebb4!8m2!3d1.5437069!4d103.6302488!16s%2Fg%2F11dfjynrjb?entry=ttu">Eco-Shop</a></li>
      <li><a href="https://www.google.com/maps/place/CIMB+Bank+@+Taman+Universiti/@1.5419571,103.6297073,19.76z/data=!4m6!3m5!1s0x31da740f2e8236b9:0x7c8e58b49414bfd3!8m2!3d1.5421611!4d103.6301527!16s%2Fg%2F1tywvgn7?entry=ttu">Cimb Bank</a></li>
      <li><a href="https://www.google.com/maps/place/Rainbow+Art+Stationery+Sdn+Bhd/@1.5424126,103.6279455,17.54z/data=!4m6!3m5!1s0x31da740ed35093a7:0x264f486e1dab0462!8m2!3d1.541299!4d103.630443!16s%2Fg%2F11bw470wgx?entry=ttu">Rainbow Art Stationery</a></li>
      <li><a href="SERVICES/discovertamanu.html">Discover More...</a></li>
    </ul>
      </div>
      <div class="box">
        <h2>JB Sentral</h2>
        <ul>
        <li><a href="https://www.google.com/maps/place/JB+Sentral/@1.461131,103.7649016,17.16z/data=!4m6!3m5!1s0x31da12e7a6b8bf57:0x717c10c1d8a1645!8m2!3d1.462983!4d103.7646849!16s%2Fm%2F0ds2rtf?entry=ttu">JB Sentral</a></li>
      <li><a href="https://www.google.com/maps/place/Johor+Bahru+City+Square/@1.4628857,103.7637221,18.02z/data=!4m14!1m7!3m6!1s0x31da12e7a6b8bf57:0x717c10c1d8a1645!2sJB+Sentral!8m2!3d1.462983!4d103.7646849!16s%2Fm%2F0ds2rtf!3m5!1s0x31da12c34ff2ab67:0x741e147ac7e4b165!8m2!3d1.4624719!4d103.7632488!16s%2Fg%2F1tltjwj2?entry=ttu">Johor Bahru City Square</a></li>
      <li><a href="https://www.google.com/maps/place/KOMTAR+JBCC/@1.461131,103.7649016,17.16z/data=!4m6!3m5!1s0x31da12c355cb2223:0x4e528549802f1cd3!8m2!3d1.4639632!4d103.7627382!16s%2Fm%2F012z8934?entry=ttu">KOMTAR JBCC</a></li>
      <li><a href="https://www.google.com/maps/place/Skyscape+Johor+Bahru/@1.4638539,103.7629495,18.59z/data=!4m6!3m5!1s0x31da13da9d114593:0x41d13b2187462476!8m2!3d1.4645948!4d103.7620047!16s%2Fg%2F11gwmfc8s0?entry=ttu">Skyscape Johor Bahru</a></li>
      <li><a href="SERVICES/discovercentralskudai.html">Discover More...</a></li>
    </ul>
      </div>
      <div class="box">
        <h2>Putri Harbour</h2>
        <ul>
        <li><a href="https://www.google.com/maps/place/Puteri+Harbour/@1.4183114,103.6578397,18.02z/data=!4m15!1m8!3m7!1s0x31da0c3e554aa00f:0xeaf7295075e7bfa4!2sPuteri+Harbour,+79100+Iskandar+Puteri,+Johor!3b1!8m2!3d1.419078!4d103.6622311!16s%2Fg%2F1q5bksrh1!3m5!1s0x31da0c16096f18e5:0x3313e15e357b4437!8m2!3d1.4167292!4d103.6568699!16s%2Fg%2F1hcnfqwpp?entry=ttu">Puteri Harbour</a></li>
      <li><a href="https://www.google.com/maps/place/Starbucks+Puteri+Harbour/@1.4180236,103.6575456,18.93z/data=!4m15!1m8!3m7!1s0x31da0c3e554aa00f:0xeaf7295075e7bfa4!2sPuteri+Harbour,+79100+Iskandar+Puteri,+Johor!3b1!8m2!3d1.419078!4d103.6622311!16s%2Fg%2F1q5bksrh1!3m5!1s0x31da0c15d0383a95:0xd89328f90ee9fc4d!8m2!3d1.4180524!4d103.6564389!16s%2Fg%2F11b867y7h6?entry=ttu">Starbucks</a></li>
      <li><a href="https://www.google.com/maps/place/ONE%C2%B015+Marina+Puteri+Harbour,+Malaysia/@1.4165079,103.6590145,18.72z/data=!4m15!1m8!3m7!1s0x31da0c3e554aa00f:0xeaf7295075e7bfa4!2sPuteri+Harbour,+79100+Iskandar+Puteri,+Johor!3b1!8m2!3d1.419078!4d103.6622311!16s%2Fg%2F1q5bksrh1!3m5!1s0x31da0c15e3f9354b:0x19b066e8d3704360!8m2!3d1.417128!4d103.658282!16s%2Fg%2F11f03ysfqv?entry=ttu">ONE°15 Marina Puteri Harbour</a></li>
      <li><a href="https://google.com/maps/place/Puteri+Harbour+Fountain/@1.4200475,103.6573403,18.21z/data=!4m15!1m8!3m7!1s0x31da0c3e554aa00f:0xeaf7295075e7bfa4!2sPuteri+Harbour,+79100+Iskandar+Puteri,+Johor!3b1!8m2!3d1.419078!4d103.6622311!16s%2Fg%2F1q5bksrh1!3m5!1s0x31da0d859cf166eb:0x6d19e4da5ce033d6!8m2!3d1.4205046!4d103.6568259!16s%2Fg%2F11k6rgwnfg?entry=ttu">Puteri Harbour Fountain</a></li>
      <li><a href="SERVICES/discoverputri.html">Discover More...</a></li>
    </ul>
      </div>
      <div class="box">
        <h2>Public Transport</h2>
        <ul>
      <li><a href="SERVICES/publictransportroutes.html">Puclic Transport</a></li>
    </ul>
      </div>
    </div>
  </section>
    
  <section id="secondsection"> 
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <h1 class="head"> Reservations </h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Book room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <button type="button" class="btn btn-primary bookbtn" onclick="myFunction1()">Click Here!</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>

  function myFunction1() {
    window.location.href="reservation_form2.php";
  }
 </script>


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
      window.location.href="https://www.google.com/";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>