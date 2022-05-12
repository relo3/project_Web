<?php
	class musique{
		private $id_du_morceaux=null;
		private $id_genre=null;
		private $nom_du_morceaux=null;
		private $nom_artiste=null;
		private $genre=null;
	
		
		
		
		function __construct($id_du_morceaux,$nom_du_morceaux,$nom_artiste,$genre,$id_genre){
			$this->id_du_morceaux=$id_du_morceaux;
			$this->nom_du_morceaux=$nom_du_morceaux;
			$this->nom_artiste=$nom_artiste;
			$this->genre=$genre;
			$this->id_genre=$id_genre;
		}
		
		function get_genre(){
			return $this->genre;
		}
		function get_nom_morceaux(){
			return $this->nom_du_morceaux;
		}
		function get_id_morceaux(){
			return $this->id_du_morceaux;
		}
		function get_nom_artiste(){
			return $this->nom_artiste;
		}

		function get_id_genre(){
			return $this->id_genre;
		}
		function set_nom_du_morceaux( $id_nom_morceaux){
			$this->id_nom_morceaux=$id_nom_morceaux;
		}
		function set_id_du_morceaux( $id_du_morceaux){
			$this->id_du_morceaux=$id_du_morceaux;
		}
			
		function set_id_genre( $genre){
			$this->id_genre=$id_genre;
		}

		function set_artiste($nom_artiste){
			$this->nom_artiste=$nom_artiste;
		}
		function set_genre( $genre){
			$this->genre=$genre;
		}

	
		
	}

	?>