<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\FormulaireUserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */

    public function index(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $user = new User();
        $form = $this->createForm(FormulaireUserType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur ajouté');
        }

        $users = $em->getRepository(User::class)->findAll();

        return $this->render('landing/index.html.twig', [
            'users' => $users,
            'formUsers' => $form->createView()
        ]);
    }
}
