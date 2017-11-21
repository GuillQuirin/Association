<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Code;
use AppBundle\Entity\Eleve;
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


class EleveController extends Controller
{
    /**
     * @Route("/inscript", name="inscript")
     */
    public function inscriptionAction(Request $request)
    {
        $eleve = new Eleve();
        $code = new Code();

        $formRegister = $this->createFormBuilder($eleve)
                    ->add('ecole', ChoiceType::class,['label' => ' ',
                                                    'attr' => ['placeholder' => 'Ecole'], 
                                                    'choices' => [
                                                        'ESGI' => 'ESGI',
                                                     ]
                                                    ])
                    ->add('annee', ChoiceType::class,[  'label' => ' ',
                                                        'placeholder' => false, 
                                                        'choices' => [
                                                            'Selectionnez votre promotion *' => '',
                                                            '1ere année Initiale' => '1I',
                                                            '1ere année Alternance' => '1A',
                                                            '2eme année Initiale' => '2I',
                                                            '2eme année Alternance' => '2A',
                                                            '3eme année Initiale' => '3I',
                                                            '3eme année Alternance' => '3A',
                                                            '4eme année Alternance' => '4A',
                                                            '5eme année Alternance' => '5A'
                                                        ],
                                                        'required' => true
                                                    ])
                    ->add('nom', TextType::class, [ 'label' => ' ',
                                                    'attr' => ['placeholder' => 'Nom *']
                                                    ])
                    ->add('prenom', TextType::class, [ 'label' => ' ',
                                                        'attr' => ['placeholder' => 'Prenom *']
                                                    ])
                    ->add('code', TextType::class, [ 'label' => ' ',
                                                        'attr' => [
                                                            'placeholder' => 'Inscrivez le code transmis par le staff après avoir joué *',
                                                            'maxlength' => 5
                                                        ]
                                                    ])
                    ->add('save', SubmitType::class, array('label' => "M'enregistrer"))
                    ->getForm();


        //Gestion de la soumission du formulaire d'inscription
        $formRegister->handleRequest($request);
        if($formRegister->isSubmitted() && $formRegister->isValid()){

            // $form->getData() holds the submitted values but, the original `$task` variable has also been updated
            $eleve = $formRegister->getData();

            $code_BDD = $this->getDoctrine()
                                 ->getRepository(Code::class)
                                 ->findOneByOpen($eleve->getCode());

            $eleve_BDD = $this->getDoctrine()
                                 ->getRepository(Eleve::class)
                                 ->findOneByCode($eleve->getCode());
            
            if($code_BDD && !$eleve_BDD){
                //Code généré mais pas encore associé
                $em = $this->getDoctrine()->getManager();
                $em->persist($eleve);
                $em->flush();
            
                $this->addFlash(
                    'notice',
                    'Votre compte a correctement été enregistré'
                );
            }
            else
                $this->addFlash(
                        'error',
                        'Le code du staff a déjà été enregistré'
                    );    

            return $this->redirectToRoute('homepage', ['eleve' => $eleve]);
        }


        $array = [
            'form_inscri' => $formRegister->createView()
        ];

        return $this->render('open_eleve/inscription.html.twig', $array);
    }

    /**
     * @Route("/eleves", name="eleves")
     */
    public function elevesAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $eleve = $em->getRepository('AppBundle:Eleve')->findAll();
      
        return $this->render('open_eleve\listeEleve.html.twig', [
            'Eleves'=>$eleve,
        ]);
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
        $this->addFlash('success', "Bien supprimer");
        return $this->redirectToRoute('eleves');

    }
}
