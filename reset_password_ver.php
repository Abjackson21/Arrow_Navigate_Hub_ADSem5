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
    <div class="container">
        <div class="logo">
            <p>Arrow Navigate Hub</p>
        </div>
        <!-- Other meta tags and scripts remain unchanged -->
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            .container {
                width: 300px;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 20px 6px rgba(0, 0, 0, 0.34);
            }

            h4 {
                text-align: center;
                margin-bottom: 20px;
                color: #42444a;
            }

            h6 {
                text-align: center;
                margin-bottom: 20px;
                color: #42444a;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin-bottom: 5px;
                color: #42444a;
            }

            input[type="email"],
            input[type="submit"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 15px;
                border-radius: 4px;
                border: 1px solid #ccc;
            }

            input[type="submit"] {
                width: auto;
                /* Set the width to be based on content */
                padding: 8px 20px;
                /* Adjust padding for better sizing */
                margin-bottom: 15px;
                border-radius: 4px;
                border: 1px solid #ccc;
                box-sizing: border-box;
                /* Include padding and border in the width */
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
</head>


<body>
    <!-- Your existing HTML content -->
    <div class="container">
        <h4>Forgot Password</h4>
        <h6>Enter Your Email Below To Receive a Link For Reseting Your Password</h6>
        <form method="post" action="">
            <label>Email:</label>
            <input type="email" name="email" required>
            <br><br>
            <input type="submit" value="Submit">
            <a href="index.php" class="btn btn-primary">Back to Login</a>
        </form>
    </div>
    <?php
    // Include the database configuration file
    include 'config.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php'; // Path to PHPMailer autoload.php

    // Function to generate a unique token for the password reset link
    function generateRandomString($length = 50)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve entered email
        $email = $_POST['email'];

        // SQL query to check if the email exists in the database
        $query = "SELECT * FROM signup WHERE Email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Email exists in the database, send the password reset link
            $resetLink = "http://localhost/Arrow%20Navigate%20Hub/SOURCE%20CODE/PHP/nfaccount_edit.php?token=" . generateRandomString();

            // Send email with the reset link using PHPMailer
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;

            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'arrowtech5563@gmail.com'; // SMTP username
                $mail->Password   = 'szttvmusygjgjazq'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587; // TCP port to connect to

                //Recipients
                $mail->setFrom('arrowtech5563@gmail.com', 'Arrow Navigate Hub');
                $mail->addAddress($email); // Add recipient email

                //Content
                $mail->isHTML(true);
                $mail->Subject = "Password Reset";
                $mail->Body = "We've received a request to reset your password for your account with us. To proceed with resetting your password, please click on the link below: " . $resetLink;

                $mail->send();
                echo "Password reset link has been sent to your email.";
            } catch (Exception $e) {
                echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            // Email does not exist in the database
            echo "Email does not exist.";
        }
    }
    ?>
</body>

</html>