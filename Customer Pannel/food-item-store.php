<?php include("config.php");

echo  $category_name      = ($_REQUEST['category_name']);
echo  $subcategoryName      = ($_REQUEST['subcategoryName']);
echo  $name      = ($_REQUEST['name']);
echo  $price  = ($_REQUEST['price']);
echo  $status  = ($_REQUEST['status']);
echo  $quantity  = ($_REQUEST['quantity']);
echo  $description  = ($_REQUEST['description']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;

$c_key=1;
$sql = "SELECT * FROM categories where category_name='$category_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $category=$row['category_name'];
        $c_key=0;
    }}
//    echo $c_key;


    $s_key=1;
    $sql = "SELECT * FROM subcategory ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $subcategory=$row['subcategoryName'];
      if($subcategory==$subcategoryName){
        $s_key=0;
      }else{
        $s_key=1;
      }
    }}

    // echo $s_key;

$sql = "INSERT INTO food_item (name, image, price, status, quantity, description, category_name, subcategory) VALUES ('$name', '$filename', '$price', '$status', '$quantity', '$description', '$category_name', '$subcategory')";

if (mysqli_query($conn, $sql)) {
    header("Location: category_food.php?name=Fast%20food");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


if($c_key==1){
$sql = "INSERT INTO categories ( category_name) VALUES ('$category_name')";

if (mysqli_query($conn, $sql)) {
    // header("Location: category_food.php?name=Fast%20food");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
}
if($s_key==1){
$sql = "INSERT INTO subcategory ( subcategoryName,categoryName) VALUES ('$subcategoryName','$category_name')";

if (mysqli_query($conn, $sql)) {
    // header("Location: category_food.php?name=Fast%20food");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
}