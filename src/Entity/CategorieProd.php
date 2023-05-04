<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Regex;

#[ORM\Table(name: "categorie_prod")]
#[ORM\Entity]
class CategorieProd
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_cat_prod", type: "integer")]
    private ?int $idCatProd = null;


    #[ORM\Column(type: "string", length: 255, name: "cat_prod")]
    #[Assert\NotBlank(message: "The category name is required ")]
    #[Assert\Length(
        max: 255,
        maxMessage: "The category name should not exceed {{ limit }} characters"
    )]
    #[Regex(
        pattern: '/^[a-zA-ZÀ-ÖØ-öø-ÿ\-\s]+$/',
        message: "The category name should only contain letters, spaces, or dashes."
    )]

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
    public function __toString(): string
    {
        return $this->catProd;
    }
}
