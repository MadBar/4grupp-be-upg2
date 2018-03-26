<?php
define("PAGE_TITLE", "Skrumpas");
include 'header.php';
?>

<h1>Ändra hundras:</h1>


<?php
// Logga in i databasen
// OBS! Vi får tillbaka en $connection
require_once('../connect.php');

// Skapa en SQL-sats
if(isset($_GET['varaId'])){ // Hämta data via URLen (med GET)
   $varaId = $_GET['varaId'];
};

// Skapa en SQL-sats
$query = "SELECT * FROM produkt WHERE artikelnummer='$varaId' ";

// Exekvera SQL-satsen
$table = mysqli_query($connection , $query) or die(mysqli_error($connection)) ;




?>
<div class="row">
                <div class="col">
                    <form method="post" action="product-change.php" enctype="multipart/form-data">
                    <?php while($row = $table->fetch_assoc()) {?>
                        <div class="form-group">

                            <div class="row">

                                <div class="col-md-4">
                                    <label for="labelhundras">Ange hundens hundras:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelhundras" name="hundras" type="text" value="<?php echo $row['hundRas']; ?>" required placeholder="Ange hundens hundras">
                                </div>

                                <div class="col-md-4">
                                    <label for="labelpris">Ange hundens pris:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelpris" name="pris" type="text" value="<?php echo $row['pris']; ?>" required placeholder="Ange hundens pris">
                                </div>

                                
                                <div class="col-md-4">
                                    <label for="fileToUpload">Bifoga bild:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control-file" type="file" name="fileToUpload" id="fileToUpload"> 
                                    <img src="../images/<?php echo $row['bild']; ?>" class='rounded d-block mx-auto' alt="<?php echo $row['hundRas']; ?>">
                                </div>

                                <div class="col-md-4">
                                    <label for="labelStatus">Status</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" id="labelStatus" name="status">
                                        <option <?php if ($row['status'] == 0 ) echo 'selected' ; ?>  value="0">Till försäljning</option>
                                        <option <?php if ($row['status'] == 1 ) echo 'selected' ; ?> value="1">Utgående hundras</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="labelefterlabelbeskrivningnamn">Beskrivning:</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="labelbeskrivning" name="beskrivning"  required placeholder="Beskrivning"><?php echo $row['beskrivning']; ?></textarea>
                                </div>

                                <input  name="varaId" type="hidden" value="<?php echo $varaId ?>">

                            <div class="col-md-12 submitdiv">
                                <button type="submit" class="btn btn-secondary">Ändra</button>
                            </div>
                            </div>
                        </div>
                    </form>
                    <a href='product-list.php' class='btn btn-secondary'>Gå tillbaka</a>
                </div>
            </div>
                    <?php } ?>


<?php include '../footer.php';?>