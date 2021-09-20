<?php

namespace App\Entity;

use App\Repository\OptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OptionRepository::class)
 */
class Option
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity=OptionCar::class, inversedBy="opt")
     * @ORM\JoinColumn(nullable=false)
     */
    private $optionPrice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOptionPrice(): ?OptionCar
    {
        return $this->optionPrice;
    }

    public function setOptionPrice(?OptionCar $optionPrice): self
    {
        $this->optionPrice = $optionPrice;

        return $this;
    }
}
