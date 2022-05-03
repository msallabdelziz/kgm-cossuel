<?php

namespace App\Donnees;

use App\Entity\Localite;

class TrieData{

    #[ORM\Var(type: 'Localite')]
    public $localite;

    public function __toString(){
        return $this->localite;
    }
}


?>