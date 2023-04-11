<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "categorie_prod")]
#[ORM\Entity]
class CategorieProd
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_cat_prod", type: "integer")]
    private ?int $idCatProd = null;

    #[ORM\Column(type: "string", length: 255, name: "cat_prod")]
    private ?string $catProd = null;

    public function getIdCatProd(): ?int
    {
        return $this->idCatProd;
    }

    public function getCatProd(): ?string
    {
        return $this->catProd;
    }

    public function setCatProd(string $catProd): self
    {
        $this->catProd = $catProd;

        return $this;
    }
    public function __toString() 
{
    return (string) $this->catProd; 
}
}
