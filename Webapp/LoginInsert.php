<?php
$uname=$_POST['uname'];//username
$password=$_POST['password'];//password 

if($uname=="gov" && $password=="gov@123" )
{
	
	header("refresh:1;url=Adminpage.php");

}
else
{
	echo "<script>alert('Please Fill Proper Details')</script>";
	header("refresh:1;url=Firstpage.php");// it takes 1 sec to go index page	    
}

?>
