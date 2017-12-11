<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Participation
 *
 * @author Guillaume QUIRIN
 */
namespace AppBundle\Repository;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Participations;


class ParticipationsRepository
{

    public function save(EntityManager $em){
      
    }   

    public function getParticipationsBy(EntityManager $em, array $query = []){
        if(isset($query['staff_assocs'])){
            $participation = [];
            foreach ($query['staff_assocs'] as $key => $staff) {
                $participations[] = array_merge($participation, $em->getRepository('AppBundle:Participations')
                                        ->findBy(['association_id' => $staff->association->getId()]));
            }
        }
        return $participations;
    }
    
    public function getAll(EntityManager $em)
    {
        $participations = $em->getRepository('AppBundle:Participations')
                            ->findAll();
        return $participations;       
    }

    public static function delete(EntityManager $em, $id){
        $participation = $em->getRepository('AppBundle:Participations')->findOneBy(["id" => $id]);
        if($participation){
            $em->remove($participation);
            $em->flush();
        }
    }
}