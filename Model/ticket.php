<?php
	class ticket{
		private $Numtickets=null;
		private $nom=null;
		private $prenom=null;
	
		private $email=null;
		private $dateConcert;
		
		private $password=null;
		function __construct($Numtickets, $nom, $prenom,$email, $dateConcert){
			$this->Numtickets=$Numtickets;
			$this->nom=$nom;
			$this->prenom=$prenom;
			
			$this->email=$email;
			$this->dateConcert=$dateConcert;
		}
		function getNumtickets(){
			return $this->Numtickets;
		}
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){
			return $this->prenom;
		}
	
		function getEmail(){
			return $this->email;
		}
		function getdateConcert(){
			return $this->dateConcert;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
		
		function setEmail(string $email){
			$this->email=$email;
		}
		function setdateConcert(string $dateConcert){
			$this->dateConcert=$dateConcert;
		}
		
	}


?>