<?php 
include("connection.php");
if(isset($_REQUEST["delid"]))
{
 $id=$_REQUEST["delid"];
 mysqli_query($con,"delete from judges where jno='$id'");
}
	$query=mysqli_query($con,"select * from judges ");
	$rowcount=mysqli_num_rows($query);
?>	

<html>
<head>
<link rel="stylesheet" href="css/tablecss.css">
</head>
<body>
               <div class="box">
	<table border="1" align=ceter>
	<tr>
	 <th>Judges Number</th>
     <th>Judges Name</th>
	 <th>Judges Mobile no.</th>
     <th>Judges Address</th>
	 <th>Judges Email</th>
     <th>Judges Date</th>
     <th>Judges Year</th>
     <th>Judges Month</th > 
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
	<td><?php echo $row["jno"] ?></td>
	<td><?php echo $row["jname"] ?></td>
	<td><?php echo $row["mno"] ?></td>
	<td><?php echo $row["addr"] ?></td>
	<td><?php echo $row["eid"] ?></td>
	<td><?php echo $row["date"] ?></td>
	<td><?php echo $row["jyear"] ?></td>
	<td><?php echo $row["jmon"] ?></td>
	<td><a href="judgesdelete.php?delid=<?php echo $row["jno"]?>"><font color="black">Delete</font></a></td>
	<td><a href="judgesedit.php?eid=<?php echo $row["jno"]?>"><font color="black">Edit</font></a></td>
	<td><a href="judgesdetails.html"><font color="black">Back</font></a></td>
	</tr>
	<?php
	}
	?>
	</div>
	</table>
            </body>
            </html>