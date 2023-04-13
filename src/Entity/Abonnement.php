<?php

namespace App\Entity;


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
    private ?int $id = null;


    #[ORM\Column]
    private ?bool $renouvellement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"Il faut indiquer la date ")]

    private ?\DateTimeInterface $dateExpire = null;

    #[ORM\ManyToOne(inversedBy: 'abonnements')]
    private ?Users $idUser = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Il faut indiquer le prix ")]
    #[Assert\Positive(message:"Il faut une valeur positive ")]

    private ?float $prix = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Il faut indiquer le plafond ")]
    #[Assert\Positive(message:"Il faut une valeur positive ")]
    private ?int $plafond = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Il faut indiquer le type  ")]
    #[Assert\Choice(choices:["annuel", "semestriel"])]
    private ?string $type = null;
    

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

    public function getIdUser(): ?Users
    {
        return $this->idUser;
    }

    public function setIdUser(?Users $idUser): self
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
}
