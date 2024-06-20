<?php
if(isset($_COOKIE["user"]))
{
include("db.php");
include("links.html");
$sql="select * from stud_info";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>Students information</h1>
<table border="5">
<tr>
<th>Reg.No</th>
<th>Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Course</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['RegNo'];?></td>
<td><?php echo $row['Name'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['course'];?></td>
</tr>
<?php
}
}
else
{
?>
<script>
alert("please login first");
</script>
<?php
include("login.html");
}
?>
</table>
</center>