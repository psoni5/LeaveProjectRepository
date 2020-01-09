<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LeaveHistoryController extends AbstractController
{
    /**
     * @Route("/leave_history", name="leave_history")
     */
    public function index()
    {
        return $this->render('leave_history/leavehistory.html.twig', [
            'controller_name' => 'LeaveHistoryController',
        ]);
    }
}
