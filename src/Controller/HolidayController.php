<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Holiday;
class HolidayController extends AbstractController
{
	 /**
     * @Route("/holiday-list", name="holiday_list")
     */
    public function HolidayListAction()
    {
    	
    	$repository=$this->getDoctrine()->getRepository(Holiday::class);
    	$holiday=$repository->findAll();
        
    	return $this->render('holiday/holiday.html.twig',["holiday_list"=>$holiday]);
    }
}
