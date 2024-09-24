<?php
include ('../connect/connection.php');
$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM order_detail WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('location:order_details.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>