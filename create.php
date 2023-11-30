<?php

var_dump($_POST);

include('config/config.php');

$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

$pdo = new PDO($dsn, $dbUser, $dbPass);

$sql = "INSERT INTO Persoon (Voornaam
                            ,Tussenvoegsel
                            ,Achternaam
                            ,Wachtwoord)
        VALUES              ('{$_POST['firstname']}'
                            ,'{$_POST['infix']}'
                            ,'{$_POST['lastname']}'
                            ,'{$_POST['password']}')";

echo $sql;