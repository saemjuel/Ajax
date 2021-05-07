<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 80%;
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

$con = mysqli_connect ('localhost','samuel','','dogs');
if (!$con){
	echo "sorry";
}  else {
	echo " ";
}

//$con->close();

mysqli_select_db($con,"dogs");
$sql="SELECT * FROM dogs";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Dog Breed</th>
<th>Dog Name</th>
<th>Dog Id</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Dog Breed'] . "</td>";
  echo "<td>" . $row['Dog Name'] . "</td>";
  echo "<td>" . $row['Dog Id'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>