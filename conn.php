<html>
    <head>
        <meta charset="UTF-8">
        <title>Visitor Registration 2019</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
<?php
$server = 'localhost';
$username = 'root';
$db = 'db';
$password = '';

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
    die($conn->connect_error);
}
?>