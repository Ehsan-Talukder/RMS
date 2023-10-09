<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM food_item WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: food-item.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
