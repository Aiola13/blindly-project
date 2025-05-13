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

    private function getPWithBase(){

            if($pokemon->getNiveau() < 33){
                $chance = 0.30;
            }
            elseif($pokemon->getNiveau() >= 33 && $pokemon->getNiveau() < 66){
                $chance = 0.20;
            }
            else{ 
                $chance = 0.10;
            }
            return $chance;
        }
    
    private function getPWithRare(){

            if($pokemon->getNiveau() < 33){
                $chance = 0.50;
            }
            elseif($pokemon->getNiveau() >= 33 && $pokemon->getNiveau() < 66){
                $chance = 0.40;
            }
            else{ 
                $chance = 0.30;
            }
            return $chance;
        }

    private function getPWithSuperRare(){

            if($pokemon->getNiveau() < 33){
                $chance = 0.70;
            }
            elseif($pokemon->getNiveau() >= 33 && $pokemon->getNiveau() < 66){
                $chance = 0.60;
            }
            else{ 
                $chance = 0.50;
            }
            return $chance;
        }
    
    private function getPWithLegendary(){

            $chance = 1.0;
            return $chance;
        }





    public function c($p, $pokemon) {
    switch ($p) {
        case 'base':
            $chance = $this->getPWithBase($pokemon);
            break;
        case 'rare':
            $chance = $this->getPWithRare($pokemon);
            break;
        case 'super-rare':
            $chance = $this->getPWithSuperRare($pokemon);
            break;
        case 'legendary':
            $chance = $this->getPWithLegendary();
            break;
        default:
            return false;
    }

    $rand = rand(0, 100) / 100;
    if ($rand <= $chance) {
        return true;
    } else {
        return false;
    }
}




    public function a($p){
        $this->equipe[] = $p;
        return $this->equipe;
    }



    public function  r($ix){
        if (isset($this->equipe[$ix])) {
            unset($this->equipe[$ix]);
            $this->equipe = array_values($this->equipe);
            return true;
        }
        return false;

    }


    
    public function l(){
        $result = [];
        foreach ($this->equipe as $pokemon) {
            $result[] = $pokemon->getNom();
        }
        return $result;

    }

}