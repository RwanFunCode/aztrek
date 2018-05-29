<?php
session_start();

/**
 * Debugger une variable
 * @param type $var La variable à afficher
 * @param bool $die Arrêter l'execition
 */

function debug($var, bool $die= true){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die){
        die;
    }
}

function getCurrentUser() {
    if (isset($_SESSION["id"])) {
        return getOneUser($_SESSION["id"]);
    }
    return null;
}


function getHeader(string $title){
    require_once 'layout/header.php';
}

function getFooter(){
    require_once 'layout/footer.php'; 
}

function getMenuTop(){
    require_once 'layout/menu.php'; 
}

function getMenu(){
    require_once 'layout/menu_mobil.php'; 
}

function getCapitalGain(){
    require_once 'layout/capital_gain.php'; 
}

function getTrust(){
    require_once 'layout/trust.php'; 
}

