<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Code;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Participations;
use AppBundle\Form\ParticipationForm;
use AppBundle\Service\ParticipationsService;
use AppBundle\Entity\Staff;
use AppBundle\Service\StaffService;
use AppBundle\Service\User;
use AppBundle\Service\UserService;



class StaffController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction(Request $request)
    {
       
        return $this->render('default/admin.html.twig', []);
    }

    /**
     * @Route("/participations", name="participations")
     */
    public function participationsAction(Request $request)
    {
    	if($this->getUser() && $this->getUser()->getStatut()==1){
            $em = $this->getDoctrine()->getManager();
            $association = StaffService::getAssociationByStaff($em, ["user" => $this->getUser()->getId()]);
            
            //Si l'utilisateur est bien responsable d'une association :
            if(isset($association)){
            	$listUsers = UserService::getAllUsersByProm($em);

	            $participation = new Participations();
	            $form = $this->createForm(ParticipationForm::class, $participation/*, $listUsers*/);
	            $form->handleRequest($request);
				
				if($form->isSubmitted()){
					if($form->isValid()){
		                $em->persist($participation);
		                $em->flush();
		                $this->addFlash('success', "La participation a bien été créée");
		                return $this->redirectToRoute('participations');
		            }
	            	else
	            		$this->addFlash('error', "Erreur lors de la création de la participation");
	            }

	            $query = [
	            	'association_id' => $association->getId()
	            ];

	            $array = [
	            	'form_add' => $form,
	            	'association' => $association,
	            	'Participations' => ParticipationsService::getParticipationsBy($em, $query)
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
        if($this->getUser() && $this->getUser()->getStatut()==1){
            $em = $this->getDoctrine()->getManager();
            ParticipationsService::delete($em, $id);
            $this->addFlash('success', "La participation a bien été supprimée");
            return $this->redirectToRoute('participations');
        }

        return $this->render('default\NotAllowed.html.twig', []);
    }
}
