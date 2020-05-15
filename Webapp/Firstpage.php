<!DOCTYPE html>	
<html>
<head>
<title>Volunteer Work</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src = "http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>

.rdj {
	/*Top Navigation*/
	border: 3px solid #f1f1f1;
    width: 30%;
    height:auto;
    padding: 10px;
    align:right;
    margin-left:5%;
    margin-right:7%;
    font-family: "Open Sans",sans-serif;
    right:0px;
    position: absolute;  
}

.sel
{
	/*Select User Design*/
    width: 100%;
    padding: 12px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}
input[type=text], input[type=password],input[type=email] {
    /*Input Text Box*/
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}
/*Button Properties */
button {
    background-color: #13498A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

button:hover {
    opacity: 0.8;
}
/*Cencel Button Design */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


/*Alignment of Login */
.container {
    padding: 20px;

}
/* Password */
span.psw {
    float: right;
    padding-top: 16px;
}
/* Link Design */
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {

    padding: 5px,10px;
    margin-top:5px;
    display:inline-block;
    width: 20px;
    height:20px;
    text-decoration: none;
}

.fa-twitter {
	
     padding: 5px,10px;
     margin-top:5px;
     display:inline-block;
     width: 20px;
     height:20px;
     text-decoration: none;
}
.fa-google {
	
     padding: 5px,10px;
     margin-top:5px;
     display:inline-block;
     width: 20px;
     height:20px;
     text-decoration: none;
}

.fa-linkedin {
     padding: 5px,10px;
     margin-top:5px;
     display:inline-block;
     width: 20px;
     height:20px;
     text-decoration: none;

}
.fa-instagram {
     padding: 5px,10px;
     margin-top:5px;
     display:inline-block;
     width: 20px;
     height:20px;
     text-decoration: none;

}

/* body Sizes */
 body
{
	 background-image: url('image3.jpg');
	 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
    
}
/* Top Navigation Button Design */
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
/* Top Navigation Button Design */
.nur
{
	 text-decoration: none;
     font-size: 20px;
	 font-family: "Lora",serif;
     font-weight:bold;
     color:#7c203d;
     padding:10px;
	}
/* College Images Design */
* {
 box-sizing: border-box;
 }
 .navbar
{

    display:flex;
    flex-direction:cloumn;
    flex:1 0 auto;

}
.ref{
	font-weight:bold
}
.tre{
	right:7%;
	position:absolute;
}


/* Extra styles for the cancel button */
.cancelbtnn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtnn, .signupbtn {
     float: left;
     width: 50%;
}

/* Add padding to container elements */


/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfixx::after {
     content: "";
     clear: both;
     display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtnn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body >


<span class="pull-right">

<a href="#" ><i class="fa fa-google"></i></a> | <a href="#" ><i class="fa fa-facebook"></i></a> | <a href="#" ><i class="fa fa-twitter"></i></a> | <a href="#"><i class="fa fa-instagram"></i></a></span>

<br>
 <div class="but" >
<img src="image1.jpg" class="imgg" height="20%" width="20%" >
<h1 style="text-decoration: none;
     font-size: 20px;
	 font-family: 'Lora',serif;
     font-weight:bold;
     color:#7c203d;
     padding:10px;">VOLUNTEERS WORK</h1> 

</div>
<div class="tre">
<a href="Register.php"><button style="width:auto;"><i class="fa fa-user-plus" style="font-size:15px"></i>Sign Up</button></a>
</div>
 
 <div style="text-align:center;"> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FKolkata" width="auto" height="auto" frameborder="0" seamless></iframe> </div>
<div class="navbar" >
 
	


<div class="rdj">
 
 <form method="POST" action="LoginInsert.php" >
    
  <div class="container">           

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" onclick="lsRememberMe()">Login</button>
 
	<label>
      <input type="checkbox" checked="checked" name="remember" id="rememberMe" value="lsRememberMe"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="About.php" class="nur"><i class="fa fa-info-circle" aria-hidden="true" style="font-size:36px"></i></a>
    <span class="psw">Forgot <a href="Feedback.php">password?</a></span>
  </div>

	</form>

</div>

</div> 

<script>
const rmCheck = document.getElementById("rememberMe"),
    emailInput = document.getElementById("email");

if (localStorage.checkbox && localStorage.checkbox !== "") {
  rmCheck.setAttribute("checked", "checked");
  emailInput.value = localStorage.username;
} else {
  rmCheck.removeAttribute("checked");
  emailInput.value = "";
}

function lsRememberMe() {
  if (rmCheck.checked && emailInput.value !== "") {
    localStorage.username = emailInput.value;
    localStorage.checkbox = rmCheck.value;
  } else {
    localStorage.username = "";
    localStorage.checkbox = "";
  }
}
</script>

<script>

</script>

</body>
<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
</html>
