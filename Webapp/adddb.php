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
 $wid=uniqid();
 
 $add=$_POST['str'];
 $add2=$_POST['str2'];
 $add3=$_POST['cty'];
 $add4=$_POST['st'];
 $sta=0;
 $a=$add.",".$add2.",".$add3.",".$add4;
$sql="INSERT INTO `volunteering`(`Wid`, `Work_field`, `No_of_volunteer`, `Email`, `Contact`, `From_Time`, `To_Time`, `VDate`, `Address`, `Pincode`, `Status`) VALUES
('$wid','$_POST[rep]','$_POST[coun]','$_POST[email]','$_POST[con]','$_POST[appt]','$_POST[appt1]','$_POST[dte]','$a','$_POST[pos]','$sta')";	

$result = mysqli_query($conn, $sql);
if ($result) {
	
    echo "<script>alert('Successfully Work Added')</script>";	
    header("refresh:1; url=Adminpage.php");
	}
	else
	{
		echo "<script>alert('Fill Correct Details')</script>";
		header("url=Addwork.php");
	}

?>