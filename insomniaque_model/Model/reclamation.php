<?php
	class reclamation{
		private $id=null;
		private $Contenu=null;
		private $idTicket=null;
		private $idUser=null;

		function __construct($id,$Contenu,$idTicket,$idUser){
			$this->id=$id;
			$this->Contenu=$Contenu;
			$this->idTicket=$idTicket;
			$this->idUser=$idUser;
		}

		function getId(){
			return $this->id;
		}

		function getContenu(){
			return $this->Contenu;
		}
		
		function setContenu(string $Contenu){
			$this->Contenu=$Contenu;
		}

		function getidTicket(){
			return $this->idTicket;
		}

		function setidTicket(string $idTicket){
			$this->idTicket=$idTicket;
		}

		function getidUser(){
			return $this->idUser;
		}

		function setiduser(string $idUser){
			$this->idUser=$idUser;
		}
		
	}


?>