<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchoolData
 *
 * @ORM\Table(name="school_data", indexes={@ORM\Index(name="fk_school_data_school_data_type1_idx", columns={"school_data_type_id"})})
 * @ORM\Entity
 */
class SchoolData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", length=0, nullable=false)
     */
    private $data;

    /**
     * @var \SchoolDataType
     *
     * @ORM\ManyToOne(targetEntity="SchoolDataType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="school_data_type_id", referencedColumnName="id")
     * })
     */
    private $schoolDataType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getSchoolDataType(): ?SchoolDataType
    {
        return $this->schoolDataType;
    }

    public function setSchoolDataType(?SchoolDataType $schoolDataType): self
    {
        $this->schoolDataType = $schoolDataType;

        return $this;
    }


}
