<?php include("config.php");

$id=$_GET['id'];
$from=$_GET['from'];
 $date=date("Y/m/d"); 
$table_no='09';
 $month=date('m');
 $name="sdfa";
             
$sql = "SELECT * FROM food_item  where id=$id ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $name=$row['name'];
    $price=$row['price'];
    
  }} 
  $quantity=1;
  $total_price= $price* $quantity;
$status="not_confirmed";


$sql = "INSERT INTO orders (name,price,quantity,total,status,table_no,date,month) VALUES ('$name','$price','$quantity','$total_price','$status','$table_no','$date','$month')";

if (mysqli_query($conn, $sql)) {
    
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

//update table no status
$sql = "UPDATE  table_no SET status='busy' where table_no='$table_no'";

if (mysqli_query($conn, $sql)) {
  header("Location: $from");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

