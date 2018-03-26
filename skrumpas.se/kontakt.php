
<?php
define("PAGE_TITLE", "Skrumpas");

include 'header.php';
?>

<section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Kontakta Oss</h2>
          <h3 id="contact-h3" class="section-subheading text-muted">Just halla and were call ya'!</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" action="kontakt-bekraftelse.php">
          <!-- <form id="contactForm" name="sentMessage" novalidate> -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Ditt Namn *" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Din Emejl *" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Ditt Telefonnummer *" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Ditt Meddelande*" required data-validation-required-message="Fyll i ett meddelande"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-altered btn-xl text-uppercase" type="submit">Skicka</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>




<div>


</div>

<?php include 'footer.php';?>
