<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $symfonyproject = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSymfonyproject(): ?string
    {
        return $this->symfonyproject;
    }

    public function setSymfonyproject(?string $symfonyproject): static
    {
        $this->symfonyproject = $symfonyproject;

        return $this;
    }
}
