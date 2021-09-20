<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 */
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateBooking;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startBooking;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endBooking;

    /**
     * @ORM\ManyToOne(targetEntity=Car::class, inversedBy="bookings")
     */
    private $car;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="bookings")
     */
    private $userBooking;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateBooking(): ?\DateTimeInterface
    {
        return $this->dateBooking;
    }

    public function setDateBooking(\DateTimeInterface $dateBooking): self
    {
        $this->dateBooking = $dateBooking;

        return $this;
    }

    public function getStartBooking(): ?\DateTimeInterface
    {
        return $this->startBooking;
    }

    public function setStartBooking(\DateTimeInterface $startBooking): self
    {
        $this->startBooking = $startBooking;

        return $this;
    }

    public function getEndBooking(): ?\DateTimeInterface
    {
        return $this->endBooking;
    }

    public function setEndBooking(\DateTimeInterface $endBooking): self
    {
        $this->endBooking = $endBooking;

        return $this;
    }

    public function getCar(): ?Car
    {
        return $this->car;
    }

    public function setCar(?Car $car): self
    {
        $this->car = $car;

        return $this;
    }

    public function getUserBooking(): ?User
    {
        return $this->userBooking;
    }

    public function setUserBooking(?User $userBooking): self
    {
        $this->userBooking = $userBooking;

        return $this;
    }

}
