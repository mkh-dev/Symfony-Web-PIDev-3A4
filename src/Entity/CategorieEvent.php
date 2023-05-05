<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "categorie_event")]
#[ORM\Entity]
class CategorieEvent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer", name: "id_cat_event")]
    private ?int $idCatEvent = null;

    #[ORM\Column(type: "string", length: 255, name: "cat_event")]
    private ?string $catEvent = null;

    public function getIdCatEvent(): ?int
    {
        return $this->idCatEvent;
    }

    public function getCatEvent(): ?string
    {
        return $this->catEvent;
    }

    public function setCatEvent(string $catEvent): self
    {
        $this->catEvent = $catEvent;

        return $this;
    }
    public function __toString(): string
    {
        return $this->idCatEvent;
    }
}
