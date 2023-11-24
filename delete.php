<?php
include 'db.php';
$id=$_GET['id'];
$query="DELETE FROM register WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
?>
<script type="text/javascript">
alert("deleted");
window.open("http://localhost/practice/detail.php","_self");
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("try again");
</script>
<?php
}
?>
