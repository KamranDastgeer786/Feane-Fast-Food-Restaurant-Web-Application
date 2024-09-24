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

$userName = $_POST['userName'];
$password = $_POST['password'];
$basic_checkbox_1 = $_POST['basic_checkbox_1'];

$sql = "INSERT INTO sign_in (userName, password, basic_checkbox_1)
VALUES ('$userName', '$password', '$basic_checkbox_1')";

if ($conn->query($sql) === TRUE) {
  //header('location:register_table.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>