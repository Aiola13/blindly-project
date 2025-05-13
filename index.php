<?php
Class Pokemon{
    private $hp;
    private $att;
    private $def;
    private $attspe;
    private $defspe;
    private $speed;

    private $nom;
    private $type;
    private $niveau;
    private $numero_pokedex;
    public $listAttack=[];
    public function __construct($hp,$att,$def,$attspe,$defspe,$speed,$nom,$type,$niveau,$numero_pokedex){
        $this->hp=$hp;
        $this->att=$att;
        $this->def=$def;
        $this->attspe=$attspe;
        $this->defspe=$defspe;
        $this->speed=$speed;
        $this->type=$type;
        $this->niveau=$niveau;
        $this->numero_pokedex=$numero_pokedex;
    }
    public function Attack($poke_enemi,$nomAtt){
        $degat=((2*$this->niveau/2+2)*$this->listAttack[$nomAtt][0]*($this->attspe/$poke_enemi->defspe))/50+2;
        $poke_enemi->hp=$poke_enemi->hp-$degat;
        echo "<p>l'attaque de ouisticram va infliger " . $degat."</p><br>";
    } 
    public function addAttack($nomAtt,$degat,$type){
        $this->listAttack["$nomAtt"]=[$degat,$type];
    }
    public function addLevel(){
        $this->niveau+=1;
        echo $this->niveau;
    }
    public function se_presenter() {
        echo 'Je suis le Pokémon ' . $this->nom . ' de type ' . $this->type . ' avec une vitesse de ' . $this->speed . ' et mon numéro Pokédex est ' . $this->numero_pokedex . '.';
    }
    public function getHp(){
        if ($this->hp<0) {
         echo "<br>".$this->hp=0;
        }
        else {
           echo "<br>". $this->hp;
        }
    }
}