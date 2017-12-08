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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AssociationForm extends AbstractType{
    /**
     * @param FormBuilderInterface $builder
     * @param array $option
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                 ->add('nom', TextType::class, [
                    'label'=>'nom',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'form-control'
                    ],
                ])
                 ->add('is_active', CheckboxType::class, [
                    'label'=>'disponible',
                    'required'=>false,
                    'attr'=>[
                        'class'=>'form-control'
                    ],
                ])
                ->add('image', FileType::class, [
                    'label'=>'image'
                    
                ]);
    }
    public function configureOption(OptionsResolver $resolver) {
        $resolver->setDefaults(['data_class'=>'AppBundle\Entity\Association']);
        
    }
}
