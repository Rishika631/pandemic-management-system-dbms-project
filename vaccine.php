<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse; width: 100%;
color: #588c7e;
font-family: monospace; font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e; color: white;
}
Vaccine Information
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Vaccine Name</th>
<th>Vaccine ID</th>
<th>Total no of Vaccines</th>
<th>Manufacturer</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "Saudamini@17", "project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM vaccine";
$result = $conn->query($sql); if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["VName"]. "</td><td>" . $row["VID"] . "</td><td>"
. $row["VTotal"]. "</td><td>".$row["Manufacturer"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
