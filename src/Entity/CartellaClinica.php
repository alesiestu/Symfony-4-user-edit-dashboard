<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CartellaClinicaRepository")
 */
class CartellaClinica
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
    private $paziente;

    /**
     * @ORM\Column(type="integer")
     */
    private $ospedale;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $file1;


  

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codiceapi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaziente(): ?int
    {
        return $this->paziente;
    }

    public function setPaziente(int $paziente): self
    {
        $this->paziente = $paziente;

        return $this;
    }

    public function getOspedale(): ?int
    {
        return $this->ospedale;
    }

    public function setOspedale(int $ospedale): self
    {
        $this->ospedale = $ospedale;

        return $this;
    }

    public function getFile1(): ?string
    {
        return $this->file1;
    }

    public function setFile1(?string $file1): self
    {
        $this->file1 = $file1;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCodiceapi(): ?int
    {
        return $this->codiceapi;
    }

    public function setCodiceapi(?int $codiceapi): self
    {
        $this->codiceapi = $codiceapi;

        return $this;
    }
}
