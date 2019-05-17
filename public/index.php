<?php
include_once './../src/setup.php';
include_once './layout/structure.php';
session_start();
try {
        $dbh = new PDO('mysql:host=localhost;dbname=spawndb', 'root', 'root');
} catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
}

$spawnRepository = new \Spawn\SpawnRepository($dbh);
$spawn = $spawnRepository->fetchAll();
$spawn["spawn"] = $spawn;

loadStructure('./view/accueil.php', 'acceuil', $spawn);