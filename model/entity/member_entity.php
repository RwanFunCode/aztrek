<?php

function getAllMembers() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                member.*,
                CONCAT(member.firstname, ' ', member.lastname) AS fullname
            FROM member;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}





