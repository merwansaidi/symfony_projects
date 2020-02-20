<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\FormulaireUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */

    public function index(Request $request)
    {

    
    }

}



