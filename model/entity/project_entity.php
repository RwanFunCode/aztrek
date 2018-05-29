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
			DATE_FORMAT(date_depart, '%d %M') AS depart
    FROM travel
    INNER JOIN country ON travel.country_id = country.id 
    INNER JOIN user ON user.id = travel.user_id
    INNER JOIN depart ON depart.travel_id = travel.id ;
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneProject(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                project.*,
                DATE_FORMAT(project.date_start, '%e %M %Y') AS date_start_format,
                DATEDIFF(project.date_end, project.date_start) AS days,
                category.label AS category
            FROM project
            INNER JOIN category ON category.id = project.category_id
            WHERE project.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}