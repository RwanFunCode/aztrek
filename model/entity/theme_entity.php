<?php

function getAllThemes() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT*
                FROM theme;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchALL();
}
