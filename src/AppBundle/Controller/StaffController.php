<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Code;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Form\RegisterForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Participations;
use AppBundle\Form\ParticipationForm;
use AppBundle\Repository\ParticipationsRepository;
use AppBundle\Entity\Staff;
use AppBundle\Repository\StaffRepository;
use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;
use AppBundle\Entity\Association;
use AppBundle\Repository\AssociationRepository;



class StaffController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$associations = StaffRepository::getAssociationsByStaff($em, ["user" => $this->getUser()->getId()]);

     	if($this->getUser() && ($this->getUser()->getStatut()==1 || !empty($associations)))
     		return $this->render('open_staff/admin.html.twig', ['associations' => $associations]);
     	else
     		return $this->render('default\NotAllowed.html.twig', []);
    }
    
    /**
     * @Route("/eleves", name="eleves")
     */
    public function elevesAction(Request $request)
    {
       	if($this->getUser() && $this->getUser()->getStatut()==1){
       		$em = $this->getDoctrine()->getManager();
       		$eleve = $em->getRepository('AppBundle:User')->findAll();
      		
      		$array = [
      			'Users' => $eleve
      		];
	        return $this->render('open_eleve\listeEleve.html.twig', $array);
       	}
       	else
       		return $this->render('default\NotAllowed.html.twig', []);
    }

    /**
     * @Route("/eleve/edit/{id}", name="edit_user")
     */
    public function editEleveAction($id, Request $request)
    {
        if($this->getUser() && $this->getUser()->getStatut()==1){
            $em = $this->getDoctrine()->getManager();
       		$eleve = $em->getRepository('AppBundle:User')->find($id);
            $oldmdp = $eleve->getMdp();
            $oldemail = $eleve->getEmail();
    
            $form = $this->createForm(RegisterForm::class, $eleve);
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                
                $repository = $this->getDoctrine()->getRepository('AppBundle:User');
                $eleveBdd = $repository->findOneBy(
                  ['email' => $request->get('register_form')['email']]
                );

                if($eleveBdd && $eleveBdd->getEmail()!==null && $oldemail!=$request->get('register_form')['email'] && $request->get('register_form')['email']==$eleveBdd->getEmail()){
                    $this->addFlash(
                        'error',
                        'Erreur : Cette adresse email est déjà enregistrée.'
                    );
                }
                else{
                    $ecoder = $this->get("security.password_encoder");
                    
                    //Si l'utilisateur a décidé de changer de mot de passe
                    if($eleve->getMdp() !== null && trim($eleve->getMdp()) !== "")
                        $eleve->setMdp($ecoder->encodePassword($eleve, $eleve->getMdp()));
                    else
                        $eleve->setMdp($oldmdp);

                    $em->persist($eleve);
                    $em->flush();
                    $this->addFlash(
                        'success',
                        'Modifications correctement enregistrées.'
                    );
                    return $this->redirectToRoute('eleves');
                }
            }
            
            return $this->render('open_eleve\editEleve.html.twig', [
                'form'=>$form->createView(),
            ]);
        }
        else
            return $this->render('default\NotAllowed.html.twig', []);   
    }

    
    /**
     * @Route("/eleve/delete/{id}", name="delete_user")
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

    /**
     * @Route("/participations", name="participations")
     */
    public function participationsAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
        $associations = StaffRepository::getAssociationsByStaff($em, ["user" => $this->getUser()->getId()]);

        if($this->getUser() && ($this->getUser()->getStatut()==1 || !empty($associations))){
            $em = $this->getDoctrine()->getManager();
            $listUsers = UserRepository::getAllUsersByProm($em);

            //Si l'utilisateur est bien responsable d'une association :
            if(!empty($associations)){
	            $participation = new Participations();
	            $form = $this->createForm(ParticipationForm::class, ["user" => $this->getUser(), "users" => $listUsers]);
	            $form->handleRequest($request);
				
				if($form->isSubmitted()){
					if($form->isValid()){
		                $em->persist($participation);
                        
                        $participation->setUser_id(UserRepository::getById($em, [
                            'id' => $request->get('participation_form')['user_id']
                        ]));
                        
                        $participation->setAssociation_id(AssociationRepository::getById($em, [
                            'id' => $request->get('participation_form')['association_id']
                        ]));
                        
		                $em->flush();
		                $this->addFlash('success', "La participation a bien été créée");
		            }
	            	else
	            		$this->addFlash('error', "Erreur lors de la création de la participation");
	            }

	            $query = [
	            	'staff_assocs' => $associations
	            ];

                //Liste des participations pour chaque association que l'utilisateur administre
	            $array = [
	            	'form_add' => $form->createView(),
	            	'Associations' => ParticipationsRepository::getParticipationsBy($em, $query)
	            ];
	            
	            return $this->render('open_participations/listeParticipations.html.twig', $array);
	        }
        }
        
        return $this->render('default\NotAllowed.html.twig', []);
    }

    /**
     * @Route("/participation/delete/{id}", name="delete_participation")
     */
    public function deleteParticipationsAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $associations = StaffRepository::getAssociationsByStaff($em, ["user" => $this->getUser()->getId()]);

        if($this->getUser() && ($this->getUser()->getStatut()==1 || !empty($associations))){
            $em = $this->getDoctrine()->getManager();
            ParticipationsRepository::delete($em, $id);
            $this->addFlash('success', "La participation a bien été supprimée");
            return $this->redirectToRoute('participations');
        }

        return $this->render('default\NotAllowed.html.twig', []);
    }
}
