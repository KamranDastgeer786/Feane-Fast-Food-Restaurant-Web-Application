<?php
include ('../connect/connection.php');

$id = $_POST['id'];
$categoryName = $_POST['categoryName'];

$sql = "UPDATE category SET categoryName='$categoryName' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>