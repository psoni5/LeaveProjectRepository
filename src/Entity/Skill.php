<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillRepository")
 */
class Skill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $skill_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EmployeeSkill", mappedBy="skill_id")
     */
    private $employeeSkills;

    public function __construct()
    {
        $this->employeeSkills = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSkillId(): ?int
    {
        return $this->skill_id;
    }

    public function setSkillId(int $skill_id): self
    {
        $this->skill_id = $skill_id;

        return $this;
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection|EmployeeSkill[]
     */
    public function getEmployeeSkills(): Collection
    {
        return $this->employeeSkills;
    }

    public function addEmployeeSkill(EmployeeSkill $employeeSkill): self
    {
        if (!$this->employeeSkills->contains($employeeSkill)) {
            $this->employeeSkills[] = $employeeSkill;
            $employeeSkill->setSkillId($this);
        }

        return $this;
    }

    public function removeEmployeeSkill(EmployeeSkill $employeeSkill): self
    {
        if ($this->employeeSkills->contains($employeeSkill)) {
            $this->employeeSkills->removeElement($employeeSkill);
            // set the owning side to null (unless already changed)
            if ($employeeSkill->getSkillId() === $this) {
                $employeeSkill->setSkillId(null);
            }
        }

        return $this;
    }
}
