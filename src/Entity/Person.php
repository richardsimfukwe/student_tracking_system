<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person", indexes={@ORM\Index(name="fk_person_department1_idx", columns={"department_id"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="fk_person_program1_idx", columns={"program_id"}), @ORM\Index(name="fk_person_person_type_idx", columns={"person_type_id"})})
 * @ORM\Entity
 */
class Person
{
    /**
     * @var string
     *
     * @ORM\Column(name="person_id", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $personId;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fname", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $fname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lname", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $lname = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $address = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile_no", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $mobileNo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="postcode", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $postcode = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="person_image", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $personImage = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $gender = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="social_url", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $socialUrl = 'NULL';

    /**
     * @var \Department
     *
     * @ORM\ManyToOne(targetEntity="Department")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="department_id", referencedColumnName="id")
     * })
     */
    private $department;

    /**
     * @var \PersonType
     *
     * @ORM\ManyToOne(targetEntity="PersonType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_type_id", referencedColumnName="id")
     * })
     */
    private $personType;

    /**
     * @var \Program
     *
     * @ORM\ManyToOne(targetEntity="Program")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="program_id", referencedColumnName="id")
     * })
     */
    private $program;

    public function getPersonId(): ?string
    {
        return $this->personId;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getFname(): ?string
    {
        return $this->fname;
    }

    public function setFname(?string $fname): self
    {
        $this->fname = $fname;

        return $this;
    }

    public function getLname(): ?string
    {
        return $this->lname;
    }

    public function setLname(?string $lname): self
    {
        $this->lname = $lname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getMobileNo(): ?string
    {
        return $this->mobileNo;
    }

    public function setMobileNo(?string $mobileNo): self
    {
        $this->mobileNo = $mobileNo;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getPersonImage()
    {
        return $this->personImage;
    }

    public function setPersonImage($personImage): self
    {
        $this->personImage = $personImage;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSocialUrl(): ?string
    {
        return $this->socialUrl;
    }

    public function setSocialUrl(?string $socialUrl): self
    {
        $this->socialUrl = $socialUrl;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getPersonType(): ?PersonType
    {
        return $this->personType;
    }

    public function setPersonType(?PersonType $personType): self
    {
        $this->personType = $personType;

        return $this;
    }

    public function getProgram(): ?Program
    {
        return $this->program;
    }

    public function setProgram(?Program $program): self
    {
        $this->program = $program;

        return $this;
    }


}
