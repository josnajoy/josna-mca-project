<?php

include("connection.php");
$s=mysqli_query($con,"select * from cancellationrequest where status=0;");
echo "<table border ='0.2' cellspacing=1 width=95% height=90% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><colspan=12><font size=10 color=black >Cancellation Request Details</font></th></tr>
<tr><th>SI.No</th><th>Id</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Category</th><th>Branch</th><th>Address</th><th>Phone No</th><th>Route</th><th>Stoppage</th><th>Email</th><th>Curdate</th></tr>";


 while($row=mysqli_fetch_array($s))
  {
	  $cid=$row[0];
	
  echo "<tr><td align='center'>".$row["cid"]."</td><td align='center'>".$row["id"]."</td><td align='center'>".$row["fname"]."</td><td align='center'>".$row["lname"]."</td><td align='center'>".$row["gender"]."</td><td align='center'>".$row["category"]."</td><td align='center'>".$row["branch"]."</td><td align='center'>".$row["address"]."</td><td align='center'>".$row["phoneno"]."</td><td align='center'>".$row["route"].
  "</td><td align='center'>".$row["stoppage"]."</td><td align='center'>".$row["email"]."</td><td align='center'>".$row["curdate"]."</td>
  <td>
 <form method='post' action='cancellationapprove.php'>
 <td>
<a href='cancellationapprove.php?c_id=".$row["cid"]."'>Approve</a></td>
<td>
<a href='cancellationreject.php?c_id=".$row["cid"]."'>Reject</a></td>
 </form>
 
 </tr>";	 
   }
 echo"</table>"
  ?>