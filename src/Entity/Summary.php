<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SummaryRepository;

#[ORM\Entity(repositoryClass: SummaryRepository::class)]
#[ORM\Table(name: "summary")]
class Summary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $total_users;

    #[ORM\Column(type: 'datetime')]
    private $extraction_date;

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalUsers(): ?int
    {
        return $this->total_users;
    }

    public function setTotalUsers(int $totalUsers): self
    {
        $this->total_users = $totalUsers;
        return $this;
    }

    public function getExtractionDate(): ?\DateTimeInterface
    {
        return $this->extraction_date;
    }

    public function setExtractionDate(\DateTimeInterface $extractionDate): self
    {
        $this->extraction_date = $extractionDate;
        return $this;
    }
}
