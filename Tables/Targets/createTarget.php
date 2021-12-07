<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Target</title>
    <style>
body {
    font-family:"Segoe UI";
    margin:0;
    padding:0;
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
    padding: 2vh 2vw;
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
    background-color: ;
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
input[type=date]::-webkit-calendar-picker-indicator {
    filter: invert(1);
    margin-right:5px;
}
.success {
    background-color: #95e5a7;
    border:2px solid #02e534;
    color:white;
}

</style>  
</head>
<body>
    <div class="smp">
        <h1 style="text-align:center;">Add Targets</h1>
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
        <input class="btn" type="submit" value="Submit">
    </form>
</div>
<?php
    if(array_key_exists("btn", $_POST)){
    func1();
    }
    function func1(){
    $servername = "localhost";
    $username = "root"; // default username for localhost is root
    $password = ""; // default password for localhost is empty
    $dbname = "astro"; // database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $astr_id = $_POST["astr_id"];
    $name = $_POST["name"];

    $add = "INSERT INTO astronaut (astronaut_id,name) VALUES ($astr_id,'$name',)";
    if (!mysqli_query($conn,$add)) {
        die("Error while adding: " . mysqli_error($conn));
    }
    else {
        echo "<h4 class='success'>Successfully added</h4>";
    }
}
    
    ?>
</body>
</html>