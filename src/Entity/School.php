<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 *
 * @ORM\Table(name="school")
 * @ORM\Entity
 */
class School
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
     * @ORM\Column(name="founders", type="string", length=25, nullable=false)
     */
    private $founders;

    /**
     * @var int
     *
     * @ORM\Column(name="f_date", type="integer", nullable=false)
     */
    private $fDate;

    /**
     * @var int
     *
     * @ORM\Column(name="population", type="integer", nullable=false)
     */
    private $population;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFounders(): ?string
    {
        return $this->founders;
    }

    public function setFounders(string $founders): self
    {
        $this->founders = $founders;

        return $this;
    }

    public function getFDate(): ?int
    {
        return $this->fDate;
    }

    public function setFDate(int $fDate): self
    {
        $this->fDate = $fDate;

        return $this;
    }

    public function getPopulation(): ?int
    {
        return $this->population;
    }

    public function setPopulation(int $population): self
    {
        $this->population = $population;

        return $this;
    }


}
