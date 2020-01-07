<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserProfileController extends AbstractController
{
  
    public function userProfileAction()
    {
    	$user=["username"=>"dk@gmail.com"];
        return $this->render('user_profile/user.html.twig', ["user"=>$user]);
    }
}
