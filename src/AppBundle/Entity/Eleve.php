<?php 

namespace AppBundle\Entity;

class Eleve{

	protected $id;
	protected $statut;
	protected $nom;
	protected $prenom;
	protected $annee;
	protected $is_alternant;
	protected $email;
	protected $pwd;
	protected $ecole;
	protected $date_crea;

	public function getId(){return $this->id;}
	public function getStatut(){return $this->statut;}
	public function getNom(){return $this->nom;}
	public function getPrenom(){return $this->prenom;}
	public function getAnnee(){return $this->annee;}
	public function getIs_alternant(){return $this->is_alternant;}
	public function getEmail(){return $this->email;}
	public function getPwd(){return $this->pwd;}
	public function getEcole(){return $this->ecole;}
	public function getDate_crea(){return $this->date_crea;}

	public function setId($id){$this->id = $id;}
	public function setStatut($statut){$this->statut = $statut;}
	public function setNom($nom){$this->nom = $nom;}
	public function setPrenom($prenom){$this->prenom = $prenom;}
	public function setAnnee($annee){$this->annee = $annee;}
	public function setIs_alternant($is_alternant){$this->is_alternant = $is_alternant;}
	public function setEmail($email){$this->email = $email;}
	public function setPwd($pwd){$this->pwd = $pwd;}
	public function setEcole($ecole){$this->ecole = $ecole;}
	public function setDate_crea($date_crea){$this->date_crea = $date_crea;}
}