<?php

function getAllProjects(int $limit = 999) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 	travel.id,
                        firstname,
                        avatar,
                        picture_princ,
                        title_travel AS title,
                        price,
                        duration,
                        nbr_place,
                        level,
                        description,
                        interested,
                        country.name AS country,
			DATE_FORMAT(MIN(date_depart), '%d %M') AS depart
    FROM travel
    INNER JOIN country ON travel.country_id = country.id 
    INNER JOIN user ON user.id = travel.user_id
    LEFT JOIN depart ON depart.travel_id = travel.id
    GROUP BY travel.id;
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneProject(int $id) {
    /* @var $connection PDO */
    global $connection;

   $query = "SELECT 	travel.id,
                        firstname,
                        avatar,
                        picture_princ,
                        title_travel AS title,
                        price,
                        duration,
                        nbr_place,
                        level,
                        description,
                        interested,
                        country.name AS country,
			DATE_FORMAT(date_depart, '%d %M') AS depart
    FROM travel
    INNER JOIN country ON travel.country_id = country.id 
    INNER JOIN user ON user.id = travel.user_id
    INNER JOIN depart ON depart.travel_id = travel.id ;
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}