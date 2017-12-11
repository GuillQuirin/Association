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
use AppBundle\Entity\Association;


class AssociationRepository
{
    public $id;
    public $nom;
    public $is_active;
    public $description;

    public static function delete(EntityManager $em, $id){
        $association = $em->getRepository('AppBundle:Association')->findOneBy(["id" => $id]);
        $em->remove($association);
        $em->flush();
        $this->addFlash('success', "L'association a bien été supprimée");
    }
    public function save(EntityManager $em){
      
    }
    
    public function getById(EntityManager $em, $id){
        return $em->getRepository('AppBundle:Association')->findOneBy($id);
    } 

    public function getProducts(EntityManager $em){
       

    }
    public function getProductsByName(EntityManager $em, $query)
    {
        
    }
    public function getAll(EntityManager $em)
    {
       
    }
}