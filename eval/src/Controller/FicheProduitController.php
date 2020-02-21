<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Panier;
use App\Form\PanierFormType;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class FicheProduitController extends AbstractController
{
    /**
     * @Route("/ficheProduit", name="ficheProduit")
     */
    public function index(Request $request)
    {
            // Service Doctrine (permet d'interagir avec la BDD)

            $em = $this->getDoctrine()->getManager();
            $panier = new Panier();
            $form = $this->createForm(PanierFormType::class, $panier);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($panier);
                $em->flush();
                $this->addFlash('success', 'Produit ajouté au panier');
            }
            
            $paniers = $em->getRepository(Panier::class)->findAll();
            return $this->render('ficheProduit/index.html.twig', [
                'paniers' => $paniers,
                'formPanier' => $form->createView(),
            ]);
            
            // $produits = $em->getRepository(Produit::class)->findAll();
            // return $this->render('ficheProduit/index.html.twig', [
            //     'produits' => $produits,
            //     'formPanier' => $form->createView(),
            // ]);
    }
}
