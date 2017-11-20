<?php 
namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="open_staff")
 */

class Staff implements UserInterface{

	/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	protected $id;
	
	/**
    * @ORM\Column(type="string", length=100)
    */
    protected $nom;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
	protected $prenom;

	/**
    * @ORM\Column(type="string", length=5)
    */
    protected $promotion;

	/**
    * @ORM\Column(type="string", length=30)
    */
    protected $email;

	/**
    * @ORM\Column(type="string", length=200)
    */
    protected $mdp;

	/**
    * @ORM\ManyToOne(targetEntity="Association", inversedBy="staffs")
    * @ORM\JoinColumn(name="association_id", referencedColumnName="id")
    */
    protected $association;

	/**
    * @var \DateTime
    *
    * @ORM\Column(type="date")
    */
	protected $created_at;

        public function getId(){return $this->id;}
        public function getNom(){return $this->nom;}
        public function getPrenom(){return $this->prenom;}
        public function getPromotion(){return $this->promotion;}
	public function getEmail(){return $this->email;}
        public function getMdp(){return $this->mdp;}
	public function getAssociation(){return $this->association;}
	public function getCreated_at(){return $this->created_at;}

	public function setId($id){$this->id = $id;}
        public function setNom($nom){$this->nom = $nom;}
        public function setPrenom($prenom){$this->prenom = $prenom;}
        public function setPromotion($promotion){$this->promotion = $promotion;}
        public function setEmail($email){$this->email = $email;}
        public function setMdp($mdp){$this->mdp = $mdp;}
        public function setAssociation($association){$this->association = $association;}
	public function setCreated_at($created_at){$this->created_at = $created_at;}

        public function eraseCredentials() {

        }

        public function getPassword() {
            return $this->mdp;
        }

        public function getRoles() {

        }

        public function getSalt() {

        }

        public function getUsername() {
            return $this->email;
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