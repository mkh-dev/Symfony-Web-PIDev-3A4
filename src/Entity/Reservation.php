<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ReservationRepository;


#[ORM\Table(name: "reservation")]
#[ORM\Index(name: "idUser", columns: ["idUser"])]
#[ORM\Index(name: "idEvent", columns: ["idEvent"])]

#[ORM\Entity(repositoryClass:ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\Column(name: "numRes",type: "integer")]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $numres = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message:"il faut indiquer le nombre de places")]

    private ?int $nbplaces = null;

    #[ORM\ManyToOne(targetEntity: "Evenement")]
    #[ORM\JoinColumn(name: "idEvent", referencedColumnName: "id_event")]

    private ?Evenement $idevent = null;

    #[ORM\ManyToOne(targetEntity: "Users")]
    #[ORM\JoinColumn(name: "idUser", referencedColumnName: "id")]
    
    private ?Users $iduser = null;

    public function getNumres(): ?int
    {
        return $this->numres;
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

    public function getIdevent(): ?Evenement
    {
        return $this->idevent;
    }

    public function setIdevent(?Evenement $idevent): self
    {
        $this->idevent = $idevent;

        return $this;
    }

    public function getIduser(): ?Users
    {
        return $this->iduser;
    }

    public function setIduser(?Users $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }
    public function __toString() 
    {
        return (string) $this->numres; 
    }


}
