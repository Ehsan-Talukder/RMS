<?php include("config.php");
$table_no=$_GET['table_no'];


// sql to delete a record
$sql = "DELETE FROM orders where ((status='not_confirmed')&&(table_no=$table_no))";

if ($conn->query($sql) === TRUE) {
    header("Location:category_food.php?name=Fast%20Food");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>