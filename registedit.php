<?php 
include("connection.php");
if(isset($_REQUEST["eid"]))
{
 $eid=$_REQUEST["eid"];
 $query=mysqli_query($con,"select * from registration where rno='$eid'");
 $row=mysqli_fetch_array($query);
}
if(isset($_REQUEST["Save"]))
{
	$fn=$_REQUEST["fn"];
	$ln=$_REQUEST["ln" ];
	$emid=$_REQUEST["emid"];
              $mobile=$_REQUEST["mno"];
	$ps=$_REQUEST["ps"];
	$rps=$_REQUEST["rps"];
             $dt=$_REQUEST["dt"];
	$gdr=$_REQUEST["gdr"];
              if( $fn!=""  &&  $ln!=""  &&  $emid!=""  && $mobile!=""  &&  $ps!="" &&  $rps!=""  &&  $dt!=""  &&  $gdr!="")
              {
	mysqli_query($con,"UPDATE registration SET fname='$fn' ,lname='$ln' ,reid='$emid' ,rmno='$mobile' ,psw='$ps' ,repsw='$rps',date='$dt',gender='$gdr' where rno='$eid'");
	header('location:registdelete.php');
              }
             else
            {
            echo"<h1 color='red'>plzzz fill all data properly</h1>";
            }
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
<label>First Name</label><input type="text"     name="fn"   value="<?php echo $row["fname"] ?>"   pattern="[A-Z][a-z]{1,20}"   title="First letter in capital &  all in lowercase letters. e.g. john"><br>
<label>Last Name</label><input type="text"      name="ln"   value="<?php echo $row["lname"] ?>"   pattern="[A-Z][a-z]{1,20}"     title="First letter in capital &  all in lowercase letters. e.g. John"><br>
<label>Email Id</label><input type="text"       name="emid"  value="<?php echo $row["reid"] ?>"     pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  ><br>
<label>Mobile no</label><input type="text"     name="mno"   value="<?php echo $row["rmno"] ?>"   pattern="[0-9]{10}"          ><br>
<label>Password</label><input type="text"       name="ps"   value="<?php echo $row["psw"] ?>"  ><br>
<label>Re-entered Password</label><input type="text" name="rps" value="<?php echo $row["repsw"] ?>" ><br>
<label>Date</label><input type=date name="dt" value="<?php echo $row["date"] ?>" ><br>
<label>Gender</label><input type="text"   name="gdr" value="<?php echo $row["gender"] ?>"  pattern="[A-Z]{1}[a-z]{1,5}"  ><br>
</div>
<input type="submit"   name="Save" value ="submit">
</form>