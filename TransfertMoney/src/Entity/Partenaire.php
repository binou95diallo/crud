<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PartenaireRepository")
 */
class Partenaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matriculePartenaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomComplet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passWord;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ninea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UsersPartenaire", mappedBy="partenaire")
     */
    private $usersPartenaires;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\BankAccount", mappedBy="partenaire", cascade={"persist", "remove"})
     */
    private $bankAccount;

    public function __construct()
    {
        $this->usersPartenaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculePartenaire(): ?string
    {
        return $this->matriculePartenaire;
    }

    public function setMatriculePartenaire(string $matriculePartenaire): self
    {
        $this->matriculePartenaire = $matriculePartenaire;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassWord(): ?string
    {
        return $this->passWord;
    }

    public function setPassWord(string $passWord): self
    {
        $this->passWord = $passWord;

        return $this;
    }

    public function getNinea(): ?string
    {
        return $this->ninea;
    }

    public function setNinea(string $ninea): self
    {
        $this->ninea = $ninea;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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

    /**
     * @return Collection|UsersPartenaire[]
     */
    public function getUsersPartenaires(): Collection
    {
        return $this->usersPartenaires;
    }

    public function addUsersPartenaire(UsersPartenaire $usersPartenaire): self
    {
        if (!$this->usersPartenaires->contains($usersPartenaire)) {
            $this->usersPartenaires[] = $usersPartenaire;
            $usersPartenaire->setPartenaire($this);
        }

        return $this;
    }

    public function removeUsersPartenaire(UsersPartenaire $usersPartenaire): self
    {
        if ($this->usersPartenaires->contains($usersPartenaire)) {
            $this->usersPartenaires->removeElement($usersPartenaire);
            // set the owning side to null (unless already changed)
            if ($usersPartenaire->getPartenaire() === $this) {
                $usersPartenaire->setPartenaire(null);
            }
        }

        return $this;
    }

    public function getBankAccount(): ?BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(BankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        // set the owning side of the relation if necessary
        if ($this !== $bankAccount->getPartenaire()) {
            $bankAccount->setPartenaire($this);
        }

        return $this;
    }

   
}
