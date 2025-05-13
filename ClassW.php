<?php

class ClassW{
    private $equipe = [];

    public function __construct($equipe){
        $this->equipe = $equipe;
    }

    public function getEquipe(){
        return $this->equipe;
    }

    public function setEquipe($equipe){
        $this->equipe = $equipe;
    }

    
}