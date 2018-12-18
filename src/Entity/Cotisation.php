<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotisation
 *
 * @ORM\Table(name="cotisation")
 * @ORM\Entity
 */
class Cotisation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_adherent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdherent;

    /**
     * @var int
     *
     * @ORM\Column(name="type_cotisation", type="integer", nullable=false)
     */
    private $typeCotisation;

    /**
     * @var int
     *
     * @ORM\Column(name="datedebutcoti", type="integer", nullable=false)
     */
    private $datedebutcoti;

    /**
     * @var int
     *
     * @ORM\Column(name="datefincoti", type="integer", nullable=false)
     */
    private $datefincoti;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="montantrestant", type="integer", nullable=false)
     */
    private $montantrestant;

    public function getIdAdherent(): ?int
    {
        return $this->idAdherent;
    }

    public function getTypeCotisation(): ?int
    {
        return $this->typeCotisation;
    }

    public function setTypeCotisation(int $typeCotisation): self
    {
        $this->typeCotisation = $typeCotisation;

        return $this;
    }

    public function getDatedebutcoti(): ?int
    {
        return $this->datedebutcoti;
    }

    public function setDatedebutcoti(int $datedebutcoti): self
    {
        $this->datedebutcoti = $datedebutcoti;

        return $this;
    }

    public function getDatefincoti(): ?int
    {
        return $this->datefincoti;
    }

    public function setDatefincoti(int $datefincoti): self
    {
        $this->datefincoti = $datefincoti;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getMontantrestant(): ?int
    {
        return $this->montantrestant;
    }

    public function setMontantrestant(int $montantrestant): self
    {
        $this->montantrestant = $montantrestant;

        return $this;
    }


}
