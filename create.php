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

/**
 * Prepareer de sql-query met de prepare-method van de PDO class
 */
$statement = $pdo->prepare($sql);

/**
 * Voer de query uit op de database
 */
$statement->execute();

