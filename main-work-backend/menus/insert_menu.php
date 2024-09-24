<?php
include ('../connect/connection.php');

$manuName = $_POST['manuName'] ?? '';
$ingredients = $_POST['ingredients'] ?? '';
$categoryName = $_POST['categoryName'] ?? '';
$radio = $_POST['radio'] ?? '';
$number = $_POST['number'] ?? '';
$percent = $_POST['percent'] ?? '';
$textArea = $_POST['textArea'] ?? '';
$title = $_POST['title'] ?? '';
$keyword = $_POST['keyword'] ?? '';

// Handling file upload
$filename = $_FILES["uploadImage"]["name"] ?? '';
$tempname = $_FILES["uploadImage"]["tmp_name"] ?? '';
$folder = "../../images/img/" . $filename;

$imageFileName = '';
if ($filename && move_uploaded_file($tempname, $folder)) {
  $imageFileName = $filename;
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO add_menu (manuName, ingredients, categoryName, radio, number, percent, textArea, title, keyword, uploadImage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssisssss", $manuName, $ingredients, $categoryName, $radio, $number, $percent, $textArea, $title, $keyword, $imageFileName);

if ($stmt->execute()) {
  header('Location: menu_list.php');
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>