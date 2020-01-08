<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use App\Security\LoginFormAuthenticator;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\EmployeeDetail;
use App\Form\EditProfileType;
use Symfony\Component\Mime\Email;

class EditProfileController extends AbstractController
{
    /**
     * @Route("/edit_profile", name="edit_profile")
     */
    public function editprofile(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $authenticator): Response
    {   
        
        $user = $this->getUser();
        $email = $user->getEmail();
        $entityManager = $this->getDoctrine()->getManager();
        $employee = $entityManager->getRepository(EmployeeDetail::class)
        ->findOneBy(['email' => $email]);
        $form = $this->createForm(EditProfileType::class, $employee);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() ) {
            $today = date("Y-m-d H:i:s"); 
            $employee->setUpdatedAt($today);
            $entityManager->flush();

            return $this->redirect($this->generateUrl('home'));
            
        }
            
            
            
        
        return $this->render('edit_profile/editprofile.html.twig', [
            'EditProfile' => $form->createView(),
        ]);
    }
}
