<?php


function getDatabaseConnexion()
{
    try {
        $user = "root";
        $pass = "";
        $pdo = new PDO('mysql:host=localhost;dbname=crud', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getAllUsers()
{
    $con = getDatabaseConnexion();
    $requete = 'SELECT * FROM clients';
    $rows = $con->query($requete);
    return $rows;
}

function readUser($id)
{
    $con = getDatabaseConnexion();
    $requete = "SELECT * from clients where id = '$id' ";
    $statement = $con->query($requete);
    $row = $statement->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}

function createUser($nom, $prenom, $adresse, $telephone)
{
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO clients (nom, prenom, adresse, telephone) 
                VALUES ('$nom', '$prenom', '$adresse' ,'$telephone')";
        $con->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function updateUser($id, $nom, $prenom, $adresse, $telephone)
{
    try {
        $con = getDatabaseConnexion();
        $requete = "UPDATE clients set 
                    nom = '$nom',
                    prenom = '$prenom',
                    adresse = '$adresse',
                    telephone = '$telephone', 
                    where id = '$id' ";
        $statement = $con->query($requete);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function deleteUser($id)
{
    try {
        $con = getDatabaseConnexion();
        $requete = "DELETE from clients where id = '$id' ";
        $statement = $con->query($requete);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function getNewUser()
{
    $user['id'] = "";
    $user['nom'] = "";
    $user['prenom'] = "";
    $user['adresse'] = "";
    $user['telephone'] = "";
}
