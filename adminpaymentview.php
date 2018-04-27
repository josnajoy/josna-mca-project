

<html>
<style>
body{
	background-image:url("images/bb.jpg");
	background-size:1500px,1500px;
}
</style>
</html>
<?php

include("connection.php");
$s=mysqli_query($con,"select * from payment");
echo "<table border ='0.3' cellspacing=3 width=90% height=90% align='center' style=margin:90px;>
<tr><colspan=12><font size=10 color=black >Paid Fee</font></th></tr>
<tr><th>Payment Id</th><th>Route Id</th><th>User Id</th><th>Amount</th><th>Category</th<th>Curdate</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $rid=$row[0];
	 
  echo "<tr><td align='center'>".$row["pid"]."</td><td align='center'>".$row["rid"]."</td><td align='center'>".$row["uid"]."</td><td align='center'>".$row["amount"]
  ."</td><td align='center'>".$row["category"]."</td><td align='center'>".$row["curdate"]."</td>
  
 
   </tr>";	 
   }
 echo"</table>"
  ?>
  </body>
  </html>