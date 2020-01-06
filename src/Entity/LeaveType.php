<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeaveTypeRepository")
 */
class LeaveType
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
    private $leave_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $days_per_year;

    /**
     * @ORM\Column(type="integer")
     */
    private $carry_farward;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLeaveType(): ?string
    {
        return $this->leave_type;
    }

    public function setLeaveType(string $leave_type): self
    {
        $this->leave_type = $leave_type;

        return $this;
    }

    public function getDaysPerYear(): ?int
    {
        return $this->days_per_year;
    }

    public function setDaysPerYear(int $days_per_year): self
    {
        $this->days_per_year = $days_per_year;

        return $this;
    }

    public function getCarryFarward(): ?int
    {
        return $this->carry_farward;
    }

    public function setCarryFarward(int $carry_farward): self
    {
        $this->carry_farward = $carry_farward;

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
}
