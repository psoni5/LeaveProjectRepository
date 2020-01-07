<?php

namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeaveStatusRepository")
 */
class LeaveStatus
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
    private $status_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LeaveApplied", mappedBy="status_id")
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

    public function getStatusId(): ?int
    {
        return $this->status_id;
    }

    public function setStatusId(int $status_id): self
    {
        $this->status_id = $status_id;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

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
            $leaveApplied->setStatusId($this);
        }

        return $this;
    }

    public function removeLeaveApplied(LeaveApplied $leaveApplied): self
    {
        if ($this->leaveApplieds->contains($leaveApplied)) {
            $this->leaveApplieds->removeElement($leaveApplied);
            // set the owning side to null (unless already changed)
            if ($leaveApplied->getStatusId() === $this) {
                $leaveApplied->setStatusId(null);
            }
        }

        return $this;
    }

}
