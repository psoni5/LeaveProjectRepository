<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\EmployeeLeaveCount;
class UserLeaveInfoController extends AbstractController
{
    public function userLeaveInformationAction()
    {
      
      $repository=$this->getDoctrine()->getRepository(EmployeeLeaveCount::class);
      
      $EmployeeLeaveCount=$repository->findOneBy(["emp_id"=>'101']);
        return $this->render('user_leave_info/user_leave_info.html.twig',["emp_leave_count"=>$EmployeeLeaveCount]);
    }
}
