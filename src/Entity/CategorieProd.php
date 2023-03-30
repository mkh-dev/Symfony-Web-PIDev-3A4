<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieProd
 *
 * @ORM\Table(name="categorie_prod")
 * @ORM\Entity
 */
class CategorieProd
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_prod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatProd;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_prod", type="string", length=255, nullable=false)
     */
    private $catProd;

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


}
