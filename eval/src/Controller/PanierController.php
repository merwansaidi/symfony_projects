<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Panier;
use App\Form\PanierFormType;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class PanierController extends AbstractController
{
    /**
     * @Route("/", name="panier")
     */

    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

            // Service Doctrine (permet d'interagir avec la BDD)
           
            $panier = new Panier();
            $form = $this->createForm(PanierFormType::class, $panier);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($panier);
                $em->flush();
                $this->addFlash('success', 'Produit ajouté');
            }
            // Récupère tous les paniers
            $paniers = $em->getRepository(Panier::class)->findAll();
            return $this->render('panier/index.html.twig', [
                'paniers' => $paniers,
                // 'formPanier' => $form->createView(),
            ]);
    }


}
