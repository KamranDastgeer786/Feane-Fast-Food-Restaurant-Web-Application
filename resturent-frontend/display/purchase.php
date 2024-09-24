<?php
session_start();
?>

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

$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$dateTime = $_POST['dateTime'];
$payMode = $_POST['payMode'];


$sql = "INSERT INTO `order`(`name`, `number`, `address`, `dateTime`, `payMode`)
VALUES ('$name', '$number', '$address', '$dateTime', '$payMode')";

if ($conn->query($sql) === TRUE) {
  
  //initialize total
  $total = 0;
  if (!empty($_SESSION['cart'])) {
     
    $index = 0;
    if (!isset($_SESSION['qty_array'])) {
    $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
    }
    $sql = "SELECT * FROM add_menu WHERE id IN (" . implode(',', $_SESSION['cart']) . ")";
    $query = $conn->query($sql);
    while ( $row = $query->fetch_assoc()) {
    $productId =$row['id'];
    $price =$row['number']; 
    $qty = $_SESSION['qty_array'][$index];
    $total = $_SESSION['qty_array'][$index] * $row['number'];
      
    $sql2 = "INSERT INTO `order_detail`(`productId`, `price`, `qty`, `total`)
    VALUES ('$productId', '$price', '$qty', '$total')";

    $conn->query($sql2);
        
      $index++;
      
    }

    die;


  
  //header('location:purchase.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>