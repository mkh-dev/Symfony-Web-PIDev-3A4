<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "reservation2")]
#[ORM\Index(name: "idEvent", columns: ["idEvent"])]
#[ORM\Index(name: "idUser", columns: ["idUser"])]

#[ORM\Entity]
class Reservation2
{
    #[ORM\Column(name: "numRes", type: "integer")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $numres = null;

    #[ORM\Column(name: "idUser", type: "integer")]
    private ?int $iduser = null;

    #[ORM\Column(name: "nbPlaces", type: "integer")]
    private ?int $nbplaces = null;

    #[ORM\Column(name: "nom_event", type: "string", length: 50)]
    private ?string $nomEvent = null;

    #[ORM\Column(name: "dateDebut", type: "date")]
    private ?\DateTimeInterface $datedebut = null;

    #[ORM\Column(name: "lieu", type: "string", length: 50)]
    private ?string $lieu = null;

    #[ORM\ManyToOne(targetEntity: "Evenement")]
   
    #[ORM\JoinColumn(name: "idEvent", referencedColumnName: "id_event")]
    
    private ?Evenement $idevent = null;

    public function getNumres(): ?int
    {
        return $this->numres;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getNbplaces(): ?int
    {
        return $this->nbplaces;
    }

    public function setNbplaces(int $nbplaces): self
    {
        $this->nbplaces = $nbplaces;

        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getIdevent(): ?Evenement
    {
        return $this->idevent;
    }

    public function setIdevent(?Evenement $idevent): self
    {
        $this->idevent = $idevent;

        return $this;
    }
}
