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

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM booking_form WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('location:booking_table.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>