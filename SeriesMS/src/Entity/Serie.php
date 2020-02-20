<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SerieRepository")
 */
class Serie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomSerie;

    /**
     * @ORM\Column(type="date")
     */
    private $anneeDebutSerie;

    /**
     * @ORM\Column(type="date")
     */
    private $anneeFinSerie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $afficheSerie;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreSaisonsSerie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorieSerie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSerie(): ?string
    {
        return $this->nomSerie;
    }

    public function setNomSerie(string $nomSerie): self
    {
        $this->nomSerie = $nomSerie;

        return $this;
    }

    public function getAnneeDebutSerie(): ?\DateTimeInterface
    {
        return $this->anneeDebutSerie;
    }

    public function setAnneeDebutSerie(\DateTimeInterface $anneeDebutSerie): self
    {
        $this->anneeDebutSerie = $anneeDebutSerie;

        return $this;
    }

    public function getAnneeFinSerie(): ?\DateTimeInterface
    {
        return $this->anneeFinSerie;
    }

    public function setAnneeFinSerie(\DateTimeInterface $anneeFinSerie): self
    {
        $this->anneeFinSerie = $anneeFinSerie;

        return $this;
    }

    public function getAfficheSerie(): ?string
    {
        return $this->afficheSerie;
    }

    public function setAfficheSerie(string $afficheSerie): self
    {
        $this->afficheSerie = $afficheSerie;

        return $this;
    }

    public function getNombreSaisonsSerie(): ?int
    {
        return $this->nombreSaisonsSerie;
    }

    public function setNombreSaisonsSerie(int $nombreSaisonsSerie): self
    {
        $this->nombreSaisonsSerie = $nombreSaisonsSerie;

        return $this;
    }

    public function getCategorieSerie(): ?string
    {
        return $this->categorieSerie;
    }

    public function setCategorieSerie(string $categorieSerie): self
    {
        $this->categorieSerie = $categorieSerie;

        return $this;
    }
}
