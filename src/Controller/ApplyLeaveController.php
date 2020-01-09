<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\LeaveApplied;
use App\Form\LeaveAppliedType;
class ApplyLeaveController extends AbstractController
{
   /**
     * @Route("home/apply-leave", name="apply_leave")
     */

    public function applyLeaveAction()
    {
    	$applyLeave=new LeaveApplied();
    	$form=$this->createForm(LeaveAppliedType::class,$applyLeave);
        return $this->render('apply_leave/apply_leave.html.twig',["form"=>$form->createView()]);
    }
}
