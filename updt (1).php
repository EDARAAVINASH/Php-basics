<?php
include("links.html");
include("db.php");
$rn=$_POST["rtf"];
$un=$_POST["ntf"];
$ug=$_POST["gtf"];
$ud=$_POST["dtf"];
$uc=$_POST["ctf"];
$sql="UPDATE stud_info set Name='$un',gender='$ug',dob='$ud',course='$uc' where
RegNo='$rn'";
if(mysqli_query($conn,$sql))
{
	echo "<h1>" .$rn. "Update success</h1>";
}
else
{
	echo "<h1>" .$rn. "Not Updated success</h1>";
}
?>	