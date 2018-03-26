<!DOCTYPE html>
<?php
    define("SITE_TITLE","Lista över hundraser");
    include('header.php');
?>
    <div class="container">
    <a href='index.php'>
    <h1>Hundkenneln</h1>
    </a>
    <h2>Lista över hundraser</h2>    
    <?php
    $json = file_get_contents("http://localhost/grupp1-inl%C3%A4mningsuppgift-2/skrumpas.se/api/products/index.php");
    
    if(empty($json)){
        echo "<h2>Problem med att hämta data!</h2>";
        exit;
    }
    
    $array = json_decode($json,true);
    
    if(!is_array($array)){
        echo "<h2>Problem med att skapa en array!</h2>";
    }
    
    echo "<table class='table'>";
    echo "<tr><th>Artikelnummer</th><th>Hundras</th><th>Pris</th></tr>";
    foreach($array as $key => $value){
        echo "<tr>";
        echo "<td>".$value['artikelnummer']."</td>";
        echo "<td>".$value['hundRas']."</td>";
        echo "<td>".($value['pris']*1.25)." kr</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
<?php
    include('footer.php');
?>