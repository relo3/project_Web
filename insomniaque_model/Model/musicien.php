<?php
	class musicien{
		private $id=null;
		private $prenom=null;
		private $nom=null;
		private $revenu=null;
		private $lieu=null;
		
		
		
		
		function __construct($prenom, $nom, $revenu,$lieu){

			$this->prenom=$prenom;
			$this->nom=$nom;
			$this->revenu=$revenu;
			$this->lieu=$lieu;

		}
		
		function get_id(){
			return $this->id;
		}
		function get_prenom(){
			return $this->prenom;
		}
		function get_nom(){
			return $this->nom;
		}
		function get_revenu(){
			return $this->revenu;
		}
		function get_lieu(){
			return $this->lieu;
		}
		
		
		
		
		
	}


?>