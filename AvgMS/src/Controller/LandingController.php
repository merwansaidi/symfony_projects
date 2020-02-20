<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Note;
use App\Form\NoteFormType;
use Doctrine\ORM\Query\ResultSetMapping;



class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */
    public function index(Request $request)
    {
    
            // Service Doctrine (permet d'interagir avec la BDD)
            $em = $this->getDoctrine()->getManager();
            $note = new Note();
            $form = $this->createForm(NoteFormType::class, $note);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($note);
                $em->flush();
                $this->addFlash('success', 'Note ajoutée');
            }
            // Récupère toutes les catégories
            $notes = $em->getRepository(Note::class)->findAll();
            return $this->render('landing/index.html.twig', [
                'notes' => $notes,
                'formNote' => $form->createView()
            ]);

                
$rsm = new ResultSetMapping();
// build rsm here

$query = $entityManager->createNativeQuery('SELECT id, sum(valeur*coeff)/sum(coeff) as moyenne FROM note group by id', $rsm);
$query->setParameter(1, 'moyenne');

$avg = $query->getResult();

            

    }





}
