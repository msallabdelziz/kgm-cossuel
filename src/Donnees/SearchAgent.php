<?php

namespace App\Donnees;



class SearchAgent{

    #[ORM\Var(type: 'string')]
    public $nom=''; 
    
    public function __toString(){
        return $this->nom;
    }
}


?>