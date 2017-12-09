<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Association;
use AppBundle\Form\AssociationForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class AssociationController extends Controller
{
    /**
     * @Route("/associations", name="associations")
     */
    public function associationsAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository('AppBundle:Association')->findAll();
      
        return $this->render('open_association\listeAssociation.html.twig', [
            'Associations'=>$association,
        ]);
    }
    /**
     * @Route("/addassociation", name="add_associations")
     */
    public function addAction(Request $request)
    {
        if($this->getUser() && $this->getUser()->getStatut()==1){
            $association = new Association();
            $form = $this->createForm(AssociationForm::class, $association);
            $form->handleRequest($request);
            if($form->isValid()){
              //  $data = $request->get('association_form');
             // var_dump($form->da);

                $em = $this->getDoctrine()->getManager();
                $em->persist($association);
                $em->flush();
                return $this->redirectToRoute('associations');

            }
            return $this->render('open_association\addAssociation.html.twig', [
                'form'=>$form->createView(),
            ]);
        }else{
            return $this->render('default\NotAllowed.html.twig', []);
        }
    }
    /**
     * @Route("/delete/{id}", name="delete_association")
     */
    public function deleteAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Association');
        // query for a single product matching the given name and price
        $association = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($association);
        $em->flush();
        $this->addFlash('success', "Assiciation a bien été supprimé");
        return $this->redirectToRoute('associations', []);

    }
    /**
     * @Route("/edit/{id}", name="edit_association")
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository('AppBundle:Association')->find($id);
        $form = $this->createForm(AssociationForm::class, $association);
        $form->handleRequest($request);
        if($form->isValid()){
           $em->persist($association);
           $em->flush();
           $this->addFlash('success', "Vos informations personnelles sont à jour!");
           return $this->redirectToRoute('associations', []);

        }
        return $this->render('open_association\addAssociation.html.twig', [
            'form'=>$form->createView(),
        ]);
    }
}
