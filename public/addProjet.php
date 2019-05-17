<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=localhost;dbname=spawndb', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$data = [
    "name" => $_POST["name"],
    "picture_url" => $_POST['picture_url'] ?: null,
];

$projetRepository = new \Spawn\SpawnRepository($dbh);

if (null !== $data["name"] &&  null !== $data["picture_url"]) {
    $projetRepository->insert($data);
}



