<?php
include ('./connect/connection.php');

$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : '';

// Construct SQL query
$sql = "SELECT * FROM add_menu";
if ($category_id) { 
    $sql .= " WHERE categoryName = $category_id";
}

//var_dump($sql);

$result = $conn->query($sql);

$menuItems = array();

// Check if the query was successful
if ($result === false) {
    // Log error for debugging purposes
    error_log("SQL Error: " . $conn->error);
    // Return an error response
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Failed to execute query'));
    exit;
}

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $menuItem = array(
            'id' => $row['id'],
            'manuName' => $row['manuName'],
            'textArea' => $row['textArea'],
            'number' => $row['number'],
            'uploadImage' => $row['uploadImage']
        );
        array_push($menuItems, $menuItem);
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(array('message' => 'No results found'));
    exit;
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($menuItems);

$conn->close();
?>
