<?php
include ('../layouts/connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$person = $_POST['person'];
$date = $_POST['date'];

$sql = "UPDATE booking_form SET name='$name', phoneNumber='$phoneNumber', emailt='$email', person='$person', date='$date' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
  
?>