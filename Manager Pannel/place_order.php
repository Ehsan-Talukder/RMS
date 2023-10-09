<?php include 'config.php';
echo  $name  = ($_REQUEST['name']);
echo  $quantity  = ($_REQUEST['quantity']);
echo  $table_no  = ($_REQUEST['table_no']);
 $month=date('m');
  $date=date("Y/m/d"); 
$sql = "SELECT * FROM food_item  where id=$name";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
 echo   $name=$row['name'];
   echo $price=$row['price'];
    
  }} 
  
  $total_price= $price* $quantity;
  $status="not_confirmed";
  
$sql = "INSERT INTO orders (name) VALUES ('$name')";

if (mysqli_query($conn, $sql)) {
    
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>