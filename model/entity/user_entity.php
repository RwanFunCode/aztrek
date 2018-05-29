<?php

function getUserByEmailPassword(string $email, string $password) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM user
            WHERE email = :email
            AND password = SHA1(:password);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}   

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


function getOneUser(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM user
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}