<?php

class pokemon{
	private $_name;
	private $_pv;
	private $_level;
	private $_attack1;
	private $_attack2;
	private $_type;
//valeur de defaut quand on fait new
		function __construct($_name,$_pv,$_level,$_attack1,$_attack2,$_type){
			$this->_name = $_name;
			$this->_pv = $_pv;
			$this->_level = $_level;
			$this->_attack1 = $_attack1;
			$this->_attack2 = $_attack2;
			$this->_type = $_type;
		}
//recupere le nom
		public function Getname ()
		{
			return $this->_name;
		}
//envoie le nom
		public function Setname ( $n )
		{
			return $this->_name = $n;
		}
//recupere le pv
		public function Getpv ()
		{
			return $this->_pv;
		}
//envoie le pv
		public function Setpv ($p)
		{
			return $this->_pv = $p;
		}
//recupere le level
		public function Getlevel ()
		{
			return $this->_level;
		}
//envoie le level
		public function Setlevel ($l)
		{
			return $this->_level = $l;
		}
//recupere attack1
		public function Getattack1 ()
		{
			return $this->_attack1;
		}
//envoie attack1
		public function Setattack1 ($a)
		{
			return $this->_attack1 = $a; 
		}
//recupere attack2
		public function Getattack2 ()
		{
			return $this->_attack2;
		}
//envoi attack2
		public function Setattack2 ($a2)
		{
			return $this->_attack2 = $a2;
		
		}
//recupere type
		public function Gettype ()
		{
			return $this->_type;
		}
//envoi type
		public function Settype ($t)
		{
			return $this->_type = $t;
		}

//affiche en tableau les caracteristiques des pokemons
		public function affiche (){
			//affiche en retour à la ligne
			echo '<pre>';
			print_r(array(
				name=>$this->Getname(),
				pv=>$this->Getpv(),
				level=>$this->Getlevel(),
				attack1=>$this->Getattack1(),
				attack2=>$this->Getattack2(),
				type=>$this->Gettype()
				));
			echo '</pre>';
		}
}

?>
