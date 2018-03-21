<?php
include ("connection.php");
$id=$_GET['c_id'];
$sql="delete cancellationrequest set status=0 where cid=$id;";
mysqli_query($con,$sql);
echo "<script>var confirm = confirm(\"cancellationrequest has been rejected!\");
if(confirm)
{
	window.location='viewcancelrequest.php';
}
else
{
	window.location='viewcancelrequest.php';
}
</script>";
?>
