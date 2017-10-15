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

$emp_username = $_POST['username'];
$emp_password = $_POST['password'];

$sql = "INSERT INTO users VALUES ('$emp_username','$emp_password')";

if(!mysqli_query($conn, $sql)){

  echo "Records added successfully.";

} 
else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);
header("Location: login.html"); /* Redirect browser */
exit();

?>

