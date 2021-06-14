<?php
    declare(strict_types = 1);
    function numbers(int $a = 25, int $b = 78, int $c = 2) : int 
    {
        return $a + $b + $c;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.8</title>
</head>
<body>
    <h1>Exercice 8 Partie 4 : Les fonctions PHP</h1>
        <p><?=numbers()?></p>
</body>
</html>