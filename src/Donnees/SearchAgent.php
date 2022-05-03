<?php

namespace App\Donnees;

use App\Entity\Agence;

class SearchAgent{

    #[ORM\Var(type: 'string')]
    public $nom=''; 
    
    #[ORM\Var(type: 'Agence')]
    public $agence;

    public function __toString(){
        return $this->nom;
    }
}


?>