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
        
        $session = $request->getSession();
        if($this->getUser()){
           return $this->redirectToRoute('account');
        }
        return $this->render('default/index.html.twig',array(
           
        ));
    }
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();
        $em = $this->getDoctrine()->getManager();
        
        $participations = $em->getRepository('AppBundle:Association')->findAll();

        /*if($lastUsername)
            return $this->redirectToRoute('account');
        else*/
            return $this->render('open_eleve/account.html.twig',array(
                'last_username' => $lastUsername,
                'error'         => $error,
                'Participations' => $participations
            ));
    }
}
