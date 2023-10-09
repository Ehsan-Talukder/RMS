<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $name      = ($_REQUEST['name']);
echo  $salary  = ($_REQUEST['salary']);
echo  $designation  = ($_REQUEST['designation']);
echo  $status  = ($_REQUEST['status']);
echo  $restaurent_name  = ($_REQUEST['restaurent_name']);



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


$sql = "UPDATE  employee_list SET image='$filename', name='$name', salary='$salary', designation='$designation', status='$status', restaurent_name='$restaurent_name' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: employee.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
