
<?php
define("PAGE_TITLE", "Skrumpas");

include 'header.php';
?>


<h2>Webbshop</h2>

 <div class="row">


<?php
// Logga in i databasen
require_once('connect.php');

// Skapa en SQL-sats
$query = "SELECT * FROM produkt"; 
// Exekvera SQL-satsen
$sql = mysqli_query($connection , $query)  or die(mysqli_error($connection)) ;
   while($value = $sql->fetch_assoc()){

    echo "<div class='col-md-4 div-margin'>";
    echo "<h3>". $value['hundRas'] . "</h3>";

    echo "<img src='images/". $value['bild'] ."' class='rounded d-block mx-auto' alt='". $value['hundRas'] ."'>";
    echo "<P>Pris: ". $value['pris'] ." kr</P>";
    echo "<div class='text-format'>"; 
    echo "<P>Beskrivning: ". $value['beskrivning'] ."</P>";
    echo "</div>";
   echo "<form method='POST' action='bestall.php'><input type='hidden' name='varaId' value='". $value['artikelnummer'] ."'><input type='submit' value='Köp nu'  class='btn btn-secondary'></form>";
    echo "</div>";
}
?>
</div>





<?php include 'footer.php';?>
