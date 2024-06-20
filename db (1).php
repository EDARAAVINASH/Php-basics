<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lbrce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
echo"<h1>Connection established</h1>".$dbname;
?>