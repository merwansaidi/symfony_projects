<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Note;
use App\Form\NoteFormType;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;




class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // $rsm = new ResultSetMapping();
        // // build rsm here
        // $query = $em->createNativeQuery('select sum(moyenne)/sum(coefficient) as avg from (select t.id, sum(t.valeur*m.coefficient) as moyenne, m.coefficient from note t inner join matiere m on t.matiere_id = m.id group by t.id) w', $rsm);
        // // $query->setParameter(1, 'moyenne');
        // $avg = $query->getResult();
        // var_dump($avg);

        

            // Service Doctrine (permet d'interagir avec la BDD)
           
            $note = new Note();
            $form = $this->createForm(NoteFormType::class, $note);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($note);
                $em->flush();
                $this->addFlash('success', 'Note ajoutée');
            }
            // Récupère toutes les notes
            $notes = $em->getRepository(Note::class)->findAll();
            return $this->render('landing/index.html.twig', [
                'notes' => $notes,
                'formNote' => $form->createView(),
                // 'avg'=> $avg
            ]);
    }


}
