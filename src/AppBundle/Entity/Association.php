<?php 
namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
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
	*
	*/
	protected $is_active;

	public function getId(){return $this->id;}
	public function getNom(){return $this->nom;}
	public function getIs_active(){return $this->is_active;}

	public function setId($id){$this->id = $id;}
	public function setNom($nom){$this->nom = $nom;}
	public function setIs_active($is_active){$this->is_active = $is_active;}
}