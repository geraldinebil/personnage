<?php
namespace App\Models;


class Personnage{
    private $id;
    private $name;

    private $race;

    private $statAttaque;

    private $statDefense;

    public function __construct(){
        
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getRace(){
        return $this->race;
    }
    public function getStatAttaque(){
        return $this->statAttaque;
    }
    public function getStatDefense(){
        return $this->statDefense;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setName($name){
        $this->name=$name;
    }
    public function setRace($race){
        $this->race=$race;
    }
    public function setStatAttaque($statAttaque){
        $this->statAttaque=$statAttaque;
    }
    public function setStatDefense($statDefense){
        $this->statDefense=$statDefense;
    }
    
}