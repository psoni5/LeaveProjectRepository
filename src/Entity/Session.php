<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SessionRepository")
 */
class Session
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
    private $session_type;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LeaveApplied", mappedBy="start_session_id")
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

    public function getSessionType(): ?string
    {
        return $this->session_type;
    }

    public function setSessionType(string $session_type): self
    {
        $this->session_type = $session_type;

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
            $leaveApplied->setStartSessionId($this);
        }

        return $this;
    }

    public function removeLeaveApplied(LeaveApplied $leaveApplied): self
    {
        if ($this->leaveApplieds->contains($leaveApplied)) {
            $this->leaveApplieds->removeElement($leaveApplied);
            // set the owning side to null (unless already changed)
            if ($leaveApplied->getStartSessionId() === $this) {
                $leaveApplied->setStartSessionId(null);
            }
        }

        return $this;
    }
}
