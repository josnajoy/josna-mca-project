<?php
include ("connection.php");
$id=$_GET['c_id'];
$sql="update cancellationrequest set status=1 where cid=$id;";
mysqli_query($con,$sql);
echo "<script>var confirm = confirm(\"cancellationrequest has been approved!\");
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
