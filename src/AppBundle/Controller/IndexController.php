<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Service\EmailService;
use AppBundle\Service\PasswordService;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository('AppBundle:Association')->findAll();

        if($this->getUser()){
           //return $this->redirectToRoute('account');
        }
        return $this->render('default/index.html.twig',array(
          'associations'=> $association
        ));
    }


    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        $request = Request::createFromGlobals();

        if($request->getMethod() != 'POST')
            return $this->redirectToRoute('homepage');

        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        //La redirection dynamique se fait dans security.yml
    }

    /**
     * @Route("/forget", name="forget")
     */
    public function forgetAction(Request $request, EmailService $emailSrv, PasswordService $passwordSrv)
    {

      $em = $this->getDoctrine()->getManager();
      $repository = $this->getDoctrine()->getRepository('AppBundle:User');
      $eleve = $repository->findOneBy(
        ['email' => $request->get('email')]
      );

      if(isset($eleve)){
        $ecoder = $this->get("security.password_encoder");
        $newpwd = $passwordSrv->createPwd();
        $eleve->setMdp($ecoder->encodePassword($eleve, $newpwd));
        $em->persist($eleve);
        $em->flush();

        //Envoi de l'email
        $parameters = [
            'object' => 'Récupération de compte',
            'from' => "Associations de l'ESGI",
            'to' => $eleve->getEmail()
        ];
        $front = [
          'view' => 'emails/forget.html.twig',
          'variables' => [
            'user' => $eleve,
            'mdp' => $newpwd
          ]
        ];
        $envoi = $emailSrv->sendEmail($parameters, $front);
      }

      if(isset($envoi) && isset($eleve))
        $this->addFlash('success', "Un email vient d'être envoyé à cette adresse.");
      else
        $this->addFlash('error', "L'email n'a pas pu être envoyé");

      return $this->redirectToRoute('homepage');
    }
}
