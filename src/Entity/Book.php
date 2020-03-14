<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 *
 * @ORM\Table(name="book", indexes={@ORM\Index(name="fk_book_book_type1_idx", columns={"book_type_id"})})
 * @ORM\Entity
 */
class Book
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
     * @ORM\Column(name="description", type="string", length=25, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="author_name", type="string", length=25, nullable=false)
     */
    private $authorName;

    /**
     * @var \BookType
     *
     * @ORM\ManyToOne(targetEntity="BookType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book_type_id", referencedColumnName="id")
     * })
     */
    private $bookType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getBookType(): ?BookType
    {
        return $this->bookType;
    }

    public function setBookType(?BookType $bookType): self
    {
        $this->bookType = $bookType;

        return $this;
    }


}
