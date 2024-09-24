<?php
include ('../connect/connection.php');

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM add_menu WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('location:menu_list.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>