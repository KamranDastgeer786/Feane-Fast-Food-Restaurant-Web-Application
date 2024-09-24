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

$id = $_POST['id'];
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];
$basic_checkbox_1 = $_POST['basic_checkbox_1'];

$sql = "UPDATE sign_up SET fullName='$fullName', email='$email', password='$password', basic_checkbox_1='$basic_checkbox_1' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
  
?>