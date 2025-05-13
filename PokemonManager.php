<?php

class PokemonManager
{
    private $p_cap1;
    private $p_cap2;
    private $v_pok1;
    private $v_pok2;
    private $first_to_att;
    public function __construct($p_cap1, $p_cap2, $v_pok1, $v_pok2)
    {
        $this->p_cap1 = $p_cap1;
        $this->p_cap2 = $p_cap2;
        $this->v_pok1 = $v_pok1;
        $this->v_pok2 = $v_pok2;
    }

    public function p_cap()
    {
        if ($this->p_cap1 > $this->p_cap2) {
            $this->first_to_att = "p1";
            return "Pokemon 1 attaque en premier (capacité)";
        } else if ($this->p_cap1 < $this->p_cap2) {
            $this->first_to_att = "p2";
            return "Pokemon 2 attaque en premier (capacité)";
        } else {
            return $this->v_pok();
        }
    }

    public function v_pok()
    {
        if ($this->v_pok1 > $this->v_pok2) {
            $this->first_to_att = "p1";
            return "Pokemon 1 attaque en premier (vitesse)";
        } else if ($this->v_pok2 > $this->v_pok1) {
            $this->first_to_att = "p2";
            return "Pokemon 2 attaque en premier (vitesse)";
        } else {
            $choices = ["p1", "p2"];
            $p = $choices[array_rand($choices)];
            return "Les deux Pokémon ont le même niveau de capacité et la même vitesse, le choix se fera aléatoirement : $p attaque en premier.";
        }
    }

    // public function n_t(){
    //     return $this->first_to_att === "p1" ? "p2" : "p1";
    // }
}

//TODO quand l'attaque est terminé changer le pokemon

$manager = new PokemonManager(1, 1, 90, 80);
echo $manager->p_cap();
echo $manager->n_t();
echo $manager->p_cap();
