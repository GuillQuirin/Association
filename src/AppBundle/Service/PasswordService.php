<?php
namespace AppBundle\Service;

class PasswordService
{
	//private 

    public function __construct(){ 

    }

    public function createPwd()
    {    
		//Génération du nouveau mot de passe
		$characters = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$newpwd = '';
      
      	for ($i = 0; $i < 5; $i++)
        	$newpwd .= $characters[rand(0, $charactersLength - 1)];

        return $newpwd;
    }
}

