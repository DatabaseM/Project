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

$cid = $_POST['sid'];
$name = $_POST['name'];
$cno = $_POST['cno'];
$email = $_POST['email'];
$add = $_POST['add'];


$sql = "INSERT INTO supplier VALUES ('$cid','$name','$cno','$email','$add')";

if(mysqli_query($conn, $sql)){

  
    $message = "Records added successfully.";
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
echo '<meta http-equiv="refresh" content="1; url=adds.html">';
exit();

?>

