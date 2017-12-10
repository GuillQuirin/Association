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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ParticipationForm extends AbstractType{
    /**
     * @param FormBuilderInterface $builder
     * @param array $option
     */
    public function buildForm(FormBuilderInterface $builder, array $options, $listUsers = []) {
        $builder
                 ->add('user_id', ChoiceType::class, [
                    'label'=>'Eleve',
                    'required'=>true,
                    'multiple'      => true,
                    'choices' => $listUsers
                ]);

        /*
         Exemple de chox triés : 
         $builder->add('stockStatus', ChoiceType::class, array(
            'choices' => array(
                'Main Statuses' => array(
                    'Yes' => 'stock_yes',
                    'No' => 'stock_no',
                ),
                'Out of Stock Statuses' => array(
                    'Backordered' => 'stock_backordered',
                    'Discontinued' => 'stock_discontinued',
                ),
            ),
        ));
        */
    }
    
    public function configureOption(OptionsResolver $resolver) {
        $resolver->setDefaults(['data_class'=>'AppBundle\Entity\Participations']);
    }
}
