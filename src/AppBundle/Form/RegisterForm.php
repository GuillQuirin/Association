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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegisterForm extends AbstractType{
    /**
     * @param FormBuilderInterface $builder
     * @param array $option
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('ecole', ChoiceType::class,['label' => ' ',
                                                    'attr' => ['placeholder' => 'Ecole'], 
                                                    'choices' => [
                                                        'ESGI' => 'ESGI',
                                                     ]
                                                    ])
                ->add('annee', ChoiceType::class,[  'label' => ' ',
                                                        'placeholder' => false, 
                                                        'choices' => [
                                                            'Selectionnez votre promotion' => '',
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
                                                    'attr' => ['placeholder' => 'Nom']
                                                    ])
                ->add('prenom', TextType::class, [ 'label' => ' ',
                                                        'attr' => ['placeholder' => 'Prenom']
                                                    ])
                ->add('email', EmailType::class, [ 'label' => ' ',
                                                        'attr' => ['placeholder' => 'email']
                                                    ]);

        //Inscription : on demande les mots de passe
        if($options['data']->getId() == NULL){
            $builder->add('mdp', PasswordType::class, [ 
                                                'type' => PasswordType::class,
                                                'invalid_message' => 'Les mots de passe doivent correspondre.',
                                                'options' => array('attr' => array('class' => 'password-field')),
                                                'required' => true,
                                                'first_options'  => array('label' => 'Mot de passe'),
                                                'second_options' => array('label' => 'Confirmez le mot de passe'),
                                            ])
                    ->add('mdp', RepeatedType::class, [ 
                                                'type' => PasswordType::class,
                                                'invalid_message' => 'Les mots de passe doivent correspondre.',
                                                'options' => array('attr' => array('class' => 'password-field')),
                                                'required' => true,
                                                'first_options'  => array('label' => 'Mot de passe'),
                                                'second_options' => array('label' => 'Confirmez le mot de passe'),
                                            ]);
        }
        //Modification du compte
        else{
            $builder->add('mdp', PasswordType::class, [ 
                                                'type' => PasswordType::class,
                                                'invalid_message' => 'Les mots de passe doivent correspondre.',
                                                'options' => array('attr' => array('class' => 'password-field')),
                                                'required' => false,
                                                'first_options'  => array('label' => 'Nouveau mot de passe'),
                                                'second_options' => array('label' => 'Confirmez le nouveau mot de passe'),
                                            ])
                    ->add('mdp', RepeatedType::class, [ 
                                                'type' => PasswordType::class,
                                                'invalid_message' => 'Les mots de passe doivent correspondre.',
                                                'options' => array('attr' => array('class' => 'password-field')),
                                                'required' => false,
                                                'first_options'  => array('label' => 'Nouveau mot de passe'),
                                                'second_options' => array('label' => 'Confirmez le nouveau mot de passe'),
                                            ]);
        }

        $builder->add('save', SubmitType::class, array('label' => "M'enregistrer"));        
    }

    public function configureOption(OptionsResolver $resolver) {
        $resolver->setDefaults(['data_class'=>'AppBundle\Entity\User']);   
    }
}
