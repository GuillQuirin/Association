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

    /*public function getAllUsersByProm(EntityManager $em)
    {
        $users = $em->getRepository('AppBundle:User')->findBy([], ['annee' => 'ASC']);
        $list = [];
        $oldkey = null;
        foreach ($users as $key => $user) {
        	if($user->getAnnee() != $oldkey)
        		$oldkey = $user->getAnnee();
        	
        	$list[$oldkey][$user->getNom()." ".$user->getPrenom()] = $user->getId();
        }
        return $list;
    }*/
}