<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Association;
use AppBundle\Form\AssociationForm;
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
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository('AppBundle:Association')->findAll();
        $form = $this->createForm(AssociationForm::class, $association);
        $form->handleRequest($request);

        if($form->isValid()){
          //  $data = $request->get('association_form');
            if(isset($_FILES['image'])){
                $uploaddir = 'images';
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                        $association->setImage($_FILES['image']['name']);
                        echo "Le fichier est valide, et a été téléchargé avec succès. Voici plus d'informations :\n";
                } else {
                        echo "la taille de l'image dépasse la taille autorisé.";
                }
            }
            
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
