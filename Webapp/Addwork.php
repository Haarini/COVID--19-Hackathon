<html>
<head>
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
input[type=text], input[type=number],input[type=email],input[type=date],input[type=tel],input[type=time] {
    /*Input Text Box*/
	width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	
}
.sel
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
     padding:10px;">VOLUNTEERS WORK REGISTRATION</h1> 

</div>
</head>
<body>
<hr>
<form action="adddb.php" method="POST">
<center>
<label for="uname"><b>Field of Work</b></label>
<select class="sel" name="rep">
  <option value="Select value">Choose</option>
    <option value="Food">Food</option>
  <option value="Medicines">Medicines</option>
 <option value="Water">Water</option> 
<option value="Vegetables/groceries">Vegetables / Groceries</option>
<option value="Mask/Sanitizer">Mask / Sanitizer</option>
<option value="Clothes">Clothes</option>
</select><br><br>
<label for="vneed"><b>No of Volunteers needed</b></label>
<input type="number" placeholder="Enter Total Count" name="coun" id="coun" required><br><br>
<label for="maill"><b>Email</b></label>
<input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
<label for="cont"><b>Contact</b></label>
    <input type="tel" placeholder="Enter Contact No" name="con" id="con" pattern="[0-9]{10}" required><br><br>
	<label for="ft"><b>From Time</b></label>
	<input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>
	   <label for="tt"><b>To Time</b></label>
	   <input type="time" id="appt1" name="appt1"
       min="09:00" max="18:00" required><br><br>
	   <label for="dat"><b>Date</b></label>
	   <input type="date" name="dte" id="dte" required><br><br>
<label for="add"><b>Address</b></label><br><br>
    <input type="text" placeholder="Street Address" name="str" id="str" required>
    <input type="text" placeholder="Street Address line 2" name="str2" id="str2" required><br><br>
	<input type="text" placeholder="City" name="cty" id="cty" required>
	<input type="text" placeholder="State/Province" name="st" id="st" required><br><br>
	<input type="text" placeholder="Postal/Zip Code" name="pos" id="pos" required>
	<input type="text" placeholder="Country" name="cou" id="cou" required><br><br>
<button type="submit" >Post</button>
</center>
</form>
</body>
</html>
