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

$tsid = $_POST['tid'];
$pid = $_POST['pid'];
$amt = $_POST['amt'];
$tax = $_POST['tax'];
$sid = $_POST['sid'];
$qty = $_POST['qty'];



$sql = "INSERT INTO transbuy (tbid, pid, date, quantity, amount, tax, sid) VALUES ('$tsid','$pid',now(),'$qty','$amt','$tax','$sid')";

if(!mysqli_query($conn, $sql)){

  
    $message = "Records added successfully.";
echo "<script type='text/javascript'>alert('$message');</script>";

} 
else{

    $message= "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "<script type='text/javascript'>alert('$message');</script>";

}

 

// close connection

mysqli_close($link);
header("Location: badd.html"); /* Redirect browser */
exit();

?>

