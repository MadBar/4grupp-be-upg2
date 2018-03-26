
 <div class="row">
      <div class="col">
                <form action="insert.php" method="post">
                    <h2>Beställningsformulär</h2>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="labelnamn">Ange ditt Namn:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelnamn" type="text" name="name" required placeholder="Ange ditt namn">
                                </div>

                                <div class="col-md-4">
                                    <label for="labelemail">Ange ditt telefonnummer:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labeltele" type="text" name="telefon" required placeholder="Ange ditt telefonnummer">
                                </div>

                                <div class="col-md-4">
                                    <label for="labelemail">Ange din epost-adress:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelemail" type="email" name="mail" required placeholder="Ange din e-postadress">
                                </div>

                                <div class="col-md-4">
                                    <label for="labeladress">Ange Leveransadress:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labeladress" type="text" name="adress" required  placeholder="Ange din Leveransadress">
                                </div>

                            </div>
                            <div class="col-md-12 submitdiv">
                                <button type="submit" class="btn btn-secondary">Beställ!</button>
                            </div>
                        </div>

                            <input type="hidden"  name="varaId" value="<?=$value['artikelnummer']?>"/>
 
            </form>
     </div>
</div>