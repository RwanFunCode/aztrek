<?php

require_once '../../model/database.php';

// Récupérer les données du formulaire
//récuperation des name/imput
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$picture = "";
$email = $_POST["email"];
$sexe = $_POST["sexe"];
$avatar = $_POST["avatar"];
