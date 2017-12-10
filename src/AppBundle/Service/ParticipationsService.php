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
namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Participations;


class ParticipationsService
{
    
    public function save(EntityManager $em){
      
    }   

    public function getParticipationsBy(EntityManager $em, array $query = []){
        $participations = $em->getRepository('AppBundle:Participations')
                            ->findBy($query);
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
        $em->remove($participation);
        $em->flush();
        $this->addFlash('success', "La participation de l'élève a bien été supprimée");
    }
}