<?php require_once __DIR__ . '/../lib/functions.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Accueil | AZTREK</title>
  <link rel="shortcut icon" href="./favicon.ico">
  <!-- <link rel="icon" href="favicon-1.ico" /> -->
  <!-- <link href="http://fr.allfont.net/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" /> -->
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
</head>


<body>
  <header class="header_absolute">
    <div class="header_top container" >

      <!-- logo -->
      <div class="logo">
        <a href="#"><img src="./images/logo_aztrek-01.png" alt="logo representant un sac de voyage"></a>
      </div>

      <!-- BaseLine -->
      <h2>GO ON TOGETHER</h2>

      <!-- cette navigation n'apparait que en desktop -->



    <?php getMenuTop() ?>

    </div>


    <!-- Barre de recherche -->
    <form class="formulaire" action="index.html" method="post">
      <input class="champ" type="text" name="" value="Ou voulez vous partir">
      <input class="search_btn" type="button" name="" value="">
    </form>

   
    
    <?php getMenu() ?>
    
  </header>