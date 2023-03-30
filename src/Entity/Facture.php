<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="numRes", columns={"numRes"}), @ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var float
     *
     * @ORM\Column(name="netApayer", type="float", precision=10, scale=0, nullable=false)
     */
    private $netapayer;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numRes", referencedColumnName="numRes")
     * })
     */
    private $numres;

    public function getIdfacture(): ?int
    {
        return $this->idfacture;
    }

    public function getNetapayer(): ?float
    {
        return $this->netapayer;
    }

    public function setNetapayer(float $netapayer): self
    {
        $this->netapayer = $netapayer;

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

    public function getNumres(): ?Reservation
    {
        return $this->numres;
    }

    public function setNumres(?Reservation $numres): self
    {
        $this->numres = $numres;

        return $this;
    }


}
