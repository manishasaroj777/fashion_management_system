<?php 
include("connection.php");
if(isset($_REQUEST["delid"]))
{
 $id=$_REQUEST["delid"];
 mysqli_query($con,"delete from models where mno='$id'");
}
	$query=mysqli_query($con,"select * from models ");
	$rowcount=mysqli_num_rows($query);
?>	

<html>
<head>
<link rel="stylesheet" href="css/tablecss.css">
</head>
<body>
               <div class="box">
	<table border="1">
	<tr>
	 <th>Model Id</th>
     <th>Model  Name</th>
        <th>Model  Email Id</th>
       <th>Model  Mobile no.</th>
     <th>Model Address</th>
      <th>Model Height</th> 
      <th>Model Age</th>
	  <th>Model Experience</th>
	 <th>Model Date</th>
	 <th>Model Year</th>
	 <th>Model Month</th>
	 <th>Model Gender</th>
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
	<td><?php echo $row["mno"] ?></td>
	<td><?php echo $row["mname"] ?></td>
	
	<td><?php echo $row["meid"] ?></td>
              <td><?php echo $row["mmno"] ?></td>
	<td><?php echo $row["maddr"] ?></td>
	<td><?php echo $row["height"] ?></td>
	<td><?php echo $row["age"] ?></td>
	<td><?php echo $row["exp"] ?></td>
	<td><?php echo $row["mdate"] ?></td>
	<td><?php echo $row["myear"] ?></td>
	<td><?php echo $row["mmon"] ?></td>
	<td><?php echo $row["gender"] ?></td>
	<td><a href="modelsdelete.php?delid=<?php echo $row["mno"]?>"><font color="black">Delete</font></a></td>
	<td><a href="modelsedit.php?eid=<?php echo $row["mno"]?>"><font color="black">Edit</font></a></td>
	<td><a href="modelsdetails.html"><font color="black">Back</font></a></td>
	</tr>
	<?php
	}
	?>
             </div>
	</table>
            </body>
            </html>
	
	