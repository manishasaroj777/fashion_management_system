<?php 
include("connection.php");
if(isset($_REQUEST["delid"]))
{
 $id=$_REQUEST["delid"];
 mysqli_query($con,"delete from registration where rno='$id'");
}
	$query=mysqli_query($con,"select * from registration ");
	$rowcount=mysqli_num_rows($query);
?>
<html>
<head>
<link rel="stylesheet" href="css/tablecss.css">
</head>
<body>
               <div class="box">	
	<table border="1" align="center">
	<tr>
	 <th>Registration Id</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Email Id</th>
       <th>Mobile no.</th>
     <th>Password</th>   
     <th>Re-Enter Password</th>
      <th>Date</th>
     <th>Gender</th>
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
	<td><?php echo $row["rno"] ?></td>
	<td><?php echo $row["fname"] ?></td>
	<td><?php echo $row["lname"] ?></td>
	<td><?php echo $row["reid"] ?></td>
              <td><?php echo $row["rmno"] ?></td>
	<td><?php echo $row["psw"] ?></td>
	<td><?php echo $row["repsw"] ?></td>
              <td><?php echo $row["date"] ?></td>
	<td><?php echo $row["gender"] ?></td>
	<td><a href="registdelete.php?delid=<?php echo $row["rno"]?>"><font color="black">Delete</font></a></td>
	<td><a href="registedit.php?eid=<?php echo $row["rno"]?>"><font color="black">Edit<font></a></td>
	<td><a href="registrationadmin.html"><font color="black">Back</font></a></td>
	</tr>
	<?php
	}
	?>
	</div>
	</table>
            </body>
            </html>