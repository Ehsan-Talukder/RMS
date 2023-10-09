<?php include("config.php");

echo  $table_no      = ($_REQUEST['table_no']);
$status="free";


$sql = "INSERT INTO table_no (table_no,status) VALUES ('$table_no','$status')";

if (mysqli_query($conn, $sql)) {
    header("Location: table_no.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
