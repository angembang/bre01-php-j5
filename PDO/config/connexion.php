<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "angekamwangmbang_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "angekamwangmbang";
$password = "807729d96bee5f9ce5c2908f596f38c7";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

