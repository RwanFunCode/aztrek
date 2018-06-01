<?php

function insertUser(string $firstname, string $lastname, string $email, string $password) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO user (firstname, lastname, email, password, date_inscription, admin)
                VALUES(:firstname, :lastname, :email, SHA1(:password), NOW(), 0);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
}

function getAllPays() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
                FROM country;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getTravelPays() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT travel.*
                FROM country
                INNER JOIN travel ON country.id = travel.country_id
                WHERE country_id = 1;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchALL();
}

function insertPays(string $name, string $code) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO country (name, code)
                VALUES(:name, :code);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":code", $code);
    $stmt->execute();

}