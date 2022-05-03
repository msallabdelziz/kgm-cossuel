<?php

namespace App\Donnees;

use App\Entity\Localite;

class SearchInstallation{

    #[ORM\Var(type: 'string')]
    public $nom='';
    
    #[ORM\Var(type: 'string')]
    public $statut='';

    #[ORM\Var(type: 'string')]
    public $usage='';
    
    #[ORM\Var(type: 'Localite')]
    public $localite;

    public function __toString(){
        return $this->nom;
    }
}


?>