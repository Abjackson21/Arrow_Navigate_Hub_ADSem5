<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- loading bar -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="./css/flash.css">
    <title>Arrow Navigate Hub</title>
</head>

<body>
    <!--  carousel -->
    <section id="carouselExampleControls" class="carousel slide carousel_section" data-bs-ride="carousel">
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
        </div>
    </section>

    <!-- CSS for carousel -->
    <style>
        .carousel_section {
            box-shadow: var(--bg-box-shadow);
        }

        /* side photo css */
        section {
            height: 100%;
            width: 50%;
        }

        .carousel-image {
            height: 100vh;
        }

        .carousel-inner::after {
            content: "";
            position: absolute;
            height: 100vh;
            width: 100%;
            background-color: rgba(0, 0, 255, 0.284);
        }

        /* Additional styles for account information */
        .container {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .account-info {
            margin-bottom: 15px;
        }

        .account-info strong {
            font-weight: bold;
            margin-right: 5px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .bookbtn {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>


    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Add your custom CSS styles here */
    </style>
    </head>

    <body>
        <div class="container">
            <div class="logo">
                <img class="Arrowilogo" src="./IMAGES/ArrowLogoMain.png" alt="logo">
                <p>Arrow Navigate Hub</p>
            </div>
            <h1>Account Information</h1>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "Amar123456";
            $dbname = "arrowwi";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            session_start();

            // Check if user is logged in
            if (!isset($_SESSION['usermail'])) {
                header("location: index.php");
                exit;
            }

            // Retrieve user's account information from the database
            $usermail = $_SESSION['usermail'];
            $sql = "SELECT * FROM signup WHERE Email = '$usermail'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            // Display the account information
            ?>
            <style>
    .eye img {
        width: 20px; /* Adjust this value to change the width of the icon */
        height: auto; /* Maintain aspect ratio */
    }
</style>

            <div class="account-info">
                <p><strong>Username:</strong> <?php echo $row['Username']; ?></p>
                <p><strong>Email:</strong> <?php echo $row['Email']; ?></p>
                <div class="form-floating">
            <input type="text" class="form-control" name="Password" id="password" value="<?php echo $row['Password']; ?>" readonly>
            <label for="Password">Password</label>
            <span toggle="#password" class="eye field-icon toggle-password">
            <img src="IMAGES/eye-closed.png" alt="Show Password">
            <img src="IMAGES/eye-open.png" alt="Hide Password">
            </span>
          </div>
            <div class="button-container">
                <button class="btn btn-primary bookbtn" onclick="window.location.href = 'home.php'">Back To Home Page</button>
                <button class="btn btn-primary bookbtn" onclick="window.location.href = 'nfaccount_edit.php'">Edit Account Info</button>
        </div>
        <!-- Include this JavaScript snippet at the bottom of your HTML body or in a separate script file -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordField = document.getElementById('password');
        const togglePassword = document.querySelector('.toggle-password');

        togglePassword.addEventListener('click', function() {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Change the eye icon based on the password visibility
            togglePassword.querySelector('img').src = type === 'password' ? 'eye-closed.png' : 'eye-open.png';
        });
    });
</script>

    </body>

</html>