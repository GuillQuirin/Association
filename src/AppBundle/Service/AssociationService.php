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
namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Association;


class AssociationService
{
    public $id;
    public $nom;
    public $is_active;
    public $description;

    public static function delete(EntityManager $em, $id){
        $association = $em->getRepository('AppBundle:Association')->findOneBy(["id" => $id]);
        $em->remove($association);
        $em->flush();
        $this->addFlash('success', "Assiciation a bien été supprimé");
    }
    public function save(EntityManager $em){
      
    }
    public function getById(EntityManager $em,$id)
    {
       
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