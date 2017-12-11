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
namespace AppBundle\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\User;


class UserRepository extends EntityRepository
{
    public function getById($id){
    	return $this->findOneBy($id);
    } 

    public function getAllUsersByProm()
    {
        $users = $this->findBy([], ['annee' => 'ASC']);
        $list = [];
        $oldkey = null;
        foreach ($users as $key => $user) {
        	if($user->getAnnee() != $oldkey)
        		$oldkey = $user->getAnnee();
        	
        	$list[$oldkey][$user->getNom()." ".$user->getPrenom()] = $user->getId();
        }
        return $list;
    }
}