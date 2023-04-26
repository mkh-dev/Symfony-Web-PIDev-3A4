<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\UsersRepository;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[ORM\Table(name: "users")]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Users implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z]+$/",
        message: "Le prénom ne peut contenir que des lettres"
    )]
    private string $prenom;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z]+$/",
        message: "Le nom ne peut contenir que des lettres"
    )]
    private string $nom;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private string $email;

    #[ORM\Column(type: "date")]
    #[Assert\NotBlank(message: "La date de naissance est obligatoire")]
    #[Assert\LessThanOrEqual("today", message: "La date de naissance ne peut pas être dans le futur.")]
    #[LessThan("-18 years", message: "Vous devez avoir au moins 18 ans pour vous inscrire.")]
    private \DateTimeInterface $datenaissance;
    
    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire")]
    #[Assert\Regex(
        pattern: '/^[0-9]{8}$/',
        message: "Le numéro de téléphone doit comporter 8 chiffres."
    )]
    private string $numtel;

    #[ORM\Column(type: "string", length: 255)]
    private string $userrole;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le mot de passe est obligatoire")]
    #[Assert\Regex(
        pattern: "/^(?=.*[a-zA-Z])(?=.*\d).*$/",
        message: "Le mot de passe doit contenir au moins une lettre et un chiffre"
    )]
    #[Assert\Length(
        max: 8,
        maxMessage: "Le mot de passe ne doit pas comporter plus de {{ limit }} caractères"
    )]
    
    private string $password;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: ProdLike::class)]
    private Collection $likes;

    public function __construct()
    {
        $this->likes = new ArrayCollection();
    }


    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getUserrole(): ?string
    {
        return $this->userrole;
    }

    public function setUserrole(string $userrole): self
    {
        $this->userrole = $userrole;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }



    public function getUsername(): ?string
{
    return $this->email;
}

    public function getSalt(): ?string
    {
        // You should always use bcrypt or Argon2i for password hashing, which generate their own salts
        // Thus, you don't need to return a custom salt
        return null;
    }

    public function getRoles(): array
    {
        return [$this->getUserrole()];
    }

    public function eraseCredentials()
{
    // if you store any sensitive information on the user, you should erase it here
}

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function __toString() 
    {
        return (string) $this->id; 
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->getEmail();
    }

    public function isIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    /**
     * @return Collection<int, ProdLike>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(ProdLike $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
            $like->setUser($this);
        }

        return $this;
    }

    public function removeLike(ProdLike $like): self
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getUser() === $this) {
                $like->setUser(null);
            }
        }

        return $this;
    }


    

    
    
}
