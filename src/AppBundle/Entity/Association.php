<?php 
namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AssociationRepository")
 * @ORM\Table(name="open_association")
 */

class Association{

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
    * @ORM\OneToMany(targetEntity="Staff", mappedBy="association")
    */
	protected $staffs;

    /**
    * @ORM\Column(type="boolean", options={"default":0})
    */
	public $is_active = 0;
        
        /**
    * @ORM\Column(type="string", nullable=true)
    */
	protected $description;

	/**
	* @ORM\OneToMany(targetEntity="Participations", mappedBy="association_id") 
	*/
	protected $participations;

	
	public function __construct()
	{
		$this->participations = new ArrayCollection();
	}
 
	public function getId(){return $this->id;}
	public function getNom(){return $this->nom;}
	public function getIs_active(){return $this->is_active;}
	public function getDescription(){return $this->description;}

	public function setId($id){$this->id = $id;}
	public function setNom($nom){$this->nom = $nom;}
	public function setIs_active($is_active){return $this->is_active = $is_active;}
	public function setDescription($description){$this->description = $description;}
}