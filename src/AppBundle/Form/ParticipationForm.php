<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Service\User;
use AppBundle\Service\UserService;

class ParticipationForm extends AbstractType{
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('user_id', EntityType::class, array(
                    'required' => true,
                    'preferred_choices' => array(null),
                    'label' => 'Eleves',
                    'class' => 'AppBundle:User',
                    'query_builder' =>  function (EntityRepository $er) {
                                            return $er->createQueryBuilder('u')
                                                ->orderBy('u.annee', 'ASC');
                                        },
                    //'choice_label' => '',
                ))
                ->add('association_id', EntityType::class, array(
                    'required' => true,                   
                    'label' => 'Association',
                    'class' => 'AppBundle:Association',
                    'query_builder' =>  function (EntityRepository $er) {
                                            return $er->createQueryBuilder('u')
                                                ->orderBy('u.nom', 'ASC');
                                        },
                    'choice_label' => 'nom',
                ));
    }
    
    public function configureOption(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class'=>'AppBundle\Entity\Participations'
        ]);
    }
}
