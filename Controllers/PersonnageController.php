<?php 
namespace App\Controllers;

require_once 'Models/PersonnageModel.php';

use App\Models\PersonnageModel;

class BookController{
    protected $personnageModel;

    public function __construct(){
        $this->personnageModel = new PersonnageModel();
    }

    public function getIndex(){
        $personnage = $this->personnageModel->getAll();
        require_once 'Views/personnage/index.php';
    }

    public function getCreate(){
        require_once 'Views/personnage/create.php';
    }

    public function postCreate(){
        $personnage = $_POST;
        $this->personnageModel->create($personnage);
        header('Location: ../personnage/index');
    }
}