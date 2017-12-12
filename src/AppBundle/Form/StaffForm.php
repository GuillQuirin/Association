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

use AppBundle\Entity\User;
use AppBundle\Entity\Staff;
use AppBundle\Entity\Association;
use AppBundle\Repository\UserRepository;

class StaffForm extends AbstractType{
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('user', EntityType::class, [
                    'label'=>'Eleve',
                    'required'=>true,
                    'attr' => [
                            'class'=>'form-control'
                    ],
                    'class' => 'AppBundle:User',
                ]);

        $builder->add('association', ChoiceType::class, array(
                    'required' => true,                   
                    'label' => 'Association',
                    'attr' => [
                            'class'=>'form-control'
                    ], 
                    'choices' => $options['data']['assocs']
                ));
    }

    public function configureOption(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class'=>'AppBundle\Entity\Staff'
        ]);
    }
}