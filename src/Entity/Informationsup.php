<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informationsup
 *
 * @ORM\Table(name="informationsup")
 * @ORM\Entity
 */
class Informationsup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_infosup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInfosup;

    /**
     * @var string
     *
     * @ORM\Column(name="type_mailing", type="string", length=100, nullable=false)
     */
    private $typeMailing;

    /**
     * @var string
     *
     * @ORM\Column(name="accident", type="string", length=100, nullable=false)
     */
    private $accident;

    /**
     * @var string
     *
     * @ORM\Column(name="droitimage", type="string", length=100, nullable=false)
     */
    private $droitimage;

    /**
     * @var string
     *
     * @ORM\Column(name="infocomplem", type="string", length=100, nullable=false)
     */
    private $infocomplem;

    /**
     * @var string
     *
     * @ORM\Column(name="assurance", type="string", length=100, nullable=false)
     */
    private $assurance;

    /**
     * @var int
     *
     * @ORM\Column(name="optionassurance", type="integer", nullable=false)
     */
    private $optionassurance;

    /**
     * @var int
     *
     * @ORM\Column(name="type_paiement", type="integer", nullable=false)
     */
    private $typePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_technique", type="string", length=100, nullable=false)
     */
    private $niveauTechnique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="demande_facture", type="string", length=100, nullable=false)
     */
    private $demandeFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="pass_jeune", type="string", length=100, nullable=false)
     */
    private $passJeune;

    /**
     * @var string
     *
     * @ORM\Column(name="dossier_complet", type="string", length=100, nullable=false)
     */
    private $dossierComplet;

    public function getIdInfosup(): ?int
    {
        return $this->idInfosup;
    }

    public function getTypeMailing(): ?string
    {
        return $this->typeMailing;
    }

    public function setTypeMailing(string $typeMailing): self
    {
        $this->typeMailing = $typeMailing;

        return $this;
    }

    public function getAccident(): ?string
    {
        return $this->accident;
    }

    public function setAccident(string $accident): self
    {
        $this->accident = $accident;

        return $this;
    }

    public function getDroitimage(): ?string
    {
        return $this->droitimage;
    }

    public function setDroitimage(string $droitimage): self
    {
        $this->droitimage = $droitimage;

        return $this;
    }

    public function getInfocomplem(): ?string
    {
        return $this->infocomplem;
    }

    public function setInfocomplem(string $infocomplem): self
    {
        $this->infocomplem = $infocomplem;

        return $this;
    }

    public function getAssurance(): ?string
    {
        return $this->assurance;
    }

    public function setAssurance(string $assurance): self
    {
        $this->assurance = $assurance;

        return $this;
    }

    public function getOptionassurance(): ?int
    {
        return $this->optionassurance;
    }

    public function setOptionassurance(int $optionassurance): self
    {
        $this->optionassurance = $optionassurance;

        return $this;
    }

    public function getTypePaiement(): ?int
    {
        return $this->typePaiement;
    }

    public function setTypePaiement(int $typePaiement): self
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    public function getNiveauTechnique(): ?string
    {
        return $this->niveauTechnique;
    }

    public function setNiveauTechnique(string $niveauTechnique): self
    {
        $this->niveauTechnique = $niveauTechnique;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDemandeFacture(): ?string
    {
        return $this->demandeFacture;
    }

    public function setDemandeFacture(string $demandeFacture): self
    {
        $this->demandeFacture = $demandeFacture;

        return $this;
    }

    public function getPassJeune(): ?string
    {
        return $this->passJeune;
    }

    public function setPassJeune(string $passJeune): self
    {
        $this->passJeune = $passJeune;

        return $this;
    }

    public function getDossierComplet(): ?string
    {
        return $this->dossierComplet;
    }

    public function setDossierComplet(string $dossierComplet): self
    {
        $this->dossierComplet = $dossierComplet;

        return $this;
    }


}
