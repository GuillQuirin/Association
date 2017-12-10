<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Guillaume QUIRIN
 */
namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;


class UserService
{
    
    public function save(EntityManager $em){
      
    }   

    public function getAllUsersByProm(EntityManager $em)
    {
        //Tri de tous les utilisateurs selon leur promo
        $users = $em->getRepository('AppBundle:User')->findBy([], ['annee' => 'ASC']);
        return $users;           
    }
}