<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$name = $_POST["name"];
$code= $_POST["code"];


// Insertion des données en BDD
insertPays($name, $code);

// Redirection vers la liste
header("Location: index.php");