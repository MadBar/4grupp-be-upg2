<?php


$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "webbshoppen";

$connection = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$connection){
        echo "<h1>Fel! <br>".mysqli_connect_error()."</h1>";
        exit;
    }

mysqli_set_charset($connection, "utf8");


$query = "SELECT * FROM produkt";

$table = mysqli_query($connection,$query) or die (mysqli_error($connection));


$array = array();

while($row = $table->fetch_assoc()){
    $array[] = $row;
}

$json_string = json_encode($array, JSON_PRETTY_PRINT);

echo $json_string;
?>