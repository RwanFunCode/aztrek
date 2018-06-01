<?php

function insertTravel(string $title_travel, int $level, int $duration, string $picture_princ, int $price, int $nbr_place, string $description, int $country_id, int $theme_id, int $user_id ) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO travel (title_travel, level, duration, picture_princ, price, nbr_place, description, country_id, theme_id, user_id )
                VALUES(:title_travel, :level, :duration, :picture_princ, :price, :nbr_place, :description, :country_id, :theme_id, :user_id );";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title_travel", $title_travel);
    $stmt->bindParam(":level", $level);
    $stmt->bindParam(":duration", $duration);
    $stmt->bindParam(":picture_princ", $picture_princ);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":nbr_place", $nbr_place);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":country_id", $country_id);
    $stmt->bindParam(":theme_id", $theme_id);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();

}


function insertDepart( int $date_depart) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO country (date_depart)
                VALUES(:date_depart);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    
    $stmt->execute();

}


function getAllTravel() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT    title_travel,
                        picture_princ,
                        country.name AS country		
            FROM travel
            LEFT JOIN country ON travel.country_id = country.name";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getGuideTravel() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT    firstname,
			avatar
            FROM travel
            INNER JOIN user ON user.id = travel.user_id ;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


