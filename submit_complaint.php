<?php
include 'config.php';


// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$complaintType = $_POST['complaint_type'];
$description = $_POST['description'];

// Insert complaint into database
$sql = "INSERT INTO complaints (name, email, complaint_type, description)
        VALUES ('$name', '$email', '$complaintType', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Complaint submitted successfully";
    echo '<br><button onclick="goBack()">Go Back</button>';
    echo '<script>
            function goBack() {
                window.history.back();
            }
          </script>';
    echo '<script>
            setTimeout(function(){
                window.location.href = "submit_complaint.php";
            }, 3000);
          </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
