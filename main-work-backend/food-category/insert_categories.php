<?php
include ('../connect/connection.php');

$categoryName = $_POST['categoryName'];

$sql = "INSERT INTO category (categoryName)
VALUES ('$categoryName')";

if ($conn->query($sql) === TRUE) {
  header('location:table_categories.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>