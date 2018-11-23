<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Arma;
use Symfony\Component\HttpFoundation\Request;

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
        $repository = $this->getDoctrine()->getRepository(Arma::class);
        $armas= $repository->findAll();

        //dump($armas);die;
        return $this->render('arma/listadoArmas.html.twig', [
            'controller_name' => 'ArmaController',
            'armas'           =>  $armas
        ]);
    } 
    /**
     * @Route("/saveArma", name="save_tabla")
     */
    public function guardarArma(Request $request){
        $entity = $this->getDoctrine()->getManager();
        $arma = new Arma();      
         $arma->setTipoArmaId($request->request->get('tipo'));
        $arma->setDes($request->request->get('des'));
        $arma->setCar($request->request->get('car'));
        $arma->setFue($request->request->get('fue'));
        $arma->setMr($request->request->get('mr'));
        $arma->setPa($request->request->get('pa'));
        $arma->setBs($request->request->get('danioBase')); 
        $arma->setDanio($request->request->get('danio'));
        $arma->setMaterialId($request->request->get('material'));
        $arma->setCantManos($request->request->get('manos'));
        $arma->setPrecio($request->request->get('precio'));
        $entity->persist($arma);
        $entity->flush();
        return new Response($this->render('arma/listadoArmas.html.twig', [
            'controller_name' => 'ArmaController',
        ]));
    }   
    /**
     * @Route("/traerTodo", name="get_all_weapon")
     */
    public function traerTodo(Request $request){
        
    }    
}
