<?php
include ('../connect/connection.php');

$id = $_POST['id'];
$manuName = $_POST['manuName'];
$ingredients = $_POST['ingredients'];
$categoryName = $_POST['categoryName'];
$radio = $_POST['radio'];
$number = $_POST['number'];
$percent = $_POST['percent'];
$textArea = $_POST['textArea'];
$title = $_POST['title'];
$keyword = $_POST['keyword'];



$filename = $_FILES["uploadImage"]["name"];
$tempname = $_FILES["uploadImage"]["tmp_name"];
$folder = "../../images/img/" . $filename;

$imageFileName = '';

if (move_uploaded_file($tempname, $folder)) {
    $imageFileName = $filename;
}

$sql = "UPDATE add_menu SET manuName='$manuName', ingredients='$ingredients',
categoryName='$categoryName', radio='$radio', number='$number', percent='$percent', textArea='$textArea', title='$title', keyword='$keyword', uploadImage='$imageFileName' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
    header('Location: menu_list.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
