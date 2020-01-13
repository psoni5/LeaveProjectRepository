<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Holiday;
use Doctrine\ORM\EntityManagerInterface;
class HolidayController extends AbstractController
{
	private $entityManager;
	public function __construct(EntityManagerInterface $em)
	{
       $this->entityManager=$em;
	}
	 
    public function HolidayListAction()
    {
    	
    	$repository=$this->getDoctrine()->getRepository(Holiday::class);
    	$holiday=$repository->findAll();
        
    	return $this->render('holiday/holiday.html.twig',["holiday_list"=>$holiday]);
    }

 
   /**
     * @Route("/delete", name="delete")
     */
  public function deleteHolidayAction(Request $request)
  {
  	$id=$request->get("id");
  	$repository=$this->entityManager->getRepository(Holiday::class);
  	$holiday=$repository->findOneBy(["id"=>$id]);
  	dump($holiday);
    $this->entityManager->remove($holiday);
    $this->entityManager->flush();
  	return new Response("successfully deleted");
  }

}
