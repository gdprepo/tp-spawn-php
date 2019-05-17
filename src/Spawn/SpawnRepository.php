<?php

namespace Spawn;

class SpawnRepository {

    private $dbh = null;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function fetchAll() {
        $stmt = $this->dbh->prepare('SELECT * from spawn');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert(array $data ) {
        try {
            $stmt = $this->dbh->prepare('INSERT INTO spawn (name, picture_url) VALUES (:name, :picture_url)');
            $stmt->bindParam(':name', $data["name"]);
            $stmt->bindParam(':picture_url', $data["picture_url"]);

            var_dump($stmt->execute());

        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }

    public function update(array $data) {
        try {
            $stmt = $this->dbh->prepare('UPDATE spawn SET name = " '.$_POST['name'].' ", picture_url = " '.$_POST['picture_url'].' " WHERE id=" '.$_POST['id'].' "');
            var_dump($stmt->execute());
        } catch (\Exception $e) {
            var_dump($e); exit;
        }
    }
}