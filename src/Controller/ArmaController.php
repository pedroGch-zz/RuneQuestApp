<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ArmaController extends AbstractController
{
    /**
     * @Route("/arma", name="arma")
     */
    public function index()
    {
        return $this->render('arma/index.html.twig', [
            'controller_name' => 'ArmaController',
        ]);
    }
    /**
     * @Route("/nuevaArma", name="arma_nueva")
     */
    public function arma_nueva()
    {
        return $this->render('arma/newArma.html.twig', [
            'controller_name' => 'ArmaController',
        ]);
    } 
    /**
     * @Route("/listaArma", name="arma_tabla")
     */
    public function arma_tabla()
    {
        return $this->render('arma/listadoArmas.html.twig', [
            'controller_name' => 'ArmaController',
        ]);
    }    
}
