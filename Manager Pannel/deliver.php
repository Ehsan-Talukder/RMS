<?php
include 'config.php';   
 $id=$_GET['id'];
$status="Paid & Delivered";
$sql = "UPDATE  order_list SET status='$status' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>