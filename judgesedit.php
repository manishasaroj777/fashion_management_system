<?php 
include("connection.php");
if(isset($_REQUEST["eid"]))
{
 $eid=$_REQUEST["eid"];
 $query=mysqli_query($con,"select * from judges where jno='$eid'");
 $row=mysqli_fetch_array($query);
  
}
if(isset($_REQUEST["submit"]))
{
	$en=$_REQUEST["en"];
	$mn=$_REQUEST["mn"];
	$ad=$_REQUEST["ad"];
	$ei=$_REQUEST["ei"];
	$da=$_REQUEST["da"];
	$jy=$_REQUEST["jy"];
	$jm=$_REQUEST["jm"];
              if( $en!=""  &&  $mn!=""  &&  $ad!=""  &&  $ei!="" &&  $da!="" &&  $jy!="" &&  $jm!="")
              {
	mysqli_query($con,"UPDATE judges SET jname='$en' ,mno='$mn' ,addr='$ad',eid='$ei',date='$da' ,jyear='$jy',jmon='$jm' where jno='$eid'");
	header('location:judgesdelete.php');
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
<label>Judges Name</label><input type="text" name="en" value="<?php echo $row["jname"] ?>"   pattern="[A-Za-z\s]+"    title="enter character only  e.g. john"><br>
<label>Judges  mobile no:</label><input type="text" name="mn" value="<?php echo $row["mno"] ?>" pattern="[0-9]{10}"  title="enter 10 number only"><br>
<label>Event Address</label><input type="text" name="ad" value="<?php echo $row["addr"] ?>"  ><br>
<label>Event Email Id</label><input type="text" name="ei" value="<?php echo $row["eid"] ?>"    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="enter valid email id"><br>
<label>Event Date</label><input type="date" name="da" value="<?php echo $row["date"] ?>"><br>
<label>Event Year</label><input type="text" name="jy" value="<?php echo $row["jyear"] ?>" pattern="[0-9]{4}" title="enter valid year"><br>
<label>Event Month</label><input type="text" name="jm" value="<?php echo $row["jmon"] ?>" pattern="[A-Z][a-z]{1,13}" title="only alphabets is allowed"><br> 
</div>
<input type="submit" name="submit" value ="submit">

</form>
</div>
</body>
</html>