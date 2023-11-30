<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>CRUD met PHP</title>
</head>
<body>
    <h3>CRUD met PHP en PDO</h3>

    <form method="post" action="create.php">
        <label for="firstname">Voornaam: </label>
        <input type="text" name="firstname" id="firstname"><br><br>

        <label for="infix">Tussenvoegsel: </label>
        <input type="text" name="infix" id="infix"><br><br>

        <label for="lastname">Achternaam: </label>
        <input type="text" name="lastname" id="lastname"><br><br>

        <!-- Maak een input tag voor de leeftijd -->
        <label for="age">Leeftijd: </label>
        <input type="number" name="age" id="age"><br><br>

        <!-- Maak een input tag voor schoenmaat -->

        <!-- Maak een input tag voor verjaardagsdatum -->

        <label for="password">Wachtwoord: </label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Verzend" name="submit">
    </form>
</body>
</html>