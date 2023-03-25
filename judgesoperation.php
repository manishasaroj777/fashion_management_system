<?php
include("connection.php");
?>


<?php
$sql="SELECT count(jno) AS total FROM judges ";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
$num_rows=$num_rows+1;

if(isset($_POST['Save']))
{

	$en=$_POST['jnm'];
	$m=$_POST['jmb'];
	$ad=$_POST['jaddr'];
	$eid=$_POST['jemail'];
	$dt=$_POST['dt'];
	$jyr=$_POST['s1'];
	$jm=$_POST['s2'];
 if($en!="" && $m!="" &&  $ad!="" && $eid!="" && $dt!="" && $jyr!="" && $jm!="" )
{
  $query="INSERT INTO judges  values(' ','$en','$m','$ad','$eid','$dt','$jyr','$jm')";
  $data=mysqli_query($con,$query);
  if($data)
  { echo "record inserted successfully";
  }
}
  else
  {
  echo "!!! plz fill all the data";
  }
}


if(isset($_POST['Display']))
{	
  $query="select * from judges ";
  $result=mysqli_query($con,$query);
 echo"<table border=1 align=center cellpadding=7>";
  echo"<tr><th align=center>Judges Number</th>
                <th align=center>Judges Name</th>
				<th align=center>Judges Mobile no.</th>
                <th align=center>Judges Address</th>
				<th align=center>Judges Email</th>
                <th align=center>Judges Date</th>
                <th align=center>Judges Year</th>
                <th align=center>Judges Month</th>   
                </tr>";
  while($cols=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    echo"<tr><td align=center>".$cols["jno"]
	."</td><td align=center>".$cols["jname"]
	."</td><td align=center>".$cols["mno"]
	."</td><td align=center>".$cols["addr"]
	."</td><td align=center>".$cols["eid"]
	."</td><td align=center>".$cols["date"]
	."</td><td align=center>".$cols["jyear"]
	."</td><td align=center>".$cols["jmon"]."</td></tr>";
   
  }

echo"</table>";
}



if(isset($_POST['remove']))
{
	include("judgesdelete.php");
}

if(isset($_POST['Update']))
{
	include("judgesdelete.php");
}
if(isset($_POST['cancel']))
{
   include("menu1.html");	
}
?>