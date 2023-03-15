<?php
	class Abonnement{
		private $id=null;
		private $date_debut=null;
		private $date_fin=null;
		private $prix=null;
		
		private $pack=null;
		
		
		
		function __construct( $date_debut, $date_fin, $prix,$pack){

			$this->date_debut=$date_debut;
			$this->date_fin=$date_fin;
			$this->prix=$prix;
		
            $this->pack=$pack;
		}
		function get_ID(){
			return $this->id;
		}
		function get_dateDebut(){
			return $this->date_debut;
		}
		function get_dateFin(){
			return $this->date_fin;
		}
		function get_Prix(){
			return $this->prix;
		}
		function get_nbAbonnement(){
			return $this->nb_abonnement;
		}
		function get_pack()
		{ return $this->pack;}
		
		function set_id($id){
			$this->id=$id;
		}
		function set_Date_debut($date_debut){
			$this->date_debut=$date_debut;
		}
		function set_date( $prix){
			$this->prix=$prix;
		}
		function set_nb_abonnement($nb_abonnement){
			$this->nb_abonnement=$nb_abonnement;
		}
		
		
	}


?>