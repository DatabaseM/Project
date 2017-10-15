<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$emp_id = $_POST['tid'];
$emp_id = trim($emp_id);
$pid = $_POST['pid'];
$amt = $_POST['amt'];
$tax = $_POST['tax'];
$date = $_POST['date'];
$qty = $_POST['qty'];
$sid = $_POST['sid'];



$sql = "UPDATE transbuy SET pid='$pid',quantity='$qty',amount='$amt',tax='$tax', sid='$sid',date='$date' WHERE tbid='$emp_id'";

if(mysqli_query($conn, $sql)){

  
    $message = "Records updated successfully.";
echo "<script type='text/javascript'>alert('$message');</script>";

} 
else{

    $message= "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "<script type='text/javascript'>alert('$message');</script>";

}

 

// close connection

mysqli_close($link);
header("Location: bup.html"); /* Redirect browser */
exit();

?>

