<?php
include("db.php");
include("links.html");
$reg=$_POST['reg'];
$sql="delete from stud_info where RegNo='$reg'";
if(mysqli_query($conn,$sql))
{
	echo "<h1>" .$rn. "Deleted successfully</h1>";
}
else
{
	echo "<h1>" .$rn. "Not Deleted</h1>";
}

?>