<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Staff
 *
 * @author Guillaume QUIRIN
 */
namespace AppBundle\Repository;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Staff;
use AppBundle\Repository\AssociationRepository;
use AppBundle\Entity\Association;


class StaffRepository
{
    
    public function save(EntityManager $em){
      
    }   

    public function getAssociationsByStaff(EntityManager $em, $query = []){
        $staffs = $em->getRepository('AppBundle:Staff')->findBy(["user" => $query['user']]);
        if($staffs != null)
            return $staffs; 
        else
            return false;
    }
    
    public function getAll(EntityManager $em)
    {
           
    }

    public static function delete(EntityManager $em, $id){
        $participation = $em->getRepository('AppBundle:Participation')->findOneBy(["id" => $id]);
        $em->remove($participation);
        $em->flush();
    }
}