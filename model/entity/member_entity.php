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

function getAllMembersByProject(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                member.*,
                CONCAT(member.firstname, ' ', member.lastname) AS fullname
            FROM member
            INNER JOIN project_has_member ON project_has_member.member_id = member.id
            WHERE project_has_member.project_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertUser(string $email, string $password ,string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO member (email, password, picture)
            VALUES(:email, :password, :picture);";

  $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
    
    $user_id = $connection->lastInsertId();
    insertUserRole($user_id, 1);
}

function insertUserRole(int $user_id, int $role_id) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO member (label)
            VALUES(:label);";

  $stmt = $connection->prepare($query);
    $stmt->bindParam(":label", $label);
    $stmt->execute();
}

function updateMember(int $id, string $firstname, string $lastname, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE member
                SET firstname = :firstname,
                lastname = :lastname,
                picture = :picture
            WHERE id = :id;";

  $stmt = $connection->prepare($query);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}



