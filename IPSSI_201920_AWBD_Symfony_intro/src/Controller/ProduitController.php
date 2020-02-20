<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="produit")
     */
    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($produit);
            $em->flush();

            $this->addFlash('success', 'Produit ajouté');
        }

        $produits = $em->getRepository(Produit::class)->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="produit_edit")
     */
    public function edit(Request $request, Produit $produit=null){

        if($produit != null){
            // J'ai réussi à récupérer le produit demandé

            $form = $this->createForm(ProduitType::class, $produit);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($produit);
                $em->flush();

                $this->addFlash('success', 'Produit modifié');
            }

            return $this->render('produit/edit.html.twig', [
                'produit' => $produit,
                'form' => $form->createView()
            ]);
        }

        $this->addFlash('danger', 'Produit introuvable');

        // On n'a pas réussi à récupérer le produit demandé
        return $this->redirectToRoute('produit');

    }

    /**
     * @Route("/delete/{id}", name="produit_delete")
     */
    public function delete(Produit $produit=null){
        if($produit != null){
            // On a trouvé le produit, on va le supprimer
            $em = $this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();

            $this->addFlash('warning', 'Produit supprimé');
        }
        else{
            $this->addFlash('danger', 'Produit introuvable');
        }
        
        return $this->redirectToRoute('produit');
    }
}
