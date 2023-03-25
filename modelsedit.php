<?php 
include("connection.php");
if(isset($_REQUEST["eid"]))
{
 $eid=$_REQUEST["eid"];
 $query=mysqli_query($con,"select * from models where mno='$eid'");
 $row=mysqli_fetch_array($query);
  
}
if(isset($_REQUEST["submit"]))
{
	$mn=$_REQUEST["mn"];
	$mid=$_REQUEST["mid"];
    $mmno=$_REQUEST["mmno"];
	$madr=$_REQUEST["madr"];
	$ht=$_REQUEST["ht"];
	$ag=$_REQUEST["ag"];
	$ex=$_REQUEST["ex"];
	$mdt=$_REQUEST["mdt"];
	$myr=$_REQUEST["myr"];
	$mont=$_REQUEST["mont"];
	$gdr=$_REQUEST["gdr"];

 if( $mn!=""   &&  $mid!="" &&  $mmno!=""  &&  $madr!="" &&  $ht!="" &&  $ag!="" &&  $ex!=""  &&  $mdt!="" &&  $myr!=""  &&  $mont!="" &&  $gdr!="" )
 {	 
mysqli_query($con,"UPDATE models SET mname='$mn', meid='$mid' ,mmno='$mmno',maddr='$madr' ,height='$ht' ,age='$ag' ,exp='$ex' ,mdate='$mdt' ,myear='$myr' ,mmon='$mont' ,gender='$gdr' where mno='$eid'");
header('location:modelsdelete.php');
}
else
{
echo"<h1 color='red'>plzzz fill all data properly</h1>";}
}
?>
<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" href="css/cssfile.css">
<link rel="stylesheet" href="css/cssfilemenu.css">
</head>
<body bgcolor=gray>
<div class="box3">
<h2 >Update  Details</h2>	
<form method="post">
<div class="inputBox">
<label>Model Name</label><input type="text" name="mn" value="<?php  echo $row["mname"] ?>"  pattern="[a-zA-Z\s]+" title="plz enter name in alphabets"><br>
<label>Model Email Id</label><input type="text" name="mid" value="<?php echo $row["meid"] ?>"   pattern="[A-Za-z0-9._%+-]+@[A-za-z0-9.-]+\.[a-z]{2,}$" title="enter valid email id"><br>
<label>Mobile number</label><input type="text" name="mmno" value="<?php echo $row["mmno"] ?>"  pattern="[0-9]{10}"  title="10 digit number " ><br>
<label>Model Address</label><input type="text" name="madr" value="<?php echo $row["maddr"] ?>" title="plz enter address"><br>
<label>Model height</label><input type="text" name="ht" value="<?php echo $row["height"] ?>" pattern="[a-zA-Z0-9'\s]+" title="plz enter height "><br>
<label>Model Age</label><input type="text" name="ag" value="<?php echo $row["age"] ?>" pattern="[0-9]{1,2}" title="valid age" title="plz enter age><br>
<label>Model Experience</label><input type="text" name="ex" value="<?php echo $row["exp"] ?>" pattern="[0-9]{1,2}" title="enter in numbers (if non experience then put 0)"><br>
<label>Date </label><input type="date"   name="mdt" value="<?php echo $row["mdate"] ?>"><br>
<label>Year </label><input type="text"   name="myr" value="<?php echo $row["myear"] ?>" pattern="[0-9]{4}" title="enter valid year"><br>
<label>Month </label><input type="text"  name="mont" value="<?php echo $row["mmon"] ?>" pattern="[A-Z][a-z]{1,13}" title="only alphabets is allowed"><br>
<label>Gender </label><input type="text" name="gdr" value="<?php echo $row["gender"] ?>" pattern="[A-Z][a-z]{1,5}"><br>
</div>
<input type="submit" name="submit" value ="submit">
</form>
</div>
</body>
</html>