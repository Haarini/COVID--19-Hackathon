<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid19";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectionx	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="UPDATE requirement SET Status=1 WHERE Name='".$_POST['namee']."'";
$result = mysqli_query($conn, $sql);
error_reporting(0);
if(result)
{
	header("refresh:1; url=Adminpage.php");
}
mysqli_close($conn);
?>