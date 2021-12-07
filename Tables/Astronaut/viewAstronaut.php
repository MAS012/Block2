<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Astronauts</title>
</head>
<style>
    body {
    margin:0;
    padding:0;
    align-items: center;
    background-color: rgb(37, 37, 37);
    font-family:"Segoe UI";
}
.smp {
margin-top: 50px;
background-color: rgb(65, 65, 65);
width: 50%;
    transform: translate(25vw,25vh);
    padding: 5vh 5vw;
    border:2px solid aqua;
    border-radius: 8px;
    font-size:22px;
}
table {
    width:100%;
    border-collapse: collapse;
    overflow: hidden;
}
th,td {
    text-align: center;
    padding: 10px;
    transition: 0.3s ease-in-out;
    border-bottom: 2px solid black;
}
th {
    background-color: rgb(1, 38, 64);
    color: azure;
}
td {
    background-color: rgb(85, 167, 208);
}
td:nth-child(odd){
    background-color: rgb(70, 157, 201);
}
table:first-child {
    border-top:2px solid black;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
table:last-child {
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}
tr td:hover {
    padding:16px;
    background-image: linear-gradient(rgba(0,0,0,0.2) 0 0);
}
</style>
<body>
    <div class="smp">
        <h1>Astronauts List</h1>
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
</div>
</body>
</html>