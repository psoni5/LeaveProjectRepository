<?php

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeSkillRepository")
 */
class EmployeeSkill
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
    private $emp_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Skill", inversedBy="employeeSkills")
     * @ORM\JoinColumn(nullable=false)
     */
    private $skill_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LeaveApplied", mappedBy="manager_id")
     */
    private $leaveApplieds;

    public function __construct()
    {
        $this->leaveApplieds = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpId(): ?int
    {
        return $this->emp_id;
    }

    public function setEmpId(int $emp_id): self
    {
        $this->emp_id = $emp_id;

        return $this;
    }

    public function getSkillId(): ?Skill
    {
        return $this->skill_id;
    }

    public function setSkillId(?Skill $skill_id): self
    {
        $this->skill_id = $skill_id;

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
     * @return Collection|LeaveApplied[]
     */
    public function getLeaveApplieds(): Collection
    {
        return $this->leaveApplieds;
    }

    public function addLeaveApplied(LeaveApplied $leaveApplied): self
    {
        if (!$this->leaveApplieds->contains($leaveApplied)) {
            $this->leaveApplieds[] = $leaveApplied;
            $leaveApplied->setManagerId($this);
        }

        return $this;
    }

    public function removeLeaveApplied(LeaveApplied $leaveApplied): self
    {
        if ($this->leaveApplieds->contains($leaveApplied)) {
            $this->leaveApplieds->removeElement($leaveApplied);
            // set the owning side to null (unless already changed)
            if ($leaveApplied->getManagerId() === $this) {
                $leaveApplied->setManagerId(null);
            }
        }

        return $this;
    }


}
