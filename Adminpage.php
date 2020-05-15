<html>
<head>
<title>AdminPage</title>
<style>
.but{
    -webkit-box-align:center;
    -ms-flex-align:center;
     align-items:center;
     display:-ms-flexbox;
	 display:flex;
	-webkit-box-orient:horizontal;
	-webkit-box-direction:normal;
	-ms-flex-flow:row nowrap;
	 flex-flow:row nowarp;
    -webkit-box-pack:start;
     justify-content:flex-start;
     position:relative;

}
.bu1 {
    background-color: #13498A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 33%;

}
.bu2 {
    background-color: #0AC6D9 ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 33%;

}
.bu3 {
    background-color: #550B97;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 33%;

}
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
<div class="but" >
<img src="image1.jpg" class="imgg" height="20%" width="20%" >
<h1 style="text-decoration: none;
     font-size: 20px;
	 font-family: 'Lora',serif;
     font-weight:bold;
     color:#7c203d;
     padding:10px;">VOLUNTEERS WORK ASSIGNMENT</h1> 
<a href="Firstpage.php" align="left">Logout</a>
</div>
</head>
<body>
<br>
<div>
<center>
<a href="Addwork.php"><button class="bu1">Add Work</button></a>
<a href="Volunteercontrol.php"><button class="bu2">Volunteer Work</button></a>
<button class="bu3">Delete Work</button>
</center>
</div>
<div style=" border: 5px solid black;">
<center><h1>Requirement Status</h1></center>
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
$sql="Select Rid, Name, AdhaarNo,Address,Pincode,Requirement,Amount,Status from requirement WHERE Status=0";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row1 = mysqli_fetch_assoc($result)) {
echo "<form method='POST' action='Accept.php'><table id='myTable' width='100%'><tr><td><div class='dis' ><i><b>Name : </b>" 
   .$row1["Name"]. 
   "<br><input type='hidden' name='rep' value=".$row1['Rid'].">
   <input type='hidden' name='namee' value=".$row1['Name']."><b> AdhaarNo : </b>"
   .$row1["AdhaarNo"].   
    "<br><b>Address :</b><mark style='background-color:#66ffcc; padding:2px;'>".$row1["Address"].
	",".$row1["Pincode"]."</mark><br><b> Requirement: </b>"
	.$row1["Requirement"].
	"<br><b> Amount : </b>".$row1["Amount"]."<br><b>Status:</b>".$row1["Status"]."<br><button type='submit' class='butr'>Accept<i class='fa fa-angle-double-right' style='font-size:16px'></i></button></div><hr></td></tr></table></form>";
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

<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
</body>
</html>