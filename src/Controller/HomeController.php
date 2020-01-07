<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
	/**
     * @Route("/home", name="home")
     */
    
    public function homeAction()
    {

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

	/**
     * @Route("/apply-leave", name="apply_leave")
     */

    public function applyLeaveAction()
    {

        return $this->render('apply_leave/apply_leave.html.twig');
    }
}
