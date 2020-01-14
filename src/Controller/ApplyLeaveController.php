<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\LeaveApplied;
use App\Form\LeaveAppliedType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\EmployeeDetail;
use App\Entity\LeaveStatus;
class ApplyLeaveController extends AbstractController
{
   /**
     * @Route("home/apply-leave", name="apply_leave")
     */

    public function applyLeaveAction(Request $request)
    {
    	$applyLeave=new LeaveApplied();
    	$form=$this->createForm(LeaveAppliedType::class,$applyLeave);
    	$form->handleRequest($request);
    	if($form->isSubmitted())
    	{
    		$em=$this->getDoctrine()->getManager();
    		$user=$this->getUser();
    		$email=$user->getEmail();
    		$user=$em->getRepository(EmployeeDetail::class)->findOneBy(["email"=>$email]);
    		$emp_id=$user->getEmpId();
    		$applyLeave->setEmpId($emp_id);
    		$applyLeave->setCutGl(0);
    		$applyLeave->setCutPl(0);
    		$applyLeave->setDays(0);
    		$dt = new \DateTime();
            $tz = new \DateTimeZone("Asia/Kolkata");
            $dt->setTimezone($tz);
            
            
            $applyLeave->setUpdatedAt($dt);
            $applyLeave->setCreatedAt($dt);
            $leaveStatus=new LeaveStatus();
            $applyLeave->setStatusId($em->getRepository(LeaveStatus::class,$leaveStatus)->findOneBy(["id"=>1]));
    		$em->persist($applyLeave);
    		$em->flush();
    		return $this->redirectToRoute("home_page");
            


    	}
        return $this->render('apply_leave/apply_leave.html.twig',["form"=>$form->createView()]);


    }
}
