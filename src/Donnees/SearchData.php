<?php

namespace App\Donnees;

use App\Entity\Localite;

class SearchData{

    #[ORM\Var(type: 'string')]
    public $code=''; 
    
    #[ORM\Var(type: 'Localite')]
    public $localite;

    public function __toString(){
        return $this->code;
    }
}


?>