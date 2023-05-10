<?php

namespace App\Entity;

use App\Repository\ReservationJsonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationJsonRepository::class)]
class ReservationJson
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $idEvent = null;

    #[ORM\Column]
    private ?string $iduser = null;

    #[ORM\Column]
    private ?int $nbp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __construct(int $numres,string $idEvent, string $iduser, int $nbp)
    {
        $this->id = $numres;
        $this->idEvent = $idEvent;
        $this->iduser = $iduser;
        $this->nbp = $nbp;

    }

    public function getIdEvent(): ?string
    {
        return $this->idEvent;
    }

    public function setIdEvent(string $idEvent): self
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function getIduser(): ?string
    {
        return $this->iduser;
    }

    public function setIduser(string $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getNbp(): ?int
    {
        return $this->nbp;
    }

    public function setNbp(int $nbp): self
    {
        $this->nbp = $nbp;

        return $this;
    }
}
