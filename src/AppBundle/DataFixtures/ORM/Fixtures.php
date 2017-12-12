<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\User;
use AppBundle\Entity\Association;
use AppBundle\Entity\Participations;
use AppBundle\Entity\Staff;

class Fixtures implements FixtureInterface
{
    private $manager;
    private $encoder;

    private $listusers;
    private $listassocs;

    private $infosUser = [
        'nom'=> 'UserName',
        'prenom'=> 'UserFirstName',
        'email'=> 'email@email.fr',
        'mdp'=> '1234',
        'annee'=> '1I',
        'ecole'=> 'ESGI'
    ];

    private $infosAssoc = [
        'nom'=> 'Association',
        'description'=> 'AssocDescription',
    ];

    /*public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }*/

    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->loadUsers();
        $this->loadAssocs();
        $this->loadParticipations();
        $this->loadStaffs();
        $this->manager->flush();
    }

    private function loadUsers(){
        for($i = 0; $i<5; $i++) {
            /*  Utilisateurs */
            $user = new User();
            $user->setNom($this->infosUser['nom'].$i);
            $user->setPrenom($this->infosUser['prenom'].$i);
            $user->setEmail($this->infosUser['email']);
            
            //$encoder = $this->container->get("security.password_encoder");
            //$user->setMdp($this->container->encodePassword($user, $this->infosUser['mdp']));
            $user->setMdp($this->infosUser['mdp']);
            
            $user->setAnnee($this->infosUser['annee']);
            $user->setEcole($this->infosUser['ecole']);

            if($i%2==0)
                $user->setStatut(1);

            $this->listusers[]=$user;
            $this->manager->persist($user);
        }
    }

    private function loadAssocs(){
        for($i = 0; $i<5; $i++) {        
            /*  Associations */
            $association = new Association();
            $association->setNom($this->infosAssoc['nom'].$i);
            $association->setDescription($this->infosAssoc['description'].$i);
            
            if($i%2==0)
                $association->setIs_active(1);

            $this->listassocs[]=$association;
            $this->manager->persist($association);
        }
    }

    private function loadParticipations(){
        for($i = 0; $i<10; $i++) {   

            shuffle($this->listusers);
            shuffle($this->listassocs);
        
            $participation = new Participations();
            $participation->setUser_id($this->listusers[0]);
            $participation->setAssociation_id($this->listassocs[0]);

            $this->manager->persist($participation);
        }
    }

    private function loadStaffs(){
        for($i = 0; $i<3; $i++) {   

            shuffle($this->listusers);
            shuffle($this->listassocs);
        
            $participation = new Staff();
            $participation->setUser($this->listusers[0]);
            $participation->setAssociation($this->listassocs[0]);

            $this->manager->persist($participation);
        }
    }
}