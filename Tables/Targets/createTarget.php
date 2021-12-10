<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Target</title>
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
    color:white;
    align-items:center;
    margin-top: 50px;
    background-color: rgb(65, 65, 65);
    width: 50%;
    transform: translate(25vw,25vh);
    padding: 4vh 4vw;
    border-radius: 8px;
}
/* Designing submit button */
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
/* Submit button while hovering */
.btn:hover{
    
    color: #ADFF2F;
    border:2px solid #ADFF2F;
}
/* Designing form inputs */
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
/* Input button while hovering */
.inp:hover{
    border:solid 2px aquamarine;
    color: rgb(23, 219, 219);
}
/* Removing spin button inside of input */
input[type="number"] {
  -webkit-appearance: textfield;
     -moz-appearance: textfield;
          appearance: textfield;
}
/* Removing spin button inside of input */
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none;

}
/* Changing date icon style*/
input[type=date]::-webkit-calendar-picker-indicator {
    filter: invert(1);
    margin-right:5px;
}
/* Designing text that comes up when all correct*/
.success {
            background-color: #95e5a7;
            border: 2px solid #02e534;
            color: white;
            margin-top: 50px;
            padding: 10px 0;
            border-radius: 20px;
            width: 100%;
            text-align: center;
        }
         /* Designing Logo in navbar*/
.navbar-brand {
            animation-name: nav-logo;
            animation-duration: 4s;
            animation-iteration-count: infinite;
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
/* Styling form labels*/
label {
font-size: 20px;
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
    <!-- Form Box -->
    <div class="smp">
          <!-- Box Heading -->
        <h1 style="text-align:center;">Add Targets</h1>
        <!-- Form -->
    <form action="" method="POST">
        <label for="name">Name</label>
        <br>
        <input class="inp" type="text" name="name">
        <br>
        <br>
        <label for="mission1">First Mission Date</label>
        <br>
        <input class="inp" type="date" name="mission1">
        <br>
        <br>
        <label for="type">Type</label>
        <br>
        <input class="inp" type="text" name="type">
        <br>
        <br>
        <label for="mission_num">Number of Missions</label>
        <br>
        <input class="inp" type="number" name="mission_num">
        <br>
        <br>
        <input class="btn" type="submit" value="Submit" name="btn">
    </form>
<!-- PHP Code -->
<?php
//Form Validation function
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}// Calling function on click
    if(array_key_exists("btn", $_POST)){
    func1();
    }
    //SQL Connection and adding function
    function func1(){
    //Defining database and user
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
    //Getting inputs from form
    $name = test_input($_POST["name"]);
    $first_mission = test_input($_POST["mission1"]);
    $type = test_input($_POST["type"]);
    $no_missions = test_input($_POST["mission_num"]);
    //Inserting into tables in database
    $add = "INSERT INTO targets (name,first_mission,type,no_missions) VALUES ('$name',$first_mission,'$type',$no_missions)";
    //Checking if insertion is correct, and outputing relevant message
    if (!mysqli_query($conn,$add)) {
        die("<h2 style='color:white;padding: 10px 0; width:100%;text-align:center;border-radius:20px;background-color:red;margin-top:40px; margin-bottom:20px;'>Error</h2>");
    }
    else {
        echo "<h4 class='success'>Successfully added</h4>";
    }
}
     
    ?>
    <!-- End of PHP -->
    </div>
</body>
</html>