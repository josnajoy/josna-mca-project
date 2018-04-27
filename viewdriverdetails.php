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
$s=mysqli_query($con,"select * from driverreg");
echo "<table border ='0.3' cellspacing=3 width=90% height=90% align='center' style=margin:90px;>
<tr><colspan=12><font size=10 color=black >Driver Details</font></th></tr>
<tr><th>Id</th><th>Name</th><th>Age</th><th>Gender</th><th>Address</th><th>Phone No</th><th>
License No</th><th>Join Date</th><th>Experience</th><th>Vehicle Type</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $uid=$row[0];
	
  echo "<tr><td>".$row["uid"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["address"]."</td><td>".$row["phoneno"]."</td><td>".$row["licenseno"].
  "</td><td>".$row["joindate"]."</td><td>".$row["experience"]."</td><td>".$row["vehicletype"]."</td>
  <td>
 <form method='post' action='deletedriver.php'>
 <input type='hidden' name='h1' value='$uid'><input type='submit' name='delete' value='Delete'>
 </form>
 </td>
 </tr>";	 
   }
 echo"</table>"
  ?>
 </body>
 </html>