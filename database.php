<?php

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
        //throw $th;
        // addLog("error", $th->getCode() . " : " . $th->getMessage());
    }
  
}

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

function databaseWrite($req, $data)
{

    try {
        $pdo = databaseConnect();
        $stmt = $pdo->prepare($req);
    
        $stmt->execute($data);
    } catch (\Throwable $th) {
        addFlash("danger", "Code erreur : " . $th->getCode() . " " . $th->getMessage());
    }
    
    databaseConnectionClose($pdo);
}

function databaseConnectionClose($pdo)
{

    $pdo = null;
}

