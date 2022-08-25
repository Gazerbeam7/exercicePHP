<?php
include 'fonctionsSQL.php';
include 'fonctionsTable.php';
$action = $_GET["action"];

if ($action == "DELETE") {
    $id = $_GET["id"];
} else {
    $id = $_GET["id"];
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $adresse = $_GET["adresse"];
    $telephone = $_GET["telephone"];
}


if ($action == "CREATE") {
    createUser($nom, $prenom, $adresse, $telephone);

    echo "Client crée <br>";
    echo "<a href='index.php'>Liste des clients</a>";
}

if ($action == "UPDATE") {
    updateUser($id, $nom, $prenom, $adresse, $telephone);
    echo "Client mis à jour <br>";
    echo "<a href='index.php'>Liste des clients</a>";
}

if ($action == "DELETE") {
    deleteUser($id);
    echo "Client supprimé <br>";
    echo "<a href='index.php'>Liste des clients</a>";
}
