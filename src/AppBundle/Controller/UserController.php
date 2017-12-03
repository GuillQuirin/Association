<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\RegisterForm;
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


class UserController extends Controller
{
    /**
     * @Route("/inscript", name="inscript")
     */
    public function inscriptionAction(Request $request)
    {
        $eleve = new User();
        $form = $this->createForm(RegisterForm::class, $eleve);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // $form->getData() holds the submitted values but, the original `$task` variable has also been updated
            $ecoder = $this->get("security.password_encoder");
            $eleve->setMdp($ecoder->encodePassword($eleve, $eleve->getMdp()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($eleve);
            $em->flush();
        }


        $array = [
            'form_inscri' => $form->createView()
        ];

        return $this->render('open_eleve/inscription.html.twig', $array);
    }

    /**
     * @Route("/eleves", name="eleves")
     */
    public function elevesAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $eleve = $em->getRepository('AppBundle:User')->findAll();
      
        return $this->render('open_eleve\listeEleve.html.twig', [
        ]);
    }

    /**
     * @Route("/account", name="account")
     */
    public function accountAction(Request $request)
    {

        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $eleve = $this->getUser();
        dump($this->getUser());
        /* Liste des participations */
        $repository = $this->getDoctrine()->getRepository('AppBundle:Participations');
        $participations = $repository->findBy(
            ['user_id' => $this->getUser()->getId()]
        );
        dump($participations);

        /* Information du compte*/
        $form = $this->createForm(RegisterForm::class, $eleve);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $ecoder = $this->get("security.password_encoder");
            $eleve->setMdp($ecoder->encodePassword($eleve, $eleve->getMdp()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($eleve);
            $em->flush();
        }

        $array = [
            'participations' => $participations,
            'form_account' => $form->createView()
        ];

        return $this->render('open_eleve/account.html.twig',$array);
    }

     /**
     * @Route("/delete/{id}", name="membre_supprimerInvitation")
     */
    public function supprimerEleveAction($id, Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Amis');
        // query for a single product matching the given name and price
        $eleve = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($eleve);
        $em->flush();
        $this->addFlash('success', "Correctement supprimé");
        return $this->redirectToRoute('eleves');

    }
}
