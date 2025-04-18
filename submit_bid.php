<?php
// submit_bid.php

// DB connection (edit credentials as per your setup)
$conn = new mysqli("localhost", "root", "", "vehicle_auction");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$vehicle_id = $_POST['vehicle_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$bid_amount = $_POST['bid_amount'];
$date = $_POST['date'];

$sql = "INSERT INTO bids (vehicle_id, name, email, bid_amount, bid_date)
        VALUES ('$vehicle_id', '$name', '$email', '$bid_amount', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Your bid has been submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
