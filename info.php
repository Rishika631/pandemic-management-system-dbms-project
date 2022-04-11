<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style> table {
border-collapse: collapse; width: 100%;
color: #588c7e;
font-family: monospace; font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e; color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>State</th>
<th>Total Cases</th>
<th>Recovered</th>
<th>Deaths</th>
<th>Tests</th>
<th>Total Health Workers</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "Saudamini@17", "project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT State,T_Cases,Recovered,Deaths,Tests,T_Health_Workers FROM Covid_Death_Cases ";
$result = $conn->query($sql); if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["State"]. "</td><td>" . $row["T_Cases"] . "</td><td>" .
$row["Recovered"]. "</td><td>"
. $row["Deaths"]. "</td><td>".$row["Tests"] . "</td><td>". $row["T_Health_Workers"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
