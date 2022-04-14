<?php
	class Abonnement{
		private $id=null;
		private $nom=null;
		private $capacite=null;
		private $type=null;
		
		
		
		
		function __construct($nom, $capacite, $type){

			$this->nom=$nom;
			$this->capacite=$capacite;
			$this->type=$type;
			

		}
		function get_ID(){
			return $this->id;
		}
		function get_nom(){
			return $this->nom;
		}
		function get_capacite(){
			return $this->capacite;
		}
		function get_type(){
			return $this->type;
		}
		
		
		function set_id($id){
			$this->id=$id;
		}
		function set_nom($nom){
			$this->nom=$nom;
		}
		function set_capacite($capacite){
			$this->capacite=$capacite;
		}
		function set_type( $type){
			$this->type=$type;
		}
		
		
		
	}


?>