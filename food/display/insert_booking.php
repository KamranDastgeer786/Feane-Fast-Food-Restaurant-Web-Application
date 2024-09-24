<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jutt_food";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$person = $_POST['person'];
$date = $_POST['date'];



$sql = "INSERT INTO booking_form (name, phoneNumber, email, person, date)
VALUES ('$name', '$phoneNumber', '$email', '$person', '$date')";

if ($conn->query($sql) === TRUE) {
  header('location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>