<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'evenement')]
#[ORM\Index(name: 'id_cat_event', columns: ['id_cat_event'])]
#[ORM\Index(name: 'id_transport', columns: ['id_transport'])]
#[ORM\Entity]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'id_event', type: 'integer', nullable: false)]
    private ?int $idEvent = null;

    #[ORM\Column(name: 'nom_event', type: 'string', length: 255, nullable: false)]
    private string $nomEvent;

    #[ORM\Column(name: 'description_event', type: 'string', length: 255, nullable: false)]
    private string $descriptionEvent;

    #[ORM\Column(name: 'date_debut_event', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private \DateTimeInterface $dateDebutEvent;

    #[ORM\Column(name: 'date_fin_event', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private \DateTimeInterface $dateFinEvent;

    #[ORM\Column(name: 'lieu_event', type: 'string', length: 255, nullable: false)]
    private string $lieuEvent;

    #[ORM\Column(name: 'budget_event', type: 'integer', nullable: false)]
    private int $budgetEvent;

    #[ORM\Column(name: 'image', type: 'string', length: 255, nullable: false)]
    private string $image;

    #[ORM\ManyToOne(targetEntity: 'CategorieEvent')]
    #[ORM\JoinColumn(name: 'id_cat_event', referencedColumnName: 'id_cat_event')]
    private ?CategorieEvent $idCatEvent = null;

    #[ORM\ManyToOne(targetEntity: 'Transport')]
    #[ORM\JoinColumn(name: 'id_transport', referencedColumnName: 'id_transport')]
    private ?Transport $idTransport = null;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNomEvent(): string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDescriptionEvent(): string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): self
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    public function getDateDebutEvent(): \DateTimeInterface
    {
        return $this->dateDebutEvent;
    }

    public function setDateDebutEvent(\DateTimeInterface $dateDebutEvent): self
    {
        $this->dateDebutEvent = $dateDebutEvent;

        return $this;
    }

    public function getDateFinEvent(): \DateTimeInterface
    {
        return $this->dateFinEvent;
    }

    public function setDateFinEvent(\DateTimeInterface $dateFinEvent): self
    {
        $this->dateFinEvent = $dateFinEvent;

        return $this;
    }

    public function getLieuEvent(): string
    {
        return $this->lieuEvent;
    }

    public function setLieuEvent(string $lieuEvent): self
{
$this->lieuEvent = $lieuEvent;
return $this;
}


    public function getBudgetEvent(): ?int
    {
        return $this->budgetEvent;
    }

    public function setBudgetEvent(?int $budgetEvent): self
    {
        $this->budgetEvent = $budgetEvent;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdCatEvent(): ?CategorieEvent
    {
        return $this->idCatEvent;
    }

    public function setIdCatEvent(?CategorieEvent $idCatEvent): self
    {
        $this->idCatEvent = $idCatEvent;

        return $this;
    }

    public function getIdTransport(): ?Transport
    {
        return $this->idTransport;
    }

    public function setIdTransport(?Transport $idTransport): self
    {
        $this->idTransport = $idTransport;

        return $this;
    }
    public function __toString() 
    {
        return (string) $this->idEvent; 
    }
}
   
