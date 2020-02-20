<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categorie")
 */
class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="categorie")
     */
    public function index(Request $request)
    {
        // Service Doctrine (permet d'interagir avec la BDD)
        $em = $this->getDoctrine()->getManager();

        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($categorie);
            $em->flush();

            $this->addFlash('success', 'Catégorie ajoutée');
        }

        // Récupère toutes les catégories
        $categories = $em->getRepository(Categorie::class)->findAll();

        return $this->render('categorie/index.html.twig', [
            'categories' => $categories,
            'categorieForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="categorie_edit")
     */
    public function edit(Request $request, Categorie $categorie=null){
        // Si on a réussit à récupérer une catégorie
        if($categorie != null){
            $form = $this->createForm(CategorieType::class, $categorie);

            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($categorie);
                $em->flush();

                $this->addFlash('success', 'Catégorie modifiée');
            }

            return $this->render('categorie/edit.html.twig', [
                'categorie' => $categorie,
                'form' => $form->createView()
            ]);
        }

        $this->addFlash('danger', 'Catégorie introuvable');
        // On n'a pas réussit à récupérer de catégorie, on redirige l'internaute vers la liste des catégories
        return $this->redirectToRoute('categorie');
    }

    /**
     * @Route("/delete/{id}", name="categorie_delete")
     */
    public function delete(Categorie $categorie=null){
        if($categorie != null){
            // On a trouvé la catégorie, on va la supprimer
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorie);
            $em->flush();

            $this->addFlash('warning', 'Catégorie supprimée');
        }
        else{
            $this->addFlash('danger', 'Catégorie introuvable');
        }
        
        return $this->redirectToRoute('categorie');
    }
}
