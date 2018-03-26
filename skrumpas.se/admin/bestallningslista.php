<?php 
//------------------------
// HEADER
//------------------------
define("PAGE_TITLE", "Skrumpas");
include 'header.php';

//------------------------
// DATABASKOPPLING
//------------------------
 require_once('../connect.php'); 

//------------------------
// QUERY
//------------------------
$query = "SELECT * FROM bestallningar, produkt where bestallningar.artikelnummer = produkt.artikelnummer";

//------------------------
// RITA UT TABELL
//------------------------
$tabell = mysqli_query($connection, $query) 
    or die(mysqli_error($connection));

echo "<p><table class='table'><tr>";
echo "<th>Ordernummer</th><th>Datum</th><th>Produktnummer</th><th>Produkt</th><th>Pris</th><th>Kundnamn</th><th>E-post</th><th>Mobil</th><th>Adress</th></tr>";
while($row = $tabell->fetch_assoc()){
    echo "<tr><td>" . $row['ordernummer'] . "</td>";
    echo "<td>" . $row['datum'] . "</td>";
    echo "<td>" . $row['artikelnummer'] . "</td>";
    echo "<td>" . $row['hundRas'] . "</td>"; //$row['hundRas']
    echo "<td>" . $row['pris'] . "</td>";
    echo "<td>" . $row['kundNamn'] . "</td>";
    echo "<td>" . $row['epost'] . "</td>";
    echo "<td>" . $row['mobil'] . "</td>";
    echo "<td>" . $row['adress'] . "</td></tr>";
}
echo "</table></p>";

?>

<?php include '../footer.php';?>