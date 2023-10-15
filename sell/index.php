<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>LightSales: Sell</title>
</head>
<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: /auth");
    exit();
}
?>

<body>
    <h1>Sellers landing page</h1>
    <a href="lib/logout.php">logout</a>

</body>

</html>