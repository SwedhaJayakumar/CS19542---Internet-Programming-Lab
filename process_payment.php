<?php
// Database connection

$username = "root";
$password = "";
$dbname = "course_portal";

$conn = new mysqli("localhost", $username, $password, $dbname,3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the task
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['cardNumber'];
    $cardHolder = $_POST['cardHolder'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];

    $sql="INSERT INTO payments (card_name, card_number, expiry_date, cvv) VALUES ('$cardNumber','$cardHolder','$expiryDate','$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment Successful";  // Redirect back to the homepage
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>