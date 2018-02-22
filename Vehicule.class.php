<?php

class Majorite{

	private $_age;
	private $_age_manquant;


	public function setAge($age){
		if ( !is_int($age) )
		{
			trigger_error('Rentrer un chiffre');
			return;
		}
		if( $age < 18)
		{
			$age_manquant = 18 - $age;
			return '/!\ Vous êtes trop jeune /!\ <br> - Revenez dans '.$age_manquant.' ans.<br>';
		}
		$this->_age = $age;
	}

	public function majeur(){
		if ( $this->_age >= 18 )
		{
			return "Vous êtes majeur, accés autorisé.";
		}
		else
		{
			return;
		}
	}
}

$majorite = new Majorite();
echo $majorite->setAge(15);
echo $majorite->majeur();