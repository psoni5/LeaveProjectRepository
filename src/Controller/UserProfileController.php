<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\EmployeeDetail;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Employee;

class UserProfileController extends AbstractController
{
  
    public function userProfileAction()
    {
        $user=$this->getUser();
        
    	$employe=$this->getDoctrine()->getManager()->getRepository(EmployeeDetail::class)->findOneBy(['email'=>$user->getEmail()]);
        
        return $this->render('user_profile/user.html.twig', ["employe"=>$employe]);
    }
}
