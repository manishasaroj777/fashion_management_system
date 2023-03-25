<?php
include("connection.php");
$sql="SELECT count(rno) AS total FROM registration ";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
$num_rows=$num_rows+1;

if(isset($_POST['Save']))
{

	$fname=$_POST['nm'];
	$lname=$_POST['lnm'];
	$reid=$_POST['email'];
	$rmno=$_POST['mob'];
	$psw=$_POST['pass'];
	$repsw=$_POST['rpass'];
              $dt=$_POST['dt'];
               $r1=$_POST['r1'];

if($fname!="" && $lname!="" &&  $reid!="" && $rmno!="" && $psw!="" && $repsw!="" && $dt!=""  && $r1!="")
{

  $query="INSERT INTO registration  values(' ','$fname','$lname','$reid','$rmno','$psw','$repsw','$dt','$r1')";
  $data=mysqli_query($con,$query);
		if($data)
		{ 
            echo "<script type='text/javascript'>alert('record inseted');</script>";
		}
		else
		{	
		echo"<script type='text/javascript'>alert('not inserted record');</script>";
                         }	
}
else
{
echo"<script type='text/javascript'>alert('Plz!!!! fill out all the feilds');</script>";
}
}


?>





<!doctype html>

<html>
<meta charset="utf-8">
<head><title>Registration Form</title>
<link rel="stylesheet" href="css/cssfile.css">
<link rel="stylesheet" href="css/cssfilemenu.css">
<script type="text/javascript">
function valid()
{
var str=document.regis.rpass.value;
var st=document.regis.pass.value;
if(rpass.value==pass.value)
{
return true;
}
else
{
window.alert("!!!!plz both the password should match");
rpass.value="";
return false;

}
}
</script>
</head>
<body>
<div id="main">
<nav>
<ul>
<li><a href="Menu.html">Home</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="login.php">Register</a></li>
<li><a href="adminlogin.php">Administrative</a></li>
<li><a href="#">logout</li>	
</ul>
</nav>

<img src="images/IMG_2133.JPG" width="1500" height="800" alt=""/>
<div class="box2">
 <h2>Registration Form  Details</h2>

<form method="post" action="" name="regis">

 <div class="inputBox">
<input type=text placeholder="First Name" name="nm" id="nm" autocomplete="off" pattern="[A-Z]{1}[a-z]{1,15}"   title="First letter in capital &  all in lowercase letters. e.g. John">
</div>

 <div class="inputBox">
<input type=text placeholder="Last Name"  name="lnm" id="lnm" autocomplete="off"  pattern="[A-Z]{1}[a-z]{1,15}"     title="First letter in capital &  all in lowercase letters. e.g. John"><br>
</div>

<div class="inputBox">
<input type="email" placeholder="Enter Email" name="email" id="email" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  autocomplete="off" title="enter valid email id"><br>
</div>

<div class="inputBox">
<input type=text placeholder="Mobile No"  name="mob" id="mob"   pattern="[0-9]{10}"  autocomplete="off" title="10 number should be there"><br>
</div>

<div class="inputBox">
<input type=password placeholder="Enter Password"  name="pass" id="pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  autocomplete="off"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
</div>

<div class="inputBox">
<input type=password placeholder="Conform Password"  name="rpass" id="rpass"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  autocomplete="off" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onchange="valid()"/><br>
</div>


<div class="inputBox">
<input type=date placeholder="Enter Date"  name="dt" id="dt"    autocomplete="off" title="Plzz Select Date" ><br>
</div>

<fieldset>
<div class="some-class">
<input type="radio" name=r1 value="Male" checked>
<label for="m"><font color=gray>Male</font></label>
<input type="radio" name=r1 value="Female">
<label for="f"><font color=gray>Female</font></label>
</div>
</fieldset>
<div class="inputBox1">	
<br>
      <input type=submit value=Save name=Save id="Save" >
       <input type=reset value=cancel name=cancel >
 </div>
</form>
</div>
</body>
</html>
