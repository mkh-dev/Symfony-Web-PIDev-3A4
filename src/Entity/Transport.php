<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "transport")]
#[ORM\Entity]
class Transport
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column]
    private ?int $idTransport = null;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: false)]
    private string $typeTransport;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: false)]
    private \DateTimeInterface $dateDepart;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: false)]
    private \DateTimeInterface $heureDepart;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: false)]
    private string $lieuDepart;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: false)]
    private string $lieuArriver;

    #[ORM\Column(type: Types::FLOAT, precision: 10, scale: 0, nullable: false)]
    private float $prixTransport;

    public function getIdTransport(): ?int
    {
        return $this->idTransport;
    }

    public function getTypeTransport(): string
    {
        return $this->typeTransport;
    }

    public function setTypeTransport(string $typeTransport): self
    {
        $this->typeTransport = $typeTransport;

        return $this;
    }

    public function getDateDepart(): \DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getHeureDepart(): \DateTimeInterface
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(\DateTimeInterface $heureDepart): self
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    public function getLieuDepart(): string
    {
        return $this->lieuDepart;
    }

    public function setLieuDepart(string $lieuDepart): self
    {
        $this->lieuDepart = $lieuDepart;

        return $this;
    }

    public function getLieuArriver(): string
    {
        return $this->lieuArriver;
    }

    public function setLieuArriver(string $lieuArriver): self
    {
        $this->lieuArriver = $lieuArriver;

        return $this;
    }

    public function getPrixTransport(): float
    {
        return $this->prixTransport;
    }

    public function setPrixTransport(float $prixTransport): self
    {
        $this->prixTransport = $prixTransport;

        return $this;
    }
    public function __toString() 
{
    return (string) $this->idTransport; 
}
}
