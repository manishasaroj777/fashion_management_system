<?php
include("connection.php");
?>


<?php
$sql="SELECT count(mno) AS total FROM models ";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
$num_rows=$num_rows+1;

if(isset($_POST['Save']))
{
$nm  =$_POST['nm'];
$eid  =$_POST['eid'];
$mmno  =$_POST['mmno'];
$ad=$_POST['ad'];
$ht   =$_POST['ht'];
$age =$_POST['age'];
$ex   =$_POST['ex'];
$dt   =$_POST['dt'];
$s1   =$_POST['s1'];
$s2 =$_POST['s2'];
$r1  =$_POST['r1'];


 if( $nm!=""   &&  $eid!="" &&  $mmno!=""  &&  $ad!="" &&  $ht!="" &&  $age!="" &&  $ex!=""  &&  $dt!="" &&  $s1!=""  &&  $s2!="" &&  $r1!="" )
{
 
  $query="INSERT INTO models  values( ' ','$nm',  '$eid', '$mmno', '$ad', '$ht', '$age', '$ex', '$dt', '$s1', '$s2','$r1')";
  $data=mysqli_query($con,$query);
  if($data)
  { echo "record inserted successfully";
  }
}
  else
  {
  echo "!!!!plz fill all the records";
  }
}


if(isset($_POST['Display']))
{
  $query="select * from models";
  $result=mysqli_query($con,$query);
echo"<table border=1  cellpadding=7 align=center>";
  echo"<tr><th align=center>Model Id</th>
                <th align=center>Model  Name</th>
                <th align=center>Model  Email Id</th>
               <th align=center>Model  Mobile no.</th>
                <th align=center>Model Address</th>
                <th align=center>Model  Height</th> 
                <th align=center>Model  Age</th>
               <th align=center>Model  Experience</th>
	           <th align=center> Model  Date</th>
            <th align=center>Model  Year</th>
            <th align=center>Model  Month</th>
            <th align=center>Model  Gender</th>
  </tr>";
  while($cols=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    echo"<tr><td align=center>".$cols["mno"]
	."</td><td align=center>".$cols["mname"]
	."</td><td align=center>".$cols["meid"]
              ."</td><td align=center>".$cols["mmno"]
	."</td><td align=center>".$cols["maddr"]
	."</td><td align=center>".$cols["height"]
	."</td><td align=center>".$cols["age"]
	."</td><td align=center>".$cols["exp"]
	."</td><td align=center>".$cols["mdate"]
	."</td><td align=center>".$cols["myear"]
	."</td><td align=center>".$cols["mmon"]
	."</td><td align=center>".$cols["gender"]."</td></tr>";
   
  }
echo"</table>";

}



if(isset($_POST['remove']))
{
	include("modelsdelete.php");
}


if(isset($_POST['Update']))
{
	include("modelsdelete.php");
}

if(isset($_POST['cancel']))
{
   include("menu1.html");	
}
?>