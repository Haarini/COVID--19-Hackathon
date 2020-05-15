<!DOCTYPE html>
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

button{
    background-color: #13498A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
.imgg{
	margin-left:10%;
}
.nur
{
	 text-decoration: none;
	 font-family: "Times New Roman", Times, serif;
     font-size: 30px;
     color:#EE2525;
     padding:10px;
	}
input[type=text],input[type=email] {
    /*Input Text Box*/
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}
</style>
<script src="https://cdn.tiny.cloud/1/j4lulrw9o75vw2ket9oxjp657e69ltiga55l659qcf36lt81/tinymce/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<meta charset="UTF-8">
<title>Send email via Gmail SMTP server in PHP</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="robots" content="noindex, nofollow">
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43981329-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body>
<div class="but" >
<img src="image1.jpg" class="imgg" height="20%" width="20%" >
<h1 style="text-decoration: none;
     font-size: 20px;
	 font-family: 'Lora',serif;
     font-weight:bold;
     color:#7c203d;
     padding:10px;">VOLUNTEERS WORK</h1> 
</div>
<br>
<form action="index.php" method="post">
<label for="ques"><b>To:</b></label><br>
<input type="text" placeholder="To : Email Id " name="toid" value='<?php 
error_reporting(0);
echo $_GET['idd']?>'/><br>
<label for="ques"><b>Message:</b></label><br>
      <textarea  name="ide" class="texta" ><i>Dear User,
<br>&nbsp&nbsp&nbsp&nbsp&nbsp<b><?php
error_reporting(0);
 echo $_POST['namee'];?></b>
<br><br>	
Your Application has been Accepted

you will come on time volunteering area..</i>

<br><br>
<i>
<b>
CONFIDENTIALITY NOTICE:</b><br>
The contents of this email message and any attachments are intended solely for the addressee(s)
and may contain confidential and/or privileged information and may be legally protected from
disclosure. If you are not the intended recipient of this message or their agent, or if this message
has been addressed to you in error, please immediately alert the sender by reply email and then
delete this message and any attachments. If you are not the intended recipient, you are hereby
notified that any use, dissemination, copying, or storage of this message or its attachments is
strictly prohibited. 
</i>
<br><br>
Regards, <br>
COVID Rescue
</textarea><br>
<button type="submit" value="Send" name="send"/>Send
</button>
</form>

<?php
require 'PHPMailer/PHPMailerAutoload.php';
if(isset($_POST['send']))
{
$email = 'snhchannel30@gmail.com';
$password = 'nuril1999';
$to_id = $_POST['toid'];
$message = $_POST['ide'];
$subject = 'RIT ADMIN';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
  header("refresh:1; url=Adminpage.php");
}
}
else{

}
?>
</body>
</html>

