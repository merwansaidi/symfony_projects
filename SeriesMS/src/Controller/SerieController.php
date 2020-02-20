<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Serie;
use App\Form\FormSeriesType;

class SerieController extends AbstractController
{
    /**
     * @Route("/serie", name="serie")
     */

    public function index(Request $request)
    {
    
            // Service Doctrine (permet d'interagir avec la BDD)
            $em = $this->getDoctrine()->getManager();
            $serie = new Serie();
            $form = $this->createForm(FormSeriesType::class, $serie);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($serie);
                $em->flush();
                $this->addFlash('success', 'Série ajoutée');
            }
            // Récupère toutes les catégories
            $series = $em->getRepository(Serie::class)->findAll();
            return $this->render('serie/index.html.twig', [
                'series' => $series,
                'formSerie' => $form->createView()
            ]);
    
    } 
    // public function index()
    // {
    //     return $this->render('serie/index.html.twig', [
    //         'controller_name' => 'SerieController',
    //     ]);
    // }

     /**
     * @Route("/ficheSerie", name="ficheSerie")
     */
    public function routeToFicheSerie()
    {
        return $this->render('ficheSerie/index.html.twig', [
            'controller_name' => 'SerieController',
        ]);
    }

    
}
