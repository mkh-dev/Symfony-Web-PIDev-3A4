<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Transport
 *
 * @ORM\Table(name="transport")
 * @ORM\Entity
 */
class Transport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_transport", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="type_transport", type="string", length=255, nullable=false)
     */
    private $typeTransport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_depart", type="time", nullable=false)
     */
    private $heureDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_depart", type="string", length=255, nullable=false)
     */
    private $lieuDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_arriver", type="string", length=255, nullable=false)
     */
    private $lieuArriver;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_transport", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixTransport;

    public function getIdTransport(): ?int
    {
        return $this->idTransport;
    }

    public function getTypeTransport(): ?string
    {
        return $this->typeTransport;
    }

    public function setTypeTransport(string $typeTransport): self
    {
        $this->typeTransport = $typeTransport;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(\DateTimeInterface $heureDepart): self
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    public function getLieuDepart(): ?string
    {
        return $this->lieuDepart;
    }

    public function setLieuDepart(string $lieuDepart): self
    {
        $this->lieuDepart = $lieuDepart;

        return $this;
    }

    public function getLieuArriver(): ?string
    {
        return $this->lieuArriver;
    }

    public function setLieuArriver(string $lieuArriver): self
    {
        $this->lieuArriver = $lieuArriver;

        return $this;
    }

    public function getPrixTransport(): ?float
    {
        return $this->prixTransport;
    }

    public function setPrixTransport(float $prixTransport): self
    {
        $this->prixTransport = $prixTransport;

        return $this;
    }


}
