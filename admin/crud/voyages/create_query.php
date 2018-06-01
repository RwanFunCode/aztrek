<?php
require_once __DIR__ . '/../../security.php';
require_once '../../../model/database.php';

// Récupérer les données du formulaire

$title_travel = $_POST["title_travel"];
$level = $_POST["level"];
$duration = $_POST["duration"];
$picture_princ = "";
$price = $_POST["price"];
$nbr_place = $_POST["nbr_place"];
$description = $_POST["description"];
$country_id = $_POST["country_id"];
$theme_id = $_POST["theme_id"];


// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture_princ = $_FILES["picture"]["name"];
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../images/photo/" . $picture_princ);
}


// Insertion des données en BDD
insertTravel( $title_travel, $level, $duration, $picture_princ, $price, $nbr_place, $description, $country_id, $theme_id, $utilisateur["id"]);

// Redirection vers la liste
header("Location: index.php");


require_once '../../../model/database.php';

// Récupérer les données du formulaire

$date_depart = $_POST["date_depart"];



// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../images/photo/" . $picture);
}


// Insertion des données en BDD
insertMember($date_depart);

// Redirection vers la liste
header("Location: index.php");