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

$pid = $_POST['pid'];
$name = $_POST['pname'];
$hsn = $_POST['hsn'];
$sid = $_POST['sid'];
$qty = $_POST['qty'];
$unit = $_POST['unit'];

//$sid= "SELECT sid FROM supplier WHERE name='$sname'";
//mysqli_query($conn,$sid);

$sql = "INSERT INTO stock VALUES ('$pid','$name','$hsn','$qty','$unit','$sid')";

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
header("Location: addp.php"); /* Redirect browser */
exit();

?>

