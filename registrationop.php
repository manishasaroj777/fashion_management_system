<?php
include("connection.php");

?>


<?php
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
  
if($fname!="" && $lname!="" &&  $reid!="" && $rmno!="" && $psw!="" && $repsw!="" && $r1!="")
{
  $query="INSERT INTO registration  values('$num_rows','$fname','$lname','$reid','$rmno','$psw','$repsw','$r1')";
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
echo"<script type='text/javascript'>alert('plzz fill all the fields');</script>";	
	
}
  	
}




if(isset($_POST['cancel']))
{
   include("menu.html");	
}


if(isset($_POST['Display']))
{	

  $query="select * from registration";
  $result=mysqli_query($con,$query);
 echo"<table border=1 align=center  cellpadding=7>";
  echo"<tr>      <th align=center>Registration Id</th>
                <th align=center >First Name</th>
                <th align=center >Last Name</th>
                <th align=center >Email Id</th>
                   <th align=center >Mobile number</th>
                <th align=center >Password</th>  
                <th align=center >Re-Enter Password</th>
                <th align=center >Date</th>
               <th align=center >Gender</th></tr>";
  while($cols=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    echo"<tr><td align=center >".$cols["rno"]
    ."</td><td align=center >".$cols["fname"]
    ."</td><td align=center>".$cols["lname"]
    ."</td><td align=center>".$cols["reid"]
      ."</td><td align=center>".$cols["rmno"]
     ."</td><td align=center>".$cols["psw"]
     ."</td><td align=center>".$cols["repsw"]
      ."</td><td align=center>".$cols["date"]
     ."</td><td align=center >".$cols["gender"]
      ."</td></tr>";
   
  }
echo"</table>";
}



if(isset($_POST['remove']))
{
	include("registdelete.php");
}

if(isset($_POST['Update']))
{
	include("registdelete.php");
}
if(isset($_POST['cl']))
{
   include("menu1.html");	
}
?>