<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = 'root';
$pass = '';
$host = 'localhost';
$dbname = "accounts";

try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);

    $dbh->exec("SET NAMES 'utf8'");

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = "ERREUR PDO dans " . $e->getFile() . ' | ' . $e->getLine() . ' : ' . $e->getMessage();
    die($error);
}
