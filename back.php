<?php
DEFINE("DB_USER", "root");
DEFINE("DB_PASSWORD","");
DEFINE("DB_HOST","localhost");

$wiring = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

if (!$wiring) {
    echo "SIIKE, you can't even code: ". mysqli_error($wiring);
}
else {
    echo "Wiring done!";
}
$name = $_POST["fname"];
$surname = $_POST["sname"];
$number = $_POST["num"];
DEFINE("DB_NAME","astro");
$check1 = mysqli_select_db($wiring,DB_NAME);
if (!$check1) {
    $sql1 = "CREATE DATABASE astro;";
    if (mysqli_query($wiring, $sql1)) {
        echo "Database created successfully";
      } else {
        echo "Error creating database: " . mysqli_error($wiring);
      }
    }
$sql2 = "CREATE TABLE A1(fname TEXT, sname TEXT, num INT);";
if (mysqli_query($wiring, $sql2)) {
    echo "Table created successfully"."<br>";
  } else {
    echo "Error creating table: " . mysqli_error($wiring);
  }

$sql3 = "INSERT INTO A1 (fname, sname, num) VALUES ('$name','$surname',$number);";

if (!mysqli_query($wiring,$sql3)) {
 die("SIIKE, you can't even code: ". mysqli_error($wiring));
}
 else {
     echo "Done!";
}


?>