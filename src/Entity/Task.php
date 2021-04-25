<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"task:read"}},
 *     denormalizationContext={"groups"={"task:write"}})
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     * @Groups("task:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups({"task:read", "task:write"})
     */
    private $Name;

    /**
     * @ORM\Column(type="datetime")
     * 
     * @Groups({"task:read", "task:write"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups({"task:read", "task:write"})
     */
    private $note;

    /**
     * @ORM\Column(type="boolean")
     * 
     * @Groups({"task:read", "task:write"})
     */
    private $fait;

    /**
     * @ORM\ManyToOne(targetEntity=Liste::class, inversedBy="tasks")
     * 
     * @Groups("task:read")
     */
    private $liste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getFait(): ?bool
    {
        return $this->fait;
    }

    public function setFait(bool $fait): self
    {
        $this->fait = $fait;

        return $this;
    }

    public function getListe(): ?Liste
    {
        return $this->liste;
    }

    public function setListe(?Liste $liste): self
    {
        $this->liste = $liste;

        return $this;
    }
}
