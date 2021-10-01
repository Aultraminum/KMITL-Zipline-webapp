<?php
define('servername', 'mysql.hostinger.com');
define('username', 'u742683457_g14');
define('password', 's1g1s1g1');
define('dbname', 'u742683457_g14');
$conn = mysqli_connect(servername, username, password,dbname);
$strSQL = "SELECT * FROM Mega";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Path, Walk, Taxi, Want, Price, Time FROM Mega";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Path</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Path'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>