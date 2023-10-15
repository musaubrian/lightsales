<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>LightSales: Buy</title>
</head>
<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: /auth");
    exit();
}
?>

<body>
    <h1>Buyers landing page</h1>
</body>

</html>