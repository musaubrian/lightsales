<?php
require_once "./util.php";

function signInUser(string $email, string $password)
{
    global $pdo;
    $query = "SELECT * FROM User WHERE email= :email";
    $prepdQuery = $pdo->prepare($query);
    $prepdQuery->bindParam(":email", $email, PDO::PARAM_STR);
    $prepdQuery->execute();


    $user = $prepdQuery->fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $user["password"])) {
        return true;
    }
    return false;
}


function registerUser(string $email, string $password)
{
    global $pdo;
    $query = "INSERT INTO User (email, password) VALUES (:email, :password)";
    $prepdQuery = $pdo->prepare($query);
    $prepdQuery->bindParam(":email", $email, PDO::PARAM_STR);
    $prepdQuery->bindParam(":password", $password, PDO::PARAM_STR);
    $prepdQuery->execute();
    if ($prepdQuery->rowCount() === 1) {
        return true;
    }
    return false;
}
