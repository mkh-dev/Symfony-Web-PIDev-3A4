<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table(name: "transport")]
#[ORM\Entity]
class Transport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idTransport = null;

    #[Assert\NotBlank(message:" Remplire Type Transport")]
    #[ORM\Column(type: Types::STRING, length: 255, nullable: false)]
    private string $typeTransport;
 

    #[Assert\NotBlank(message:" Remplire Date Depart")]
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: false)]
    private \DateTimeInterface $dateDepart;


    #[Assert\NotBlank(message:" Remplire Heure Depart")]
    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: false)]
    private \DateTimeInterface $heureDepart;


    #[Assert\NotBlank(message:" Remplire Lieux Depart")]
    #[ORM\Column(type: Types::STRING, length: 255, nullable: false)]
    private string $lieuDepart;
 

    #[Assert\NotBlank(message:" Remplire Lieu Arrive")]
    #[ORM\Column(type: Types::STRING, length: 255, nullable: false)]
    private string $lieuArriver;
    
    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    private string $textColor;
    

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    private string $backColor;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    private string $borderColor;

    #[Assert\NotBlank(message:" Remplire Prix Transport")]
    #[ORM\Column(type: Types::FLOAT, precision: 10, scale: 0, nullable: false)]
    private float $prixTransport;


    #[ORM\OneToMany(mappedBy: 'transport', targetEntity: Vehicule::class)]
    private Collection $tabVehicule;

    public function __construct()
    {
        $this->tabVehicule = new ArrayCollection();
    }
    

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


    /**
     * @return Collection<int, Vehicule>
     */
    public function getTabVehicule(): Collection
    {
        return $this->tabVehicule;
    }

    public function addTabVehicule(Vehicule $tabVehicule): self
    {
        if (!$this->tabVehicule->contains($tabVehicule)) {
            $this->tabVehicule->add($tabVehicule);
            $tabVehicule->setTransport($this);
        }

        return $this;
    }

    public function removeTabVehicule(Vehicule $tabVehicule): self
    {
        if ($this->tabVehicule->removeElement($tabVehicule)) {
            // set the owning side to null (unless already changed)
            if ($tabVehicule->getTransport() === $this) {
                $tabVehicule->setTransport(null);
            }
        }

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->textColor;
    }

    public function setTextColor(string $textColor): self
    {
        $this->textColor = $textColor;

        return $this;
    }

    public function getBackColor(): ?string
    {
        return $this->backColor;
    }

    public function setBackColor(string $backColor): self
    {
        $this->backColor = $backColor;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->borderColor;
    }

    public function setBorderColor(string $borderColor): self
    {
        $this->borderColor = $borderColor;

        return $this;
    }
}
