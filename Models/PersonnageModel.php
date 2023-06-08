<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/Personnage.php';

use App\Database;

use PDO;

class PersonnageModel{
    private $connection;

    public function __construct(){
        $this->connection = new Database();
    }
    public function getAll(){
        $query = $this->connection->getPdo()->prepare("SELECT id,name FROM personnage");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\Personnage");
    }

    public function create($personnage){
        $query = $this->connection->getPdo()->prepare('INSERT INTO personnage (name) VALUES (:name)');
        $query->execute([
            'name' => $personnage['name']
        ]);
    }
}