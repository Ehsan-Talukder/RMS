<?php include("config.php");
$table_no=$_GET['table_no'];

$status="Order_Placed";
$table_no=$_GET['table_no'];
// update confirming order number

$sql = "UPDATE  orders SET status='$status' WHERE ((status='not_confirmed')&&(table_no=$table_no))";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
