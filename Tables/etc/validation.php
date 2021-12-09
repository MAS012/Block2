<?php
include '../Astronaut/createAstronaut.php';
include '../Attendance/createAttendance.php';
include '../Mission/createMission.php';
include '../Targets/createTarget.php';
// define variables and set to empty values
$name = $mission_num = $target_id = $dest = $type = $size = $date = $first_mission = $no_missions = "";
$char = [$name , $dest , $type, $date , $first_mission] ;
$num = [$mission_num , $target_id , $size , $no_missions];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
foreach($char as $vars) {
     
        if (empty($_POST["name,dest,type,date,mission1"])) {
           $Err = "*";
        }else {
           $char = test_input($_POST["name,dest,type,date,mission1"]);
        }
}

foreach($num as $vars) {
     
    if (empty($_POST["name,dest,type,date,mission1"])) {
       $Err = "*";
    }else {
       $num = test_input($_POST["name,dest,type,date,mission1"]);
    }
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
}