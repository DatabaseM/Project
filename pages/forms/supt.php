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

$emp_id = $_POST['tsid'];
$emp_id = trim($emp_id);
$pid = $_POST['pid'];
$amt = $_POST['amt'];
$tax = $_POST['tax'];
$date = $_POST['date'];
$qty = $_POST['qty'];
$cid = $_POST['cid'];



$sql = "UPDATE transsell SET pid='$pid',quantity='$qty',amount='$amt',tax='$tax', cid='$cid',date='$date' WHERE tsid='$emp_id'";

if(mysqli_query($conn, $sql)){

  
    $message = "Records updated successfully.";
echo "<script type='text/javascript'>alert('$message');</script>";

} 
else{

    $message= "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "<script type='text/javascript'>alert('$message');</script>";

}

 

// close connection

    echo '<script language="Javascript" type="text/javascript">';
    echo     'alert('. json_encode($message) .');';
    echo '</script>';


// close connection

mysqli_close($conn);
//header("Location: addp.php"); /* Redirect browser */
echo '<meta http-equiv="refresh" content="1; url=sup.php">';
exit();

?>

