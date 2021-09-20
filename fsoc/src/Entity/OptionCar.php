<?php

namespace App\Entity;

use App\Repository\OptionCarRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OptionCarRepository::class)
 */
class OptionCar
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\OneToMany(targetEntity=Option::class, mappedBy="optionPrice")
     */
    private $opt;

    /**
     * @ORM\OneToMany(targetEntity=Car::class, mappedBy="optionPrice")
     */
    private $car;

    public function __construct()
    {
        $this->opt = new ArrayCollection();
        $this->car = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Option[]
     */
    public function getOpt(): Collection
    {
        return $this->opt;
    }

    public function addOpt(Option $opt): self
    {
        if (!$this->opt->contains($opt)) {
            $this->opt[] = $opt;
            $opt->setOptionPrice($this);
        }

        return $this;
    }

    public function removeOpt(Option $opt): self
    {
        if ($this->opt->removeElement($opt)) {
            // set the owning side to null (unless already changed)
            if ($opt->getOptionPrice() === $this) {
                $opt->setOptionPrice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Car[]
     */
    public function getCar(): Collection
    {
        return $this->car;
    }

    public function addCar(Car $car): self
    {
        if (!$this->car->contains($car)) {
            $this->car[] = $car;
            $car->setOptionPrice($this);
        }

        return $this;
    }

    public function removeCar(Car $car): self
    {
        if ($this->car->removeElement($car)) {
            // set the owning side to null (unless already changed)
            if ($car->getOptionPrice() === $this) {
                $car->setOptionPrice(null);
            }
        }

        return $this;
    }
}
