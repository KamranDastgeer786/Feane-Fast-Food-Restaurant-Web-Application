<?php
include ('../connect/connection.php');

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM category WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('location:table_categories.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>