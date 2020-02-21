<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\UserFormType;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(Request $request)
    {
            // Service Doctrine (permet d'interagir avec la BDD)
            $em = $this->getDoctrine()->getManager();
            $user = new User();
            $form = $this->createForm(UserFormType::class, $user);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($user);
                $em->flush();
                $this->addFlash('success', 'Utilisateur ajouté');
            }
            // Récupère tous les user
            $users = $em->getRepository(User::class)->findAll();
            return $this->render('user/index.html.twig', [
                'users' => $users,
                'formUser' => $form->createView()
                // 'avg'=> $avg
            ]);

            // Récupère toutes les notes d'un user
            $notes = $em->getRepository(Note::class)->findBy(id);
            return $this->render('landing/index.html.twig', [
            'notes' => $notes,
            'formNote' => $form->createView(),
            // 'avg'=> $avg
            ]);
    }
}
