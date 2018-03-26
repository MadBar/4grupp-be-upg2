
<?php
define("PAGE_TITLE", "Beställ");
include 'header.php';


if(isset($_POST['varaId']) ) {
    // Hämta data från index sidan via metoden post
    $varaId = htmlspecialchars($_POST['varaId']);

    // Logga in i databasen
    require_once('connect.php'); 

    // Skapa en SQL-sats
    $query = "SELECT * FROM produkt WHERE artikelnummer='$varaId' ";
   

    // Kör SQL-satsen
    $sql = mysqli_query($connection , $query)  or die(mysqli_error($connection)) ;

    //Testa arrayen
    //echo "<hr><pre>";
    //print_r($sql );
    //echo "</pre><hr>";


    while($value = $sql->fetch_assoc()){

    echo "<h1>" . $value['hundRas'] . "</h1>";
    echo "<p>Pris:" . $value['pris'] . " kr</p>";
    echo "<img src='images/". $value['bild'] . "' class='rounded d-block mx-auto' alt='". $value['hundRas'] . "'>";
    echo "<p>Beskrivning:" . $value['beskrivning'] . "</p>";
    //Anroppa formuläret
    include 'form.php';
    }
}

else{
    header('Location: index.php');
    exit();
}
?>


<?php include 'footer.php';?>
