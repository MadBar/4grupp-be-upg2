<?php
define("PAGE_TITLE", "webbshoppen");
include '../header.php';

// Logga in i databasen
require_once('../connect.php');


// Hämta data från formuläret via metoder post

if(isset($_POST['hundras']))  {
    $hundras = htmlspecialchars($_POST['hundras']);
    $pris = htmlspecialchars($_POST['pris']);
    $status= htmlspecialchars($_POST['status']);
    $beskrivning = $_POST['beskrivning'];
  

    //
    // För arr hantera bildfunktionen
    //
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Kontrollera om bildfilen är en verklig bild eller en falsk bild
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Kontrollera om filen redan finns
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Kontrollera filstorlek
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Tillåt vissa filformat
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Kontrollera om $uploadOk är satt till 0 med ett fel
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // Om allt är ok, försök att ladda upp filen
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            $bild=basename($_FILES["fileToUpload"]["name"]);
            // Förberedd en SQL-sats
            $sql = "INSERT INTO produkt VALUES (null,'$hundras' , '$beskrivning', '$bild', '$pris',$status)";

            // Exekvera (kör) SQL-satsen
            mysqli_query($connection , $sql) or die(mysqli_error($connection));

            header('Location: product-list.php');
            exit();


        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


}
else{
    header('Location: product-list.php');
    exit();
}

?>
<?php include '../footer.php';?>

