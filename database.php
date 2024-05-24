<?php

// connection à la BDD
function databaseConnect()
{
    $server = "localhost";
    $login = "root";
    $password = "";    
    $port = "3306";
    $dbname = "projet-cesi";

    try {
        $pdo = new PDO("mysql:host=" . $server . ";port=" . $port . ";dbname=" . $dbname, $login, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $pdo->exec("set names utf8");
    
        return $pdo;
    } catch (\Throwable $th) {
        throw $th;
        echo 'erreur de connection à la BDD';
    }
  
}

// Lecture de la BDD
function databaseRead($req, $data = [], $isUnique = false)
{
    $pdo = databaseConnect();

    $stmt = $pdo->prepare($req);

    $stmt->execute($data);

    if ($isUnique) {
        $row = $stmt->fetch();
    } else {
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    databaseConnectionClose($pdo);
    return $row;
}

// écriture dans la BDD
function databaseWrite($req, $data)
{

    try {
        $pdo = databaseConnect();
        $stmt = $pdo->prepare($req);
    
        $stmt->execute($data);
    } catch (\Throwable $th) {
        echo 'une erreur est survenu lors de l\'écriture dans la BDD';
    }
    
    databaseConnectionClose($pdo);
}

// fermeture de la BDD
function databaseConnectionClose($pdo)
{

    $pdo = null;
}

