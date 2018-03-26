<?php
// Visa varningar och felmeddelanden
    ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <link href="../styles/style.css" rel="stylesheet" />
  <title><?php echo PAGE_TITLE ?></title>
  <link rel="icon" type="image/gif" href="../images/icon.png">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="logo" class="logo">Skrumpas</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item my">
              <a class="nav-link my" href="product-list.php">Produktslista</a>
            </li>
            <li class="nav-item my">
              <a class="nav-link" href="bestallningslista.php">Bestallningslista</a>
            </li>

          </ul>
        </div>
      </div>
  </nav>
  <!-- container -->
  <div class="container">

    <div class="jumbotron">

   
 