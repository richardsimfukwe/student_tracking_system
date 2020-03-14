<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificate
 *
 * @ORM\Table(name="certificate", indexes={@ORM\Index(name="fk_certificate_certificate_type1_idx", columns={"certificate_type_id"}), @ORM\Index(name="fk_certificate_person1_idx", columns={"person_person_id"})})
 * @ORM\Entity
 */
class Certificate
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
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="certificate_code", type="string", length=25, nullable=false)
     */
    private $certificateCode;

    /**
     * @var \CertificateType
     *
     * @ORM\ManyToOne(targetEntity="CertificateType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certificate_type_id", referencedColumnName="id")
     * })
     */
    private $certificateType;

    /**
     * @var \Person
     *
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_person_id", referencedColumnName="person_id")
     * })
     */
    private $personPerson;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCertificateCode(): ?string
    {
        return $this->certificateCode;
    }

    public function setCertificateCode(string $certificateCode): self
    {
        $this->certificateCode = $certificateCode;

        return $this;
    }

    public function getCertificateType(): ?CertificateType
    {
        return $this->certificateType;
    }

    public function setCertificateType(?CertificateType $certificateType): self
    {
        $this->certificateType = $certificateType;

        return $this;
    }

    public function getPersonPerson(): ?Person
    {
        return $this->personPerson;
    }

    public function setPersonPerson(?Person $personPerson): self
    {
        $this->personPerson = $personPerson;

        return $this;
    }


}
