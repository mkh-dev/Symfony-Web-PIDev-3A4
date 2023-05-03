<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "facture")]
#[ORM\Index(name: "numRes", columns: ["numRes"])]
#[ORM\Index(name: "idUser", columns: ["idUser"])]
#[ORM\Entity]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer", name: "idFacture")]
    private ?int $id = null;

    #[ORM\Column(type: "float", precision: 10, scale: 0, name: "netApayer")]
    private float $netAPayer;

    // #[ORM\ManyToOne(targetEntity: Reservation::class)]
    // #[ORM\JoinColumn(name: "numRes", referencedColumnName: "numRes")]
    // private ?Reservation $reservation = null;

    #[ORM\Column(type: "integer", name: "numRes")]
    private ?int $reservation = null;
    

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
}
