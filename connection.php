<?php
$servername="localhost";
$password="";
$username="root";
$dbname="sybca";

$con=mysqli_connect($servername,$username,$password,$dbname);
if($con)
{
echo"";
}
else
{
die("enabled to connect because".mysqli_connect_error());
}
?>