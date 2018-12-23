<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArmaRepository")
 */
class Arma
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $material;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $danio;

    /**
     * @ORM\Column(type="integer")
     */
    private $fue;

    /**
     * @ORM\Column(type="integer")
     */
    private $des;

    /**
     * @ORM\Column(type="integer")
     */
    private $car;

    /**
     * @ORM\Column(type="integer")
     */
    private $bs;

    /**
     * @ORM\Column(type="integer")
     */
    private $pa;

    /**
     * @ORM\Column(type="integer")
     */
    private $mr;

    /**
     * @ORM\Column(type="integer")
     */
    private $p_salv;

    /**
     * @ORM\Column(type="integer")
     */
    private $p_rural;

    /**
     * @ORM\Column(type="integer")
     */
    private $p_peq;

    /**
     * @ORM\Column(type="integer")
     */
    private $p_gran;

    /**
     * @ORM\Column(type="integer")
     */
    private $manos;

    /**
     * @ORM\Column(type="integer")
     */
    private $tiempo_fav;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ef;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(string $material): self
    {
        $this->material = $material;

        return $this;
    }

    public function getDanio(): ?string
    {
        return $this->danio;
    }

    public function setDanio(string $danio): self
    {
        $this->danio = $danio;

        return $this;
    }

    public function getFue(): ?int
    {
        return $this->fue;
    }

    public function setFue(int $fue): self
    {
        $this->fue = $fue;

        return $this;
    }

    public function getDes(): ?int
    {
        return $this->des;
    }

    public function setDes(int $des): self
    {
        $this->des = $des;

        return $this;
    }

    public function getCar(): ?int
    {
        return $this->car;
    }

    public function setCar(int $car): self
    {
        $this->car = $car;

        return $this;
    }

    public function getBs(): ?int
    {
        return $this->bs;
    }

    public function setBs(int $bs): self
    {
        $this->bs = $bs;

        return $this;
    }

    public function getPa(): ?int
    {
        return $this->pa;
    }

    public function setPa(int $pa): self
    {
        $this->pa = $pa;

        return $this;
    }

    public function getMr(): ?int
    {
        return $this->mr;
    }

    public function setMr(int $mr): self
    {
        $this->mr = $mr;

        return $this;
    }

    public function getPSalv(): ?int
    {
        return $this->p_salv;
    }

    public function setPSalv(int $p_salv): self
    {
        $this->p_salv = $p_salv;

        return $this;
    }

    public function getPRural(): ?int
    {
        return $this->p_rural;
    }

    public function setPRural(int $p_rural): self
    {
        $this->p_rural = $p_rural;

        return $this;
    }

    public function getPPeq(): ?int
    {
        return $this->p_peq;
    }

    public function setPPeq(int $p_peq): self
    {
        $this->p_peq = $p_peq;

        return $this;
    }

    public function getPGran(): ?int
    {
        return $this->p_gran;
    }

    public function setPGran(int $p_gran): self
    {
        $this->p_gran = $p_gran;

        return $this;
    }

    public function getManos(): ?int
    {
        return $this->manos;
    }

    public function setManos(int $manos): self
    {
        $this->manos = $manos;

        return $this;
    }

    public function getTiempoFav(): ?int
    {
        return $this->tiempo_fav;
    }

    public function setTiempoFav(int $tiempo_fav): self
    {
        $this->tiempo_fav = $tiempo_fav;

        return $this;
    }

    public function getEf(): ?int
    {
        return $this->ef;
    }

    public function setEf(?int $ef): self
    {
        $this->ef = $ef;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getTf(): ?int
    {
        return $this->tf;
    }

    public function setTf(?int $tf): self
    {
        $this->tf = $tf;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
