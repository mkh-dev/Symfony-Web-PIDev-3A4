<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="id_cat_event", columns={"id_cat_event"}), @ORM\Index(name="id_transport", columns={"id_transport"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=255, nullable=false)
     */
    private $nomEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="description_event", type="string", length=255, nullable=false)
     */
    private $descriptionEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_event", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateDebutEvent = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_event", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateFinEvent = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_event", type="string", length=255, nullable=false)
     */
    private $lieuEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="budget_event", type="integer", nullable=false)
     */
    private $budgetEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var \CategorieEvent
     *
     * @ORM\ManyToOne(targetEntity="CategorieEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat_event", referencedColumnName="id_cat_event")
     * })
     */
    private $idCatEvent;

    /**
     * @var \Transport
     *
     * @ORM\ManyToOne(targetEntity="Transport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_transport", referencedColumnName="id_transport")
     * })
     */
    private $idTransport;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
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

    public function getDescriptionEvent(): ?string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): self
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    public function getDateDebutEvent(): ?\DateTimeInterface
    {
        return $this->dateDebutEvent;
    }

    public function setDateDebutEvent(\DateTimeInterface $dateDebutEvent): self
    {
        $this->dateDebutEvent = $dateDebutEvent;

        return $this;
    }

    public function getDateFinEvent(): ?\DateTimeInterface
    {
        return $this->dateFinEvent;
    }

    public function setDateFinEvent(\DateTimeInterface $dateFinEvent): self
    {
        $this->dateFinEvent = $dateFinEvent;

        return $this;
    }

    public function getLieuEvent(): ?string
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

    public function setBudgetEvent(int $budgetEvent): self
    {
        $this->budgetEvent = $budgetEvent;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
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


}
