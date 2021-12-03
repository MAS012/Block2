<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Astronaut</title>
    
</head>
<body>
    <form action="" method="POST">
        <label for="astr_id">Astronaut ID</label>
        <br>
        <input type="number" name="astr_id">
        <br>
        <br>
        <label for="name">Name</label>
        <br>
        <input type="text" name="name">
        <br>
        <br>
        <label for="mission_num">Number of Missions</label>
        <br>
        <input type="number" name="mission_num">
        <br>
        <br>
        <input type="submit" name="btn" value="Submit">
    </form>


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
    $mission_num = $_POST["mission_num"];

    $add = "INSERT INTO astronaut (astronaut_id,name,no_missions) VALUES ($astr_id,'$name',$mission_num)";
    if (!mysqli_query($conn,$add)) {
        die("Error while adding: " . mysqli_error($conn));
    }
    else {
        echo "Successfully added";
    }
}
    
    ?>
</body>
</html>