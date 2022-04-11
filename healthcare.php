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
<th>Total Hospital</th>
<th>Total Oxygen Cylinder</th>
<th>Total Workers</th>
<th>People Quarantined</th>
<th>Total People Vaccinated</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "Saudamini@17", "project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT State,THopital,O2_Cylinder,TWorker, PeopleQuarantined,TVaccinated FROM healthcare ";
$result = $conn->query($sql); if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["State"]. "</td><td>" . $row["THopital"] . "</td><td>"
    . $row["O2_Cylinder"]. "</td><td>".$row["TWorker"] . "</td><td>". $row["PeopleQuarantined"]. "</td><td>".$row["TVaccinated"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
    </body>
    </html>
    