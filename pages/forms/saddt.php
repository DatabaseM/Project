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

$tsid = $_POST['tsid'];
$pid = $_POST['pid'];
$amt = $_POST['amt'];
$tax = $_POST['tax'];
//$sid = $_POST['ssid'];
$qty = $_POST['qty'];
$cid = $_POST['cid'];

$flag=0;

$sql2="SELECT * from stock where pid=$pid";
$sql3=mysqli_query($conn, $sql2); 
 $row4 = mysqli_fetch_array($sql3);
$sql1=$row4['quantity'];
    
if($sql1<$qty)
{
    $message1="Insufficient Stock";
    $flag=1;
     echo '<script language="Javascript" type="text/javascript">';
    echo     'alert('. json_encode($message1) .');';
    echo '</script>';
}
$sql = "INSERT INTO transsell (tsid, pid, date, quantity, amount, tax, cid) VALUES ('$tsid','$pid',now(),'$qty','$amt','$tax','$cid')";
if($flag==0)
{
if(mysqli_query($conn, $sql)){

  
    $message = "Records added successfully.";
echo "<script type='text/javascript'>alert('$message');</script>";

} 
else{

    $message= "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "<script type='text/javascript'>alert('$message');</script>";

}
//$sql1 ="SELECT @a";
}
//mysqli_query($conn, $sql1);
/*if($sql1 <10)
{
    $message1="Stock is less.Please Order new Stock.";
          echo '<script language="Javascript" type="text/javascript">';
    echo     'alert('. json_encode($message1) .');';
    echo '</script>';

}
 */
$r1="SELECT * from stock where pid=$pid";
$r2=mysqli_query($conn, $r1); 
 $r3 = mysqli_fetch_array($r2);
$r4=$r3['quantity'];
if($r4<10)
{
     $message2="Stock is less.Please Order new Stock.";
          echo '<script language="Javascript" type="text/javascript">';
    echo     'alert('. json_encode($message2) .');';
    echo '</script>';
}
// close connection


    echo '<script language="Javascript" type="text/javascript">';
    echo     'alert('. json_encode($message) .');';
    echo '</script>';


// close connection

mysqli_close($conn);
//header("Location: addp.php"); /* Redirect browser */
echo '<meta http-equiv="refresh" content="1; url=sadd.php">';
exit();


?>

