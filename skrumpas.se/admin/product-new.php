<?php
define("PAGE_TITLE", "Skrumpas");
include 'header.php';
?>

<h1>Hundras listan</h1>



  <div class="row">
                <div class="col">
                    <form method="post" action="product-insert.php" enctype="multipart/form-data">
                    <h2>Lägg in ny hundtyp:</h2>
                        <div class="form-group">

                            <div class="row">

                                <div class="col-md-4">
                                    <label for="labelhundras">Ange hundras:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelhundras" name="hundras" type="text" required placeholder="Ange hundras">
                                </div>

                                <div class="col-md-4">
                                    <label for="labelpris">Ange hundens pris:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelpris" name="pris" type="text" required placeholder="Ange hundens pris">
                                </div>

                                
                                <div class="col-md-4">
                                    <label for="fileToUpload">Bifoga bild:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control-file" type="file" name="fileToUpload" id="fileToUpload" required placeholder="Bildhantering" >
                                </div>

                                <div class="col-md-4">
                                    <label for="labelStatus">Status</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" id="labelStatus" name="status">
                                        <option value="0">Till försäljning</option>
                                        <option value="1">Utgående hundras</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="labelefterlabelbeskrivningnamn">Beskrivning:</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="labelbeskrivning" name="beskrivning" required placeholder="Beskrivning"></textarea>
                                </div>
                            <div class="col-md-12 submitdiv">
                                <button type="submit" class="btn btn-secondary">Skapa ny!</button>
                            </div>
                            </div>
                        </div>
                    </form>
                    <a href='product-list.php' class='btn btn-secondary'>Gå tillbaka</a>
                </div>
            </div>



<?php include '../footer.php';?>
