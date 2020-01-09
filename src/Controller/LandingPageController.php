<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LandingPageController extends AbstractController
{
    /**
     * @Route("/", name="landing_page")
     */
    public function landingPageAction()
    {
        return $this->render('landing_page/landing_page.html.twig', [
            'controller_name' => 'LandingPageController',
        ]);
    }
}
