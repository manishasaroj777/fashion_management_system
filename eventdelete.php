<?php 
include("connection.php");
if(isset($_REQUEST["delid"]))
{
 $id=$_REQUEST["delid"];
 mysqli_query($con,"delete from event where eno='$id'");
}
	$query=mysqli_query($con,"select * from event ");
	$rowcount=mysqli_num_rows($query);
?>	
<html>
<head>
<link rel="stylesheet" href="css/tablecss.css">
</head>
<body>
              <div class="box">
	<table border="1"  align=center>
	<tr>
	 <th>Event Number</th>
	 <th>Event Name</th>
     <th>Event Place</th>
     <th>Event Date</th>
     <th>Event Year</th>
     <th>Event Month</th>
	 <th>Delete</th>
	 <th>Edit</th>
	 <th>Back</th>
	</tr>
	
	
	<?php 
	for($i=1;$i<=$rowcount;$i++)
	{
		$row=mysqli_fetch_array($query);
	?>
	
	<tr>
	<td><?php echo $row["eno"] ?></td>
	<td><?php echo $row["ename"] ?></td>
	<td><?php echo $row["eplace"] ?></td>
	<td><?php echo $row["edate"] ?></td>
	<td><?php echo $row["eyear"] ?></td>
	<td><?php echo $row["emon"] ?></td>
	<td><a href="eventdelete.php?delid=<?php echo $row["eno"]?>"><font color="black">Delete</font></a></td>
	<td><a href="eventedit.php?eid=<?php echo $row["eno"]?>"><font color="black">Edit</font></a></td>
	<td><a href="eventdetails.html"><font color="black">Back</font></a></td>
	</tr>
	<?php
	}
	?>
             </div>
	</table>
            </body>
            </html>
	