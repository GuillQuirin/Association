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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Service\User;
use AppBundle\Service\UserService;

class ParticipationForm extends AbstractType{
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('user_id', ChoiceType::class, [
                    'label'=>'Eleve',
                    'required'=>true,
                    'attr' => [
                            'class'=>'form-control'
                    ],
                    'choices' => $options['data']['users']
                ]);

        $builder->add('association_id', EntityType::class, array(
                    'required' => true,                   
                    'label' => 'Association',
                    'attr' => [
                            'class'=>'form-control'
                    ], 
                    'class' => 'AppBundle:Staff',
                    'query_builder' =>  function (EntityRepository $er) use ($options) {
                                            //Un super-admin voit toutes les associations
                                            if($options['data']['user']->getStatut() == 1)
                                                return $er->createQueryBuilder('u');
                                            else
                                                return $er->createQueryBuilder('u')
                                                        ->andWhere('u.user = :id')
                                                        ->setParameter('id', $options['data']['user']->getId());
                                        },
                    'choice_value' => "association.id"
                ));
    }

    public function configureOption(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class'=>'AppBundle\Entity\Participations'
        ]);
    }
}
