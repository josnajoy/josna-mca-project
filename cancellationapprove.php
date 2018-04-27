<?php
include ("connection.php");
$id=$_GET['c_id'];
$ss=$_GET['u_id'];
//$se=$_GET['cate_gory'];
$sql="update cancellationrequest set status=1 where cid=$id;";
mysqli_query($con,$sql);
$S="delete from studreg where uid=$ss;";
mysqli_query($con,$s);
$r="delete from staffreg where uid=$ss;";
mysqli_query($con,$r);
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
