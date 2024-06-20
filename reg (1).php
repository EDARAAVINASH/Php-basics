<?php
include("db.php");
include("links.html");
$regno=$_POST["reg"];
$name=$_POST["name"];
$pass=$_POST["pwd"];
$gen=$_POST["gender"];
$date=$_POST["dob"];
$course=$_POST["course"];
echo "<h1>Student details</h1>";
echo "</br>Student RegNo : ".$regno;
echo "</br>Student Name : ".$name;
echo "</br>Password : ".$pass;
echo "</br>Gender : ".$gen;
echo "</br>Date: ".$date;
echo "</br>Student Course : ".$course;
$sql="INSERT INTO stud_info values('$regno','$name','$pass','$gen','$date','$course')";
if(mysqli_query($conn,$sql))
{
	echo "<h1> One record inserted</h1>";
}
?>