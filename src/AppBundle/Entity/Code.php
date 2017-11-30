<?php 
namespace AppBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="open_code")
 */

class Code{

	/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	protected $id;
	
	/**
    * @ORM\Column(type="string", length=10)
    */
	protected $open;

	/**
	*
	*/
	protected $date_crea;

	// public static function loadValidatorMetadata(ClassMetadata $metadata){
 //        $metadata->addPropertyConstraint('nom', new NotBlank());
 //        $metadata->addPropertyConstraint('prenom', new NotBlank());
 //        $metadata->addPropertyConstraint(
 //            'dueDate',
 //            new Type(\DateTime::class)
 //        );
 //    }


	public function generateCode(){
		$characters = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    
	    for ($i = 0; $i < 5; $i++)
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	 
	    return $randomString;
	}

	public function getId(){return $this->id;}
	public function getOpen(){return $this->open;}
	public function getDate_crea(){return $this->date_crea;}

	public function setId($id){$this->id = $id;}
	public function setOpen($open){$this->open = $open;}
	public function setDate_crea($date_crea){$this->date_crea = $date_crea;}
}