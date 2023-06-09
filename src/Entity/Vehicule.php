<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "vehicule")]
#[ORM\Entity]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
     #[ORM\Column ]
     private?int $idVehicule = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $marque;

    #[ORM\Column(type: "string", length: 255)]
    private string $modele;

    #[ORM\Column(type: "string", length: 255)]
    private string $immatriculation;

    #[ORM\Column(name: "Disponibilite", type: "string", length: 255)]
    private string $disponibilite;

    public function getIdVehicule(): ?int
    {
        return $this->idVehicule;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(string $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }
}
