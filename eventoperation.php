<?php
include("connection.php");
?>


<?php
$sql="SELECT count(eno) AS total FROM event ";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
$num_rows=$num_rows+1;

if(isset($_POST['Save']))
{
$en=$_POST['nm'];
$p=$_POST['place'];
$dt=$_POST['dt'];
$yr=$_POST['s1'];
$mn=$_POST['s2'];
 
 if($en!="" && $p!="" &&  $dt!="" && $yr!="" && $mn!="" )
{
  $query="INSERT INTO event values(' ','$en','$p','$dt','$yr','$mn')";
  $data=mysqli_query($con,$query);
  if($data)
  { echo "record inserted successfully";
  }
}
  else
  {
  echo "!!! plz fill all the record";
  }
}


if(isset($_POST['Display']))
{
  $query="select * from event";
  $result=mysqli_query($con,$query);
 echo"<table border=1 align=center cellpadding=7>";
  echo"<tr><th align=center>Event Number</th>
                <th align=center>Event Name</th>
                <th align=center>Event Place</th>
                <th align=center>Event Date</th>
                <th align=center>Event Year</th>
                <th align=center>Event Month</th>   
                </tr>";
  while($cols=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    echo"<tr><td align=center>".$cols["eno"]
	."</td><td align=center>".$cols["ename"]
	."</td><td align=center>".$cols["eplace"]
	."</td><td align=center>".$cols["edate"]
	."</td><td align=center>".$cols["eyear"]
	."</td><td align=center>".$cols["emon"]
	."</td></tr>";
   
  }

echo"</table>";
}



if(isset($_POST['remove']))
{
	include("eventdelete.php");
}

if(isset($_POST['Update']))
{
	include("eventdelete.php");
}
if(isset($_POST['cancel']))
{
   include("menu1.html");	
}
?>