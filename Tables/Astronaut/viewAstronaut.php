<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Astronauts</title>
</head>
<body>
  <?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"astro");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

$sql1 = "SELECT * from astronaut";
$result = mysqli_query($conn,$sql1);

echo "<table>";

while($row = mysqli_fetch_array($result)){
    echo"<tr><td>". $row["astronaut_id"]. "</td><td>". $row["name"]."</td><td>". $row["no_missions"]. "</td></tr>";
}

echo "</table>"



?>



</body>
</html>