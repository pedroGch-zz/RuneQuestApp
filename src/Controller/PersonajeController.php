<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Arma;
use App\Entity\MaterialTipo;
use App\Entity\TipoArma;
use Symfony\Component\HttpFoundation\Request;

class PersonajeController extends AbstractController
{
    
    /**
     * @Route("/nuevoPersonaje", name="personaje_nuevo", methods={"GET", "POST"})
     */
    public function personaje_nuevo()
    {
        return $this->render('personaje/newPersonaje.html.twig');
    }
}
