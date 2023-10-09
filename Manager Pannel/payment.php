<?php 
include("config.php");
echo $table_no='9';
$status='Paid & Delivered';

$sql = "UPDATE  orders SET status='$status' WHERE ((status='Served')&&(table_no=$table_no))";

if (mysqli_query($conn, $sql)) {
    header("Location: recipt.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


$sql = "UPDATE  table_no SET status='free' WHERE status='busy'";

if (mysqli_query($conn, $sql)) {
    header("Location: recipt.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>