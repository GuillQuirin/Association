<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Code;
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


class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction(Request $request)
    {
        $code = new Code();

        $formGeneration = $this->createFormBuilder($code)
                    ->add('save', SubmitType::class, array('label' => "Générer un code"))
                    ->getForm();


        //Gestion de la soumission du formulaire
        $formGeneration->handleRequest($request);
        if($formGeneration->isSubmitted() && $formGeneration->isValid()){

            do{
                $open = $code->generateCode();
                $open_BDD = $this->getDoctrine()
                                 ->getRepository(Code::class)
                                 ->findOneByOpen($open);
            }
            while($open_BDD); //Si jamais il existe déjà un code similaire en BDD           

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $code->setOpen($open);
            $em = $this->getDoctrine()->getManager();
            $em->persist($code);
            $em->flush();
        
            $this->addFlash(
                'notice',
                'Code : '.$open
            );

            return $this->redirectToRoute('admin');
        }


        $array = [
            'form_gener' => $formGeneration->createView()
        ];

        return $this->render('default/admin.html.twig', $array);
    }
}
