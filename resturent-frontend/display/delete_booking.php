<?php
include ('../layouts/connection.php');

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