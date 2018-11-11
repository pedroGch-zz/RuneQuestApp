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
     * @ORM\Column(type="integer")
     */
    private $precio;

    /**
     * @ORM\Column(type="integer")
     */
    private $cant_manos;

    /**
     * @ORM\Column(type="integer")
     */
    private $material_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $danio;

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
    private $fue;

    /**
     * @ORM\Column(type="integer")
     */
    private $car;

    /**
     * @ORM\Column(type="integer")
     */
    private $des;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getCantManos(): ?int
    {
        return $this->cant_manos;
    }

    public function setCantManos(int $cant_manos): self
    {
        $this->cant_manos = $cant_manos;

        return $this;
    }

    public function getMaterialId(): ?int
    {
        return $this->material_id;
    }

    public function setMaterialId(int $material_id): self
    {
        $this->material_id = $material_id;

        return $this;
    }

    public function getDanio(): ?int
    {
        return $this->danio;
    }

    public function setDanio(int $danio): self
    {
        $this->danio = $danio;

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

    public function getFue(): ?int
    {
        return $this->fue;
    }

    public function setFue(int $fue): self
    {
        $this->fue = $fue;

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

    public function getDes(): ?int
    {
        return $this->des;
    }

    public function setDes(int $des): self
    {
        $this->des = $des;

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
}
