<?php

// Logga in i databasen
require_once('../connect.php');



// Hämta en nyckel från select.php
if(isset($_GET['varaId']))  {
    $varaId = $_GET['varaId'];

    // Skapa en SQL-sats
    $query = "DELETE FROM produkt WHERE artikelnummer='$varaId'";

    // Kör SQL-satsen
    mysqli_query($connection , $query) or die(mysqli_error($connection));
}

// Gå tillbaka till startsidan
header('Location: product-list.php');
exit();
    
?>