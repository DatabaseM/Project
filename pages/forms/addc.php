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

$cid = $_POST['cid'];
$name = $_POST['name'];
$cno = $_POST['cno'];
$email = $_POST['email'];
$add = $_POST['add'];


$sql = "INSERT INTO customer VALUES ('$cid','$name','$cno','$email','$add')";

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
header("Location: addc.html"); /* Redirect browser */
exit();

?>

