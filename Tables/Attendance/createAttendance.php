<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Attendance</title>
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
    color:white;
    align-items:center;
    margin-top: 50px;
    background-color: rgb(65, 65, 65);
    width: 50%;
    transform: translate(25vw,25vh);
    padding: 4vh 4vw;
    border-radius: 8px;
}
.btn {
    text-align: center;
    display: block;
    width:50%;
    padding: 10px 20px;
    border: solid 2px rgb(0, 204, 255);
    border-radius: 20px;
    margin: 10px 0;
    background-color: rgb(44,44,44);
    transition: 0.2s ease-in-out;
    color: rgb(14, 177, 177);
    transform:translate(50%,50%);
}
.btn:hover{
    color: #ADFF2F;
    border:2px solid #ADFF2F;
}
.inp {
    text-align: center;
    display: block;
    width:100%;
    padding: 10px 0;
    border: solid 2px rgb(0, 204, 255);
    border-radius: 20px;
    margin: 10px 0;
    background-color: rgb(44,44,44);
    transition: 0.13s ease-in-out;
    color: rgb(14, 177, 177);
}
.inp:hover{
    border:solid 2px aquamarine;
    color: rgb(23, 219, 219);
}
input[type="number"] {
  -webkit-appearance: textfield;
     -moz-appearance: textfield;
          appearance: textfield;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none;
}
.success {
    background-color: #95e5a7;
    border:2px solid #02e534;
    color:white;
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
label {
font-size: 20px;
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
    <h1 style="text-align:center;">Add Attendance</h1>
    <form action="" method="POST">
       <label for="mis_name">Mission ID</label>
       <br>
       <input class="inp" type="number" name="mis_id">
        <br>
        <br>
       <label for="astr_id">Astronaut ID</label>
       <br>
       <input class="inp" type="number" name="astr_id">
        <br>
        <br>
       <input class="btn" type="submit" value="Submit" name="btn">
    </form>
</div>
 
    <?php
    include '/Tables/etc/validation.php';

    if(array_key_exists("btn", $_POST)){
    func1();
    }
    function func1(){
    $servername = "localhost";
    $username = "lord"; // default username for localhost is root
    $password = "kira2216"; // default password for localhost is empty
    $dbname = "astro"; // database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $astr_id = test_input($_POST["astr_id"]);
    $mission_id = test_input($_POST["mis_id"]);

    $add = "INSERT INTO atttends (astronaut_id,mission_id) VALUES ($astr_id,$mission_id)";
    if (!mysqli_query($conn,$add)) {
        die("<h2 style='color:white;padding: 10px 0; width:100%;text-align:center;border-radius:20px;background-color:red;margin-top:40px; margin-bottom:20px;'>Error</h2>");
    }
    else {
        echo "<h4 class='success'>Successfully added</h4>";
    }
}
    
    ?>
</body>
</html>