<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM orders WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location:category_food.php?name=Fast%20Food");
} else {
    echo "Error deleting record: " . $conn->error;
}
