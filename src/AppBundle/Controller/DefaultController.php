<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Eleve;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $eleve = new Eleve();


        $form = $this->createFormBuilder($eleve)
                    ->add('nom', TextType::class)
                    ->add('save', SubmitType::class, array('label' => 'Create Post'))
                    ->getForm();


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $eleve = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($task);
            // $em->flush();

            return $this->redirectToRoute('task_success');
        }


        $array = [
            'form' => $form->createView(),
        ];

        return $this->render('default/index.html.twig', $array);
    }
}
