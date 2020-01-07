<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeaveAppliedRepository")
 */
class LeaveApplied
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
     * @ORM\ManyToOne(targetEntity="App\Entity\LeaveType", inversedBy="leaveApplieds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $leave_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reason_message;

    /**
     * @ORM\Column(type="date")
     */
    private $start_date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Session", inversedBy="leaveApplieds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $start_session_id;

    /**
     * @ORM\Column(type="date")
     */
    private $end_date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Session", inversedBy="leaveApplieds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $end_session;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EmployeeSkill", inversedBy="leaveApplieds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $manager_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LeaveStatus", inversedBy="leaveApplieds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $status_id;

    /**
     * @ORM\Column(type="float")
     */
    private $days;

    /**
     * @ORM\Column(type="float")
     */
    private $cut_gl;

    /**
     * @ORM\Column(type="float")
     */
    private $cut_pl;

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

    public function getEmpId(): ?int
    {
        return $this->emp_id;
    }

    public function setEmpId(int $emp_id): self
    {
        $this->emp_id = $emp_id;

        return $this;
    }

    public function getLeaveType(): ?LeaveType
    {
        return $this->leave_type;
    }

    public function setLeaveType(?LeaveType $leave_type): self
    {
        $this->leave_type = $leave_type;

        return $this;
    }

    public function getReasonMessage(): ?string
    {
        return $this->reason_message;
    }

    public function setReasonMessage(string $reason_message): self
    {
        $this->reason_message = $reason_message;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getStartSessionId(): ?Session
    {
        return $this->start_session_id;
    }

    public function setStartSessionId(?Session $start_session_id): self
    {
        $this->start_session_id = $start_session_id;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getEndSession(): ?Session
    {
        return $this->end_session;
    }

    public function setEndSession(?Session $end_session): self
    {
        $this->end_session = $end_session;

        return $this;
    }

    public function getManagerId(): ?EmployeeSkill
    {
        return $this->manager_id;
    }

    public function setManagerId(?EmployeeSkill $manager_id): self
    {
        $this->manager_id = $manager_id;

        return $this;
    }

    public function getStatusId(): ?LeaveStatus
    {
        return $this->status_id;
    }

    public function setStatusId(?LeaveStatus $status_id): self
    {
        $this->status_id = $status_id;

        return $this;
    }

    public function getDays(): ?float
    {
        return $this->days;
    }

    public function setDays(float $days): self
    {
        $this->days = $days;

        return $this;
    }

    public function getCutGl(): ?float
    {
        return $this->cut_gl;
    }

    public function setCutGl(float $cut_gl): self
    {
        $this->cut_gl = $cut_gl;

        return $this;
    }

    public function getCutPl(): ?float
    {
        return $this->cut_pl;
    }

    public function setCutPl(float $cut_pl): self
    {
        $this->cut_pl = $cut_pl;

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
