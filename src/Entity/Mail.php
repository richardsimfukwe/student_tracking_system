<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mail", indexes={@ORM\Index(name="fk_mail_person1_idx", columns={"person_id"})})
 * @ORM\Entity
 */
class Mail
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
     * @ORM\Column(name="sender_id", type="string", length=25, nullable=false)
     */
    private $senderId;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver_id", type="string", length=25, nullable=false)
     */
    private $receiverId;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Person
     *
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     * })
     */
    private $person;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSenderId(): ?string
    {
        return $this->senderId;
    }

    public function setSenderId(string $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    public function getReceiverId(): ?string
    {
        return $this->receiverId;
    }

    public function setReceiverId(string $receiverId): self
    {
        $this->receiverId = $receiverId;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function setPerson(?Person $person): self
    {
        $this->person = $person;

        return $this;
    }


}
