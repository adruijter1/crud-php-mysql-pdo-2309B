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

    /**
     * Maak een nieuw PDO-object om de verbinding te maken met de database op
     * de mysql-server
     */
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    /**
     * Maak een select-query voor het formulier zodat de gegevens aangepast kunnen worden
     */
    $sql = "SELECT Id
                  ,Voornaam
                  ,Tussenvoegsel
                  ,Achternaam
                  ,Wachtwoord
            FROM  Persoon
            WHERE Id = :id";
?>