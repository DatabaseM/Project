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
$sql = "DELETE FROM transsell WHERE tsid='$emp_id'";


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
header("Location: sdel.html"); /* Redirect browser */
exit();

?>

