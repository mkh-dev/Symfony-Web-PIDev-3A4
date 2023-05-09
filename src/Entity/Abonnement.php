<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

use App\Repository\AbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("abonnements")]

    private ?int $id = null;


    #[ORM\Column]
    private ?bool $renouvellement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"Il faut indiquer la date ")]
    #[Assert\GreaterThanOrEqual('+4320 hours ',message:"Il faut un minimum de 6 mois ")]
    #[Groups("abonnements")]

    private ?\DateTimeInterface $dateExpire = null;

    #[ORM\ManyToOne(inversedBy: 'abonnements')]
    #[Groups("abonnements")]


    private ?int $idUser = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Il faut indiquer le prix ")]
    #[Assert\Positive(message:"Il faut une valeur positive ")]
    #[Groups("abonnements")]


    private ?float $prix = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Il faut indiquer le plafond ")]
    #[Assert\Positive(message:"Il faut une valeur positive ")]
    #[Assert\LessThanOrEqual(20,message:"Il faut pas dépasser un plafond de 20 réservation")]
    #[Assert\GreaterThanOrEqual(5,message:"Il faut un minimum de 5 réservations")]
    #[Groups("abonnements")]

    private ?int $plafond = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Il faut indiquer le type  ")]
    #[Groups("abonnements")]

    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\Currency()]
    #[Groups("abonnements")]

    private ?string $currency = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function isRenouvellement(): ?bool
    {
        return $this->renouvellement;
    }

    public function setRenouvellement(bool $renouvellement): self
    {
        $this->renouvellement = $renouvellement;

        return $this;
    }

    public function getDateExpire(): ?\DateTimeInterface
    {
        return $this->dateExpire;
    }

    public function setDateExpire(\DateTimeInterface $dateExpire): self
    {
        $this->dateExpire = $dateExpire;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPlafond(): ?int
    {
        return $this->plafond;
    }

    public function setPlafond(int $plafond): self
    {
        $this->plafond = $plafond;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
