<?php
	class reclamation{
		private $Numtickets=null;
		private $reclamation;
		private $dateConcert;

		function __construct($Numtickets, $dateConcert,$reclamation){
			$this->Numtickets=$Numtickets;
			$this->reclamation=$reclamation;
			
		
			$this->dateConcert=$dateConcert;
		}
		
		function getNumtickets(){
			return $this->Numtickets;
		}
		
		function getdateConcert(){
			return $this->dateConcert;
		}
		
		function setdateConcert(string $dateConcert){
			$this->dateConcert=$dateConcert;
		}

		function getReclamation(){
			return $this->reclamation;
		}

		function setReclamation(string $reclamation){
			$this->reclamation=$reclamation;
		}
		
	}


?>