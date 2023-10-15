<?php
require_once "./connection.php";
require_once "./auth.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $success = signInUser($email, $password);
    if ($success) {
        session_start();
        $_SESSION["user"] = $email;
        header("Location: /");

        exit();
    } else {
        header("Location: /auth");
        exit();
    }
} else {
    echo "Method not allowed";
}
