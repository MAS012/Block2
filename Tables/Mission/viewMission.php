<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Missions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
 @font-face {
            font-family: "Pixeboy";
            src: url(/fonts/Pixeboy.ttf);
        }
        body {
            font-family: "Pixeboy";
            margin: 0;
            padding: 0;
            align-items: center;
            background-color: rgb(37, 37, 37);
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
.navbar-brand {
            animation-name: nav-logo;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            text-decoration: underline;
            font-size: 30px;
        }
        @keyframes nav-logo {
  0%   {color:#732CDE;}
  20%  {color:#2F2FDE;}
  35%  {color:#2F7BDE;}
  50%  {color:#28DED8;}
  65% {color:#2F7BDE;}
  85% {color:#2F2FDE;}
  100% {color:#732CDE;}
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.html">Astro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon">Astro</span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Astronauts</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Tables/Astronaut/createAstronaut.php">Add</a></li>
                            <li><a class="dropdown-item" href="/Tables/Astronaut/viewAstronaut.php">View</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Missions</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Tables/Mission/createMission.php">Add</a></li>
                            <li><a class="dropdown-item" href="/Tables/Mission/viewMission.php">View</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Attendance</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Tables/Attendance/createAttendance.php">Add</a></li>
                            <li><a class="dropdown-item" href="/Tables/Attendance/viewAttendance.php">View</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-5">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Targets</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Tables/Targets/createTarget.php">Add</a></li>
                            <li><a class="dropdown-item" href="/Tables/Targets/viewTargets.php">View</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="smp">
        <h1>Missions List</h1>
  <?php

$conn = mysqli_connect("localhost","lord","kira2216");
mysqli_select_db($conn,"astro");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

$sql1 = "SELECT * from mission";
$result = mysqli_query($conn,$sql1);

echo "<table>";
echo "<tr><th>Mission ID</th><th>Destination</th><th>Target ID</th><th>Launch Date</th><th>Type</th><th>Crew Size</th></tr>";
while($row = mysqli_fetch_array($result)){
    echo"<tr><td>". $row["mission_id"]. "</td><td>". $row["destination"]."</td><td>". $row["target_id"]. "</td><td>". $row["launch_date"]. "</td><td>". $row["type"]. "</td><td>". $row["crew_size"]. "</td></tr>";
}
 
echo "</table>"
?>
</div>


</body>
</html>