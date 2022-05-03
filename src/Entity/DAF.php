<?php

namespace App\Entity;

use App\Repository\DAFRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DAFRepository::class)]
class DAF extends Agent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
