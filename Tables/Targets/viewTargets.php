<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Targets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    /* adding fonts */
   @font-face {
            font-family: "Pixeboy";
            src: url(/fonts/Pixeboy.ttf);
        }
        /* overall body design */
        body {
            font-family: "Pixeboy";
            margin: 0;
            padding: 0;
            align-items: center;
            background-color: rgb(37, 37, 37);
        }
        /* Designing box that includes form */
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
/* Designing table */
table {
    width:100%;
    border-collapse: collapse;
    overflow: hidden;
}
/* Designing table headers and datas*/
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
/* Designing odd datas */
td:nth-child(odd){
    background-color: rgb(70, 157, 201);
}
/* Designing first and last lines */
table:first-child {
    border-top:2px solid black;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
table:last-child {
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}
/* Rows on hover */
tr td:hover {
    padding:16px;
    background-image: linear-gradient(rgba(0,0,0,0.2) 0 0);
}
/* Designing Logo in navbar*/
.navbar-brand {
            animation-name: nav-logo;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            text-decoration: underline;
            font-size: 30px;
        }
        /* Color changing animation*/
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
    <!-- Website Body -->
     <!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <!-- Logo link to home page -->
            <a class="navbar-brand" href="/index.html">Astro</a>
            <!-- Responsive Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon">Astro</span>
            </button>
            <!-- Resizing navbar in different device width -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!-- Web Page Links List -->    
            <ul class="navbar-nav">
                    <li class="nav-item dropdown px-5">
                        <!-- Web Page Link -->
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Astronauts</a>
                    <!-- Dropdown Menu -->    
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
    <!-- End of Navbar -->
    <!-- Table Box -->
<div class="smp">
        <h1>Targets List</h1>
  <?php
//Starting PHP
//Connecting to database
$conn = mysqli_connect("localhost","lord","kira2216");
mysqli_select_db($conn,"astro");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
//Setting query
$sql1 = "SELECT * from targets";
$result = mysqli_query($conn,$sql1);
//Putting out result
echo "<table>";
echo "<tr><th>Name</th><th>First Mission</th><th>Type</th><th>Number of Missions</th></tr>";
while($row = mysqli_fetch_array($result)){
    echo"<tr><td>". $row["name"]. "</td><td>". $row["first_mission"]."</td><td>". $row["type"]."</td><td>". $row["no_missions"]. "</td></tr>";
}
echo "</table>"
?>
<!-- The end -->
</div>
</body>
</html>