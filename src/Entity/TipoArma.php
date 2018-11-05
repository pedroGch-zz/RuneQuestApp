<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoArmaRepository")
 */
class TipoArma
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
    private $nombreTipo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTipo(): ?string
    {
        return $this->nombreTipo;
    }

    public function setNombreTipo(string $nombreTipo): self
    {
        $this->nombreTipo = $nombreTipo;

        return $this;
    }
}
