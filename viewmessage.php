<html>
<style>
body{
	background-image:url("images/b1.png");
	background-size:1500px,1500px;
}
</style>
</html>


<?php

include("connection.php");
$s=mysqli_query($con,"select * from message");
echo "<table border ='0.2' cellspacing=2 width=100% height=100% align='center' style=margin:100px; >
<tr><colspan=10><font size=10 color=black >Message Details</font></th></tr>
<tr><th>SI.No</th><th>Message</th><th>Id</th><th align='center'>Name</th><th>Gender</th><th>Category</th><th>Branch</th>
<th>Route</th><th>Stoppage</th><th>Curdate</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	 
  echo "<tr><td align='center'>".$row["uid"]."</td>
  <td align='center'>".$row["message"]."</td>
  <td align='center'>".$row["id"]."</td>
  <td align='center'>".$row["name"]."</td>
  <td align='center'>".$row["gender"]."</td>
  <td align='center'>".$row["category"]."</td>
  <td align='center'>".$row["branch"]."</td>
  <td align='center'>".$row["route"]."</td>
  <td align='center'>".$row["stoppage"]."</td>
  <td align='center'>".$row["curdate"]."</td>
  
   </tr>";	 
   }
 echo"</table>"
  ?>
 