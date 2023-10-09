<?php
include 'config.php';   
 $id=$_GET['id'];
$status="Served";
$sql = "UPDATE  orders SET status='$status' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>