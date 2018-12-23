<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Arma;
use App\Entity\MaterialTipo;
use App\Entity\TipoArma;
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
        $TipoArma      = [];
        $MaterialTipo  = [];
        $repository    = $this->getDoctrine()->getRepository(MaterialTipo::class);
        $MaterialTipo  = $repository->findAll();
        $repository    = $this->getDoctrine()->getRepository(TipoArma::class);
        $TipoArma      = $repository->findAll();
        return $this->render('arma/newArma.html.twig', [
                             'controller_name' => 'ArmaController',
                             'tipos'           => $TipoArma,
                             'materiales'      => $MaterialTipo
        ]);
         //return $this->redirectToRoute('arma_tabla');
    } 
    /**
     * @Route("/listaArma", name="arma_tabla")
     */
    public function arma_tabla()
    {  
        $repository = $this->getDoctrine()->getRepository(Arma::class);
        $armas      = $repository->findAll();

        
        $repoMaterial = $this->getDoctrine()->getRepository(MaterialTipo::class);
        $reposTipo    = $this->getDoctrine()->getRepository(TipoArma::class);
        foreach ($armas as $indice => $arma) {
            $material   = $repoMaterial->find($arma->getMaterial());        
            $tipo       = $reposTipo->find($arma->getTipo());
            $armas[$indice]->setMaterial($material->getMaterial());
            $armas[$indice]->setTipo($tipo->getNombreTipo());
        }
        
        
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

        $arma->setNombre($request->request->get('nombre'));
        $arma->setTipo($request->request->get('tipo'));
        $arma->setMaterial($request->request->get('material'));
        $arma->setDes($request->request->get('des'));
        $arma->setCar($request->request->get('car'));
        $arma->setFue($request->request->get('fue'));
        $arma->setMr($request->request->get('mr'));
        $arma->setPa($request->request->get('pa'));
        $arma->setBs($request->request->get('danioBase')); 
        $arma->setDanio($request->request->get('danio'));
        $arma->setManos($request->request->get('manos'));

        //seteo de los costes de un arma
        $arma->setPSalv($request->request->get('psalv'));
        $arma->setPRural($request->request->get('prural'));
        $arma->setPPeq($request->request->get('ppque'));
        $arma->setPGran($request->request->get('pgrand'));
        $arma->setTiempoFav($request->request->get('tfav'));

        //alcance de las armas    
        $arma->setEf($request->request->get('ef'));
        $arma->setMax($request->request->get('am'));
        $arma->setTf($request->request->get('tf'));

        $entity->persist($arma);
        $entity->flush();
        return $this->redirectToRoute('arma_tabla');
        
    }   
    /**
     * @Route("/selectTypeCraft", name="selectTypeCraft")
     */
    public function selectTypeCraft(Request $request){
        $craft = $request->request->get('objectToCraft'); 
        return $this->redirectToRoute($craft);
    }    
    /**
     * @Route("/creartor", name="creartor")
     */
    public function creartor(Request $request){
        $craft = $request->request; //harcodear este dato arma_nueva
        return $this->render('arma/seleccionar_creador.html.twig', [
            'controller_name' => 'ArmaController',
        ]);
    }
}
