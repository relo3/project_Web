<?php
	class pack{
		private $id_pack=null;
		private $nom=null;

		private $offre=null;
		
		
		
		function __construct(  $nom,$offre){

		
			$this->nom=$nom;
			$this->offre=$offre;
			

		}
		function get_id_pack(){
			return $this->id_pack;
		}
		
		function get_nom(){
			return $this->nom;
		}
		function get_offre(){
			return $this->offre;
		}
		
		
	
		
		
	}


?>