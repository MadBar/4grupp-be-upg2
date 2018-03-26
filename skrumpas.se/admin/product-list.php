
<?php
define("PAGE_TITLE", "Skrumpas");
include 'header.php';
?>

<h1>Hundras listan</h1>


<?php
// Logga in i databasen
// OBS! Vi får tillbaka en $connection
require_once('../connect.php');

// Skapa en SQL-sats
$query = "SELECT * FROM produkt"; 
// Exekvera SQL-satsen
$table = mysqli_query($connection , $query) or die(mysqli_error($connection)) ;

    

// Tips: Lägg till denna rad för att lösa problem med svenska tecken.
 //mysqli_set_charset($table, "utf8");


echo "<table class'table'><tr>";
echo "<th>Bilder</th><th>Art.nr</th><th>Ras</th><th>Pris</th><th>Ta bort</th><th>Ändra</th></tr>";
while($row = $table->fetch_assoc()){
    echo "<tr>
    <td><img src='../images/". $row['bild'] ."' class='rounded d-block mx-auto' alt='". $row['hundRas'] ."'></td>
    <td>" . $row['artikelnummer'] . "</td>
    <td>" . $row['hundRas'] . "</td>
    <td>" . $row['pris'] . "</td>
    <td>
    <a href='product-delete.php?varaId=" . $row['artikelnummer'] . "'
    class='btn btn-secondary'>Ta bort</a>
    </td>
    <td>
    <a href='product-edit.php?varaId=" . $row['artikelnummer'] . "'
    class='btn btn-secondary'>Ändra</a>
    </td>
    </tr>";
}
echo "</table>";


echo "<a href='product-new.php' class='btn btn-secondary'>Lägga till ny produkt</a>";

?>



<?php include '../footer.php';?>