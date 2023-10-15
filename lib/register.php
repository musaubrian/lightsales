<?php

require_once "./connection.php";
require_once "./auth.php";
require_once "./util.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pwd = password_hash($password, PASSWORD_BCRYPT);

    $success = registerUser($email, $pwd);
    if ($success) {
        $signedIn = signInUser($email, $password);
        if ($signedIn) {
            session_start();
            $_SESSION["user"] = $email;
            header("Location: /");
            exit();
        } else {
            echo "AUTH ERROR";
        }
    } else {
        header("Location: /auth");
        exit();
    }
} else {
    echo "Method not Allowed";
}
