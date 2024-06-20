<?php
include("db.php");
include("links.html");
$reg=$_POST['reg'];
$sql="select * from stud_info where RegNo='$reg'";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>Students information</h1>
<form action="updt.php" name="updt" method="POST">
<table border="5">
<tr>
<th>Reg.No</th>
<th>Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Course</th>
<th>Operation</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><input type="text" value=<?php echo $row['RegNo'];?> name="rtf" readonly/></td>
<td><input type="text" value=<?php echo $row['Name'];?> name="ntf" /></td>
<td><input type="text" value=<?php echo $row['gender'];?> name="gtf" /></td>
<td><input type="text" value=<?php echo $row['dob'];?> name="dtf" /></td>
<td><input type="text" value=<?php echo $row['course'];?> name="ctf" /></td>
<td><input type="submit" value="update" name="update" /></td>
</tr>
<?php
}
?>
</table>
</center>