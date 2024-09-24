<?php
include ('../layouts/connection.php');

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