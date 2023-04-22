<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Regex;


#[ORM\Table(name: "produit")]
#[ORM\Index(name: "id_cat", columns: ["id_cat_prod"])]
#[ORM\Entity]
class Produit
{  #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $idProd = null;
     
    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "The product name is required.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "The product name should not exceed {{ limit }} characters"
    )]
    
    private ?string $nomProd = null;

    #[ORM\Column(type: "text")]
    #[Assert\NotBlank(message: "The description is required.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "The description should not exceed {{ limit }} characters"
    )]
    
    private ?string $description = null;

    #[ORM\Column(type: "float", precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "The price is required.")]
    #[Assert\PositiveOrZero(message: "The price must be a positive number ")]
    private ?float $prix = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "The quantity is required.")]
    #[Assert\PositiveOrZero(message: "The quantity must be a positive number ")]
    private ?int $quantite = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "The partner name is required.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "The partner name should not exceed {{ limit }} characters"
    )]
    #[Regex(
        pattern: '/^[a-zA-ZÀ-ÖØ-öø-ÿ\-\s]+$/',
        message: "The partner name should only contain letters, spaces or hyphens"
    )]
    private ?string $nomPart = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Please upload the product image.")]
    private ?string $image = null;

    #[ORM\ManyToOne(targetEntity: "CategorieProd")]
    #[ORM\JoinColumn(name: "id_cat_prod", referencedColumnName: "id_cat_prod")]
    private ?CategorieProd $idCatProd = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbLikes = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbDislikes = null;

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

    public function getNbLikes(): ?int
    {
        return $this->nbLikes;
    }

    public function setNbLikes(?int $nbLikes): self
    {
        $this->nbLikes = $nbLikes;

        return $this;
    }

    public function getNbDislikes(): ?int
    {
        return $this->nbDislikes;
    }

    public function setNbDislikes(?int $nbDislikes): self
    {
        $this->nbDislikes = $nbDislikes;

        return $this;
    }
   
}