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
        $association = new Association();
        $form = $this->createForm(AssociationForm::class, $association);
        $form->handleRequest($request);
        if($form->isValid()){
          //  $data = $request->get('association_form');
         // var_dump($form->da);
            if(isset($_POST['image'])){
                $uploaddir = 'images/';
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                var_dump($_FILES['image']['name']);
                die;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                        $association->setImage($_FILES['image']['name']);
                        echo "Le fichier est valide, et a été téléchargé avec succès. Voici plus d'informations :\n";
                } else {
                        echo "la taille de l'image dépasse la taille autorisé.";
                }
            }
            die;
            $em = $this->getDoctrine()->getManager();
            $em->persist($association);
            $em->flush();
            return $this->redirectToRoute('associations');
            
        }
        return $this->render('open_association\addAssociation.html.twig', [
            'form'=>$form->createView(),
        ]);
    }
}
