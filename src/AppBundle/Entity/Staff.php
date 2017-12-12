<?php 
namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StaffRepository")
 * @ORM\Table(name="open_staff")
 */

class Staff {

	/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	protected $id;

	/**
    * @ORM\ManyToOne(targetEntity="Association", inversedBy="staffs")
    * @ORM\JoinColumn(name="association_id", referencedColumnName="id")
    */
    public $association;

    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="staffs")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    public $user;

    /**
    * @var \DateTime
    *
    * @ORM\Column(type="datetime")
    */
	protected $created_at;

    public function __construct()
    {
        $this->created_at = new \DateTime();
    }

    public function getId(){return $this->id;}
    public function getAssociation(){return $this->association;}
    public function getUser(){return $this->user;}
    public function getCreated_at(){return $this->created_at;}

    public function setId($id){$this->id = $id;}
    public function setAssociation($association){$this->association = $association;}
    public function setUser($user){$this->user = $user;}
    public function setCreated_at($created_at){$this->created_at = $created_at;}

    public function __toString()
    {
        return (string) $this->association->getNom();
    }

    public function eraseCredentials() {

    }

    public function getRoles() {

    }

    public function getSalt() {

    }
    
    public function isEqualTo(UserInterface $user)
    {
        if (!$user instanceof WebserviceUser) {
            return false;
        }

        if ($this->mdp !== $user->getPassword()) {
            return false;
        }

        if ($this->salt !== $user->getSalt()) {
            return false;
        }

        if ($this->email !== $user->getUsername()) {
            return false;
        }

        return true;
    }
}