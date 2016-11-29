<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','myniki123','games');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"games");
$sql="SELECT * FROM snake;
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Score</th>
<th>Highest Score</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['score'] . "</td>";
    echo "<td>" . $row['pinnacle'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>