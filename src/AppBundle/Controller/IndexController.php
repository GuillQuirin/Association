<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


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
    public function forgetAction(Request $request, \Swift_Mailer $mailer)
    {

      $em = $this->getDoctrine()->getManager();
      $repository = $this->getDoctrine()->getRepository('AppBundle:User');
      $eleve = $repository->findOneBy(
        ['email' => $request->get('email')]
      );
      $ecoder = $this->get("security.password_encoder");

      //Génération du nouveau mot de passe
      $characters = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      
      for ($i = 0; $i < 5; $i++)
          $randomString .= $characters[rand(0, $charactersLength - 1)];

      if($eleve){
        $eleve->setMdp($ecoder->encodePassword($eleve, $randomString));
        $em->persist($eleve);
        $em->flush();

        //Envoi de l'email
        $message = (new \Swift_Message('Récupération de compte'))
                    ->setFrom([ 'adresse@email.com' => 'Associations de ESGI' ])
                    ->setTo($eleve->getEmail())
                    ->setBody(
                      $this->renderView(
                        'emails/forget.html.twig',
                        [
                          'user' => $eleve,
                          'mdp' => $randomString
                        ]
                      ), 
                      'text/html'
                    );
        $mailer->send($message);
        return $this->redirectToRoute('homepage');
      }
    }
}
