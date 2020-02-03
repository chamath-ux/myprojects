<?php
include("connection.php");

$result=mysqli_query("select * from data",$conn);

echo "<table border='1' >
<tr>

<td align=center><b>Name</b></td>

<td align=center><b>lname</b></td></td>";


while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    
    echo "</tr>";
}
echo "</table>";
?>