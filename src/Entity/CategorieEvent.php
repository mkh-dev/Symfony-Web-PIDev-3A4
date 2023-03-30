<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieEvent
 *
 * @ORM\Table(name="categorie_event")
 * @ORM\Entity
 */
class CategorieEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_event", type="string", length=255, nullable=false)
     */
    private $catEvent;

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


}
