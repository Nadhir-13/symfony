<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationH
 *
 * @ORM\Table(name="reservation_h", indexes={@ORM\Index(name="id_cham", columns={"id_cham"}), @ORM\Index(name="id_client", columns={"id"}), @ORM\Index(name="id_facture_hot", columns={"id_facture_hot"})})
 * @ORM\Entity
 */
class ReservationH
{
    /**
     * @var int
     *
     * @ORM\Column(name="id-rh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rh", type="date", nullable=false)
     */
    private $dateRh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_rh", type="time", nullable=false)
     */
    private $heureRh;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \FactureHot
     *
     * @ORM\ManyToOne(targetEntity="FactureHot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_facture_hot", referencedColumnName="id_facture_hot")
     * })
     */
    private $idFactureHot;

    /**
     * @var \Chambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cham", referencedColumnName="id_cham")
     * })
     */
    private $idCham;

    public function getIdRh(): ?int
    {
        return $this->idRh;
    }

    public function getDateRh(): ?\DateTimeInterface
    {
        return $this->dateRh;
    }

    public function setDateRh(\DateTimeInterface $dateRh): self
    {
        $this->dateRh = $dateRh;

        return $this;
    }

    public function getHeureRh(): ?\DateTimeInterface
    {
        return $this->heureRh;
    }

    public function setHeureRh(\DateTimeInterface $heureRh): self
    {
        $this->heureRh = $heureRh;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getId(): ?User
    {
        return $this->id;
    }

    public function setId(?User $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdFactureHot(): ?FactureHot
    {
        return $this->idFactureHot;
    }

    public function setIdFactureHot(?FactureHot $idFactureHot): self
    {
        $this->idFactureHot = $idFactureHot;

        return $this;
    }

    public function getIdCham(): ?Chambre
    {
        return $this->idCham;
    }

    public function setIdCham(?Chambre $idCham): self
    {
        $this->idCham = $idCham;

        return $this;
    }


}
