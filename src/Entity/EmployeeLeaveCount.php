<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeLeaveCountRepository")
 */
class EmployeeLeaveCount
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
     * @ORM\Column(type="float")
     */
    private $gl_occupied;

    /**
     * @ORM\Column(type="float")
     */
    private $gl_total;

    /**
     * @ORM\Column(type="float")
     */
    private $pl_occupied;

    /**
     * @ORM\Column(type="float")
     */
    private $pl_total;

    /**
     * @ORM\Column(type="integer")
     */
    private $my_day_occupied;

    /**
     * @ORM\Column(type="integer")
     */
    private $my_day_total;

    /**
     * @ORM\Column(type="float")
     */
    private $compenstary_leave_occupied;

    /**
     * @ORM\Column(type="float")
     */
    private $compenstary_leave_total;

    /**
     * @ORM\Column(type="float")
     */
    private $loss_of_pay;

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

    public function getGlOccupied(): ?float
    {
        return $this->gl_occupied;
    }

    public function setGlOccupied(float $gl_occupied): self
    {
        $this->gl_occupied = $gl_occupied;

        return $this;
    }

    public function getGlTotal(): ?float
    {
        return $this->gl_total;
    }

    public function setGlTotal(float $gl_total): self
    {
        $this->gl_total = $gl_total;

        return $this;
    }

    public function getPlOccupied(): ?float
    {
        return $this->pl_occupied;
    }

    public function setPlOccupied(float $pl_occupied): self
    {
        $this->pl_occupied = $pl_occupied;

        return $this;
    }

    public function getPlTotal(): ?float
    {
        return $this->pl_total;
    }

    public function setPlTotal(float $pl_total): self
    {
        $this->pl_total = $pl_total;

        return $this;
    }

    public function getMyDayOccupied(): ?int
    {
        return $this->my_day_occupied;
    }

    public function setMyDayOccupied(int $my_day_occupied): self
    {
        $this->my_day_occupied = $my_day_occupied;

        return $this;
    }

    public function getMyDayTotal(): ?int
    {
        return $this->my_day_total;
    }

    public function setMyDayTotal(int $my_day_total): self
    {
        $this->my_day_total = $my_day_total;

        return $this;
    }

    public function getCompenstaryLeaveOccupied(): ?float
    {
        return $this->compenstary_leave_occupied;
    }

    public function setCompenstaryLeaveOccupied(float $compenstary_leave_occupied): self
    {
        $this->compenstary_leave_occupied = $compenstary_leave_occupied;

        return $this;
    }

    public function getCompenstaryLeaveTotal(): ?float
    {
        return $this->compenstary_leave_total;
    }

    public function setCompenstaryLeaveTotal(float $compenstary_leave_total): self
    {
        $this->compenstary_leave_total = $compenstary_leave_total;

        return $this;
    }

    public function getLossOfPay(): ?float
    {
        return $this->loss_of_pay;
    }

    public function setLossOfPay(float $loss_of_pay): self
    {
        $this->loss_of_pay = $loss_of_pay;

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
