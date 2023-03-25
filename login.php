<?php
session_start();
$servername="localhost";
$password="";
$username="root";
$dbname="sybca";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con)
{ echo""; }

else
{
die("enabled to connect because".mysqli_connect_error());
}
if(isset($_REQUEST["submit"]))
  {
                
	  $un=$_REQUEST["t1"];
	  $ps=$_REQUEST["t2"];
	  $result=mysqli_query($con,"select * from registration where reid='$un' && psw='$ps' ");
	  if(mysqli_num_rows($result)==1)
	  {
                             $_SESSION['login_user']=$un;
                             $_SESSION['pass']=$ps;
                            echo'<script>alert("login sucessfully"); </script>';
		  header('location:userlog.html');
		  
		  
	  } 	
           else
		 
	  {
			  echo'<script>alert("invalid "); </script>';
                                            session_destroy();
	  }
	  
  }

if(isset($_REQUEST["cancel"]))
  {
session_destroy();
header('location:menu.html');
 }
?>


<!doctype html>

<html>
<meta charset="utf-8">
<head><title>Login Form Design</title>
<link rel="stylesheet" href="css/cssfile.css">
</head>
<body>
<img src="images/actor-adult-black-and-white-432059 - Copy~1.jpg" width="1500" height="800" alt=""/>
<div class="box">
  <h2>login</h2>
 <form>
  <div class="inputBox">
    <input type="text" name="t1"  id="t1" autocomplete="off">
    <label>Username</label>
  </div>
<div class="inputBox">
    <input type="password" name="t2" id="t2" autocomplete="off">
    <label>Password</label><br><br><br><br>
  </div>
 <input type="submit"  value="submit" name="submit" id="submit">
 <input type="submit"  value="cancel" name="cancel" ><br><br><br>
	 <div class="inputBox">
		<ul><li><a href="registration.php" target=_blank><h2><font color= #03a9f4>Register Now</font></h2> </li></ul>
              </div>
</form>
</div>
</body>
</html>