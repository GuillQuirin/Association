<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Association
 *
 * @author Sanae BELHAJ
 */
namespace AppBundle\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Association;


class AssociationRepository extends EntityRepository
{
    public $id;
    public $nom;
    public $is_active;
    public $description;

    public static function delete($id){
        $association = $this->findOneBy(["id" => $id]);
        $em->remove($association);
        $em->flush();
        $this->addFlash('success', "L'association a bien été supprimée");
    }
    public function save(){
      
    }
    
    public function getById($id){
        return $this->findOneBy($id);
    } 

    public function getAll()
    {
       
    }
}