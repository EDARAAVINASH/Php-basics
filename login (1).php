<?php
include("links.html");
include("db.php");
$count=0;
$un=$_POST["utf"];
$pw=$_POST["ptf"];         
$sql="select * from stud_info";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
if($un==$row['Name']&&$pw==$row["password"])
{
$count++;
break;
}
}
if($count!=0)
{
setcookie("user",$un,time()+3600,"/","",0);
echo $un."Successfully login";
}
else
{
?>
<script>
alert("Invalid username & password");
</script>
<?php
include("login.html");
}
?>

