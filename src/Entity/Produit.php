<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "produit")]
#[ORM\Index(name: "id_cat", columns: ["id_cat_prod"])]
#[ORM\Entity]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $idProd = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $nomProd = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: "float", precision: 10, scale: 0)]
    private ?float $prix = null;

    #[ORM\Column(type: "integer")]
    private ?int $quantite = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $nomPart = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(targetEntity: "CategorieProd")]
    #[ORM\JoinColumn(name: "id_cat_prod", referencedColumnName: "id_cat_prod")]
    private ?CategorieProd $idCatProd = null;

    public function getIdProd(): ?int
    {
        return $this->idProd;
    }

    public function getNomProd(): ?string
    {
        return $this->nomProd;
    }

    public function setNomProd(string $nomProd): self
    {
        $this->nomProd = $nomProd;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getNomPart(): ?string
    {
        return $this->nomPart;
    }

    public function setNomPart(string $nomPart): self
    {
        $this->nomPart = $nomPart;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdCatProd(): ?CategorieProd
    {
        return $this->idCatProd;
    }

    public function setIdCatProd(?CategorieProd $idCatProd): self
    {
        $this->idCatProd = $idCatProd;

        return $this;
    }
}
