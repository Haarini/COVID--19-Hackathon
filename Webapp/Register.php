<!DOCTYPE html>	
<html>
<head>
<title>Register !!!</title>
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
.sel
{
	/*Select User Design*/
    width: 20%;
    padding: 12px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}
input[type=text], input[type=password],input[type=email],input[type=date],input[type=tel] {
    /*Input Text Box*/
	width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	
}
.txt
{
	width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
label
{
	display: inline-block;
  width: 140px;
  text-align: right;
}
button {
    background-color: #13498A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 70%;

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
     padding:10px;">VOLUNTEERS REGISTRATION</h1> 

</div>
</head>
<body>
<form method="POST" action="LoginInsert.php" >
<hr>    
<center> 
 <div class="container">           
<label for="uname"><b>Title</b></label>
    <select class="sel" name="rep">
  <option value="Select value">Choose</option>
    <option value="Mr">Mr</option>
  <option value="Ms">Ms</option>
 <option value="Mrs">Mrs</option> 
</select><br><br>
<label for="names"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="namer" required><br><br>
	<label for="unames"><b>E-Mail</b></label>
    <input type="email" placeholder="Enter Mailid" name="uname" id="email" required><br><br>
     <label for="unames"><b>Birth Date</b></label>
     <input type="date" id="datee" name="datee"><br><br>
<label for="cont"><b>Contact</b></label>
    <input type="tel" placeholder="Enter Contact No" name="con" id="con" pattern="[0-9]{10}" required><br><br>
<label for="add"><b>Address</b></label><br><br>
    <input type="text" placeholder="Street Address" name="pos" id="pos" required>
    <input type="text" placeholder="Street Address line 2" name="pos" id="pos" required><br><br>
	<input type="text" placeholder="City" name="pos" id="pos" required>
	<input type="text" placeholder="State/Province" name="pos" id="pos" required><br><br>
	<input type="text" placeholder="Postal/Zip Code" name="pos" id="pos" required>
	<input type="text" placeholder="Country" name="pos" id="pos" required><br><br>
	<label for="add"><b>Qualification</b></label>
	<input type="text" placeholder="Enter Qualification" name="pos" id="pos" required><br><br>
	<label for="add"><b>Position</b></label>
	<input type="text" placeholder="Enter Position" name="pos" id="pos" required><br><br>
	<label for="psw"><b>Please indicate areas to volunteer according to your skills</b></label>
	<textarea id="w3mission" class="txt"rows="4" cols="50">
</textarea><br><br>
	<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>
        
    <button type="submit" >Register</button>
  </div>
</center>

	</form>
</body>
</html>

