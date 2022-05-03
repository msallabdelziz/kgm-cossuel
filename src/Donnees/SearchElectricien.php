<?php

namespace App\Donnees;

use App\Entity\Localite;

class SearchElectricien{

    #[ORM\Var(type: 'string')]
    public $nom=''; 
    
    #[ORM\Var(type: 'Localite')]
    public $localite;

    public function __toString(){
        return $this->nom;
    }
}


?>