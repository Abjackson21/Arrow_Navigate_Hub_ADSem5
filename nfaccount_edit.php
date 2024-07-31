<!DOCTYPE html>
<html>

<head>

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

    <title>Edit Account Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap');

        :root {
            --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%), 0 8px 16px rgb(13 0 77 / 8%);
            --bg-box-shadow: 0px 0px 20px 6px rgb(0 0 0 / 34%);
        }

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            /* text-shadow: var(--bg-text-shadow); */
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: var(--bg-box-shadow);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #42444a;
            text-shadow: var(--bg-text-shadow);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #42444a;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    </head>

    <body>
        <div class="container">
            <div class="logo">
                <img class="Arrowilogo" src="./IMAGES/ArrowLogoMain.png" alt="logo">
                <p>Arrow Navigate Hub</p>
            </div>
            <h1>Edit Account Information</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username"><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="Update">
            </form>
            <div style="text-align: center;">
                <button class="btn btn-primary bookbtn" onclick="window.location.href = 'index.php'">Back To Log in</button>
            </div>
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

            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get form data
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                // Sanitize inputs to prevent SQL injection 
                $username = mysqli_real_escape_string($conn, $username);
                $email = mysqli_real_escape_string($conn, $email);
                $password = mysqli_real_escape_string($conn, $password);

                // Update user information
                $sql = "UPDATE signup SET Username='$username', Email='$email', Password='$password' WHERE UserID=1";

                if ($conn->query($sql) === TRUE) {
                    echo "<p>Account information updated successfully</p>";
                } else {
                    echo "<p>Error updating account: " . $conn->error . "</p>";
                }
            }

            $conn->close();
            ?>
        </div>


    </body>

</html>