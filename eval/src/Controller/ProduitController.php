<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Produit;
use App\Form\ProduitFormType;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

            // Service Doctrine (permet d'interagir avec la BDD)
           
            $produit = new Produit();
            $form = $this->createForm(ProduitFormType::class, $produit);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($produit);
                $em->flush();
                $this->addFlash('success', 'Produit ajouté');
            }
            // Récupère tous les produits
            $produits = $em->getRepository(Produit::class)->findAll();
            return $this->render('produit/index.html.twig', [
                'produits' => $produits,
                'formProduit' => $form->createView(),
            ]);
    }
}
