<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Categorie;
use App\Form\FormCategorieType;


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(Request $request)
    {
    
            // Service Doctrine (permet d'interagir avec la BDD)
            $em = $this->getDoctrine()->getManager();
            $categorie = new Categorie();
            $form = $this->createForm(FormCategorieType::class, $categorie);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($categorie);
                $em->flush();
                $this->addFlash('success', 'Catégorie ajoutée');
            }
            // Récupère toutes les catégories
            $categories = $em->getRepository(Categorie::class)->findAll();
            return $this->render('accueil/index.html.twig', [
                'categories' => $categories,
                'formCategorie' => $form->createView()
            ]);
    
    }

     /**
     * @Route("/ficheCategorie", name="ficheCategorie")
     */
    public function routeToFicheCategorie()
    {
        return $this->render('ficheCategorie/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

}