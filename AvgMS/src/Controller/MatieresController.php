<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Matiere;
use App\Form\MatiereFormType;

class MatieresController extends AbstractController
{
    /**
     * @Route("/matieres", name="matieres")
     */
    public function index(Request $request)
    {
    
            // Service Doctrine (permet d'interagir avec la BDD)
            $em = $this->getDoctrine()->getManager();
            $matiere = new Matiere();
            $form = $this->createForm(MatiereFormType::class, $matiere);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($matiere);
                $em->flush();
                $this->addFlash('success', 'Matière ajoutée');
            }
            // Récupère toutes les matières
            $matieres = $em->getRepository(Matiere::class)->findAll();
            return $this->render('matieres/index.html.twig', [
                'matieres' => $matieres,
                'formMatiere' => $form->createView()
            ]);

    }
}
