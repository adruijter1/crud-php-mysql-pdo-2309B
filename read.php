<?php

/**
 * Haal de inloggegevens binnen op deze pagina met de include functie
 * haal daarmee het bestand config.php binnen met de inloggegevens
 */
include('config/config.php');

/**
 * Maak een datasourcename-string voor het maken van een PDO-object
 * Let erop dat host en dbname klein geschreven zijn.
 */
$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8;";

$pdo = new PDO($dsn, $dbUser, $dbPass);