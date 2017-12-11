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
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Participations;


class ParticipationsRepository extends EntityRepository
{
    public function getParticipationsBy(array $query = []){
        if(isset($query['staff_assocs'])){
            $participation = [];
            foreach ($query['staff_assocs'] as $key => $staff) {
                $participations[] = array_merge($participation, $this->findBy(['association_id' => $staff->association->getId()]));
            }
        }
        return $participations;
    }
    
    public function getParticipationsByUser($user_id){
        $participations = $this->findBy(['user_id' => $user_id]);
        return $participations;
    }

    public function getById($id){
        return $this->findOneBy($id);
    } 
    
    public function getAll()
    {
        $participations = $this->findAll();
        return $participations;       
    }

    public static function delete($id){
        $participation = $this->findOneBy(["id" => $id]);
        if($participation){
            $em->remove($participation);
            $em->flush();
        }
    }
}