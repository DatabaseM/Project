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

$emp_id = $_POST['cid'];
$emp_id = trim($emp_id);
$name = $_POST['nname'];
$cno = $_POST['cno'];
$email = $_POST['email'];
$add = $_POST['add'];

$sql = "UPDATE customer SET name='$name',contact_no='$cno',email='$email',address='$add' WHERE cid='$emp_id'";

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
header("Location: upc.html"); /* Redirect browser */
exit();

?>

