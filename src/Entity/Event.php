<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 70)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $eventdAt = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;

    #[ORM\Column]
    private ?int $capacity = null;

    #[ORM\Column(length: 255)]
    private ?string $E_mail = null;

    #[ORM\Column]
    private ?int $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $URL = null;

    #[ORM\Column(length: 50)]
    private ?string $eventstype = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEventdAt(): ?\DateTimeInterface
    {
        return $this->eventdAt;
    }

    public function setEventdAt(\DateTimeInterface $eventdAt): self
    {
        $this->eventdAt = $eventdAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getEMail(): ?string
    {
        return $this->E_mail;
    }

    public function setEMail(string $E_mail): self
    {
        $this->E_mail = $E_mail;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    public function setURL(?string $URL): self
    {
        $this->URL = $URL;

        return $this;
    }

    public function getEventstype(): ?string
    {
        return $this->eventstype;
    }

    public function setEventstype(string $eventstype): self
    {
        $this->eventstype = $eventstype;

        return $this;
    }
}
