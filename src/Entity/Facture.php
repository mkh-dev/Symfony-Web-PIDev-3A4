<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

use App\Repository\FactureRepository;


#[ORM\Table(name: "facture")]
#[ORM\Index(name: "numRes", columns: ["numRes"])]
#[ORM\Index(name: "idUser", columns: ["idUser"])]
#[ORM\Entity(repositoryClass:FactureRepository::class)]

class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer", name: "idFacture")]
   /* #[Assert\NotBlank(message:"Id is required")]*/
    private ?int $id = null;

    #[ORM\Column(type: "float", precision: 10, scale: 0, name: "netApayer")]
    #[Assert\NotBlank(message:"Net a payer est obligatoire ")]
    #[Assert\Positive(message:"il faut une valeur positive")]
    private float $netAPayer;

    #[ORM\ManyToOne(targetEntity: Reservation::class)]
    #[ORM\JoinColumn(name: "numRes", referencedColumnName: "numRes")]
    

    private ?Reservation $reservation = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: "idUser", referencedColumnName: "id")]
   

    private ?Users $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNetAPayer(): float
    {
        return $this->netAPayer;
    }

    public function setNetAPayer(float $netAPayer): self
    {
        $this->netAPayer = $netAPayer;

        return $this;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }
    public function __toString() 
    {
        return (string) $this->id; 
    }
}
