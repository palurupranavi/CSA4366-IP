<?php 
include 'db.php';
?>
<table border="1px" cellpadding="10px" cellspacing="10px">
<tr>
<th>firstname</th>
<th>lastname</th>
<th>gender</th>
<th>number</th>
<th>email</th>
<th colspan="2">actions</th>
</tr>
<?php
$query="SELECT * FROM register";
$data=mysqli_query($con,$query);
$result=mysqli_num_rows($data);
if($result)
{
while($row=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['number'];?></td>
<td><?php echo $row['email'];?></td>
<td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
<td><a onclick="return confirm('are you sure')" a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<td colspan="5">no records</td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
