<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeTypeRepository")
 */
class EmployeeType
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
    private $employee_type_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EmployeeDetail", mappedBy="employee_type")
     */
    private $employeeDetails;

    public function __construct()
    {
        $this->employeeDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeTypeId(): ?int
    {
        return $this->employee_type_id;
    }

    public function setEmployeeTypeId(int $employee_type_id): self
    {
        $this->employee_type_id = $employee_type_id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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
     * @return Collection|EmployeeDetail[]
     */
    public function getEmployeeDetails(): Collection
    {
        return $this->employeeDetails;
    }

    public function addEmployeeDetail(EmployeeDetail $employeeDetail): self
    {
        if (!$this->employeeDetails->contains($employeeDetail)) {
            $this->employeeDetails[] = $employeeDetail;
            $employeeDetail->setEmployeeType($this);
        }

        return $this;
    }

    public function removeEmployeeDetail(EmployeeDetail $employeeDetail): self
    {
        if ($this->employeeDetails->contains($employeeDetail)) {
            $this->employeeDetails->removeElement($employeeDetail);
            // set the owning side to null (unless already changed)
            if ($employeeDetail->getEmployeeType() === $this) {
                $employeeDetail->setEmployeeType(null);
            }
        }

        return $this;
    }
}
