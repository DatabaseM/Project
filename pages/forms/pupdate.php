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

$emp_id = $_POST['pid'];
$emp_id = trim($emp_id);
$name = $_POST['nname'];
$hsn = $_POST['nhsn'];
$sid = $_POST['nsid'];
$qty = $_POST['nqty'];
$unit = $_POST['nunit'];



$sql = "UPDATE stock SET name='$name',hsn_no='$hsn',quantity='$qty',unit='$unit',sid='$sid' WHERE pid='$emp_id'";

if(mysqli_query($conn, $sql)){

  
    $message = "Records updated successfully.";
echo "<script type='text/javascript'>alert('$message');</script>";

} 
else{

    $message= "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "<script type='text/javascript'>alert('$message');</script>";

}

 
    echo '<script language="Javascript" type="text/javascript">';
    echo     'alert('. json_encode($message) .');';
    echo '</script>';


// close connection

mysqli_close($conn);
//header("Location: addp.php"); /* Redirect browser */
echo '<meta http-equiv="refresh" content="1; url=upst.php">';
exit();


?>

