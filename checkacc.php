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

$sql = "SELECT * FROM users WHERE name='$emp_username' and password='$emp_password'";
echo $sql;

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


if ($count == 1){
	mysqli_close($conn);
	header("Location: index.html"); /* Redirect browser */
	exit();
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.mysqli_close($link);
	header("Location: login.html"); /* Redirect browser */
	exit();
}


