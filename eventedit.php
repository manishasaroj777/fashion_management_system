<?php 
include("connection.php");
if(isset($_REQUEST["eid"]))
{
 $eid=$_REQUEST["eid"];
 $query=mysqli_query($con,"select * from event where eno='$eid'");
 $row=mysqli_fetch_array($query);
  
}
if(isset($_REQUEST["submit"]))
{
	$en=$_REQUEST["en"];
	$p=$_REQUEST["p"];
	$dt=$_REQUEST["dt"];
	$yr=$_REQUEST["yr"];
	$em=$_REQUEST["em"];
	 
	if($en!="" && $p!="" &&  $dt!="" && $yr!="" && $em!="" )
        { 
	mysqli_query($con,"UPDATE event SET ename='$en' ,eplace='$p' ,edate='$dt' ,eyear='$yr',emon='$em' where eno='$eid'");
	header('location:eventdelete.php');
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
<div class="box">
<h2 >Update  Details</h2>	
<form method="post">
<div class="inputBox">
<label>Event Name</label><input type="text" name="en" value="<?php echo $row["ename"] ?>"   pattern="[A-Za-z\s]+"    title="please enter character only. e.g. john"><br>
<label>Event Place</label><input type="text" name="p" value="<?php echo $row["eplace"] ?>" title="please enter place"><br>
<label>Event Date</label><input type="date" name="dt" value="<?php echo $row["edate"] ?>" title="please select date"><br>
<label>Event Year</label><input type="text" name="yr" value="<?php echo $row["eyear"] ?>" pattern="[0-9]{4}" title="enter valid year"><br>
<label>Event month</label><input type="text" name="em" value="<?php echo $row["emon"] ?>" pattern="[A-Z][a-z]{1,13}" title="only alphabets is allowed"><br>
</div>
<input type="submit" name="submit" value ="submit">
</form>
</div>
</body>
</html>