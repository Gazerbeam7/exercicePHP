<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
</head>

<body>
    <?php

    include 'fonctionsSQL.php';
    include 'fonctionsTable.php';
    $rows = getAllUsers();
    afficherTableau($rows, getHeaderTable());
    ?>

    <a href=formulaireClients.php?id=0>Créer un Client</a>
</body>

</html>