<?php
define("PAGE_TITLE", "Skrumpas");

include 'header.php';

// Logga in i databasen
require_once('connect.php');


// Hämta data från formuläret via metoder post


if(isset($_POST['name']))  {
    $name = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['mail']);
    $telefon = htmlspecialchars($_POST['telefon']);
    $adress = htmlspecialchars($_POST['adress']);
    $varaId = $_POST['varaId'];

// Förberedd en SQL-sats
$sql = "INSERT INTO bestallningar VALUES (null,'$name' , '$mail', '$telefon', '$adress',CURRENT_TIMESTAMP, '$varaId')";

// Exekvera (kör) SQL-satsen
mysqli_query($connection , $sql) or die(mysqli_error($connection));

echo "<img src='images/doggy.gif' class='rounded d-block mx-auto' alt='Doggy'><br>";
echo "<h2>Din beställning är på väg.</h2>";
echo "<h2>Kommer inom ca tre arbetsdagar.</h2>";
echo "<br><a href='index.php' class='btn btn-secondary'>Gå tillbaka till startsidan</a>";
}
else{
    header('Location: index.php');
    exit();
}

?>


<?php include 'footer.php';?>