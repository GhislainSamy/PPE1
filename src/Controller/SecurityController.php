<?php

namespace App\Controller;

use App\Entity\Adherent;
use App\Form\RegistrationType;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;




class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request){
        $Adherent= new Adherent();
        $form = $this->createForm(RegistrationType::class,$Adherent);

        $form->handleRequest($request);
         
            if ($form->isSubmitted() && $form->isValid()) {

                $Adherent= $form->getData();
               
                $manager = $this->getDoctrine()->getManager();
            $manager->persist($Adherent);
            $manager->flush();
        }

        return $this->render('security\registration.html.twig', [
     //       return $this->render('security\registrationsuccess.html.twig', [

            'form' => $form->createView()
        ]);


        }
    /**
     * @Route("/login", name="login")
    */
        public function login(Request $request, AuthenticationUtils $authenticationUtils){
            // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();
        
            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();
        
            return $this->render('security/login.html.twig', array(
                'last_username' => $lastUsername,
                'error'         => $error,
            ));
        }
    
    
}