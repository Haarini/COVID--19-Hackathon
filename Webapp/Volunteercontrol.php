<html>
<head>
<title>Volunteer Control panel</title>
<style>
.butr
{
	background-color: #550B97;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 5%;
}
button:hover {
    opacity: 0.8;
}
</style>
</head>
<body>
<div style=" border: 5px solid black;">
<center><h1>Volunteering Register Status</h1></center>
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
$sql="Select Name, Wid, Email, AdhaarNo, MobileNo, Address,Status from volunteerregister";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row1 = mysqli_fetch_assoc($result)) {
echo "<form method='POST' action='index.php?idd=".$row1["Email"]."'>
<table id='myTable' width='100%'><tr><td><div class='dis' ><i><b>Name : </b>" 
   .$row1["Name"]."<br><b>Work id: </b>" .$row1["Wid"].
   "<br><input type='hidden' name='rep' value=".$row1['MobileNo']."><b>Email:</b>".$row1['Email']."
   <input type='hidden' name='namee' value=".$row1['Name']."><br><b> AdhaarNo : </b>"
   .$row1["AdhaarNo"].   "<br><b>Mobile No</b>".$row1["MobileNo"]. 
    "<br><b>Address :</b><mark style='background-color:#66ffcc; padding:2px;'>".$row1["Address"].
	"</mark><br><b>Status:</b>".$row1["Status"]."<br><button type='submit' class='butr'>Accept<i class='fa fa-angle-double-right' style='font-size:16px'></i></button></div><hr></td></tr></table></form>";
}

}
else
{
    echo "<br><br><br><h1 align='center'> No Record are Found";	
}
mysqli_close($conn);
?>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
