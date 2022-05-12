<?php
	class genre{
		private $id_genre=null;
		private $genre=null;

		private $tag=null;
	
		
		
		
		function __construct($id_genre,$genre,$tag){

			$this->id_genre=$id_genre;

			$this->genre=$genre;
		
	
			$this->tag=$tag;

		}
		
	
		function get_id_genre(){
			return $this->id_genre;
		}

		function get_genre(){
			return $this->genre;
		}
		function get_tag(){
			return $this->tag;
		}
		
		function set_id_genre( $genre){
			$this->id_genre=$id_genre;
		}
	
		function set_genre( $genre){
			$this->genre=$genre;
		}
        function set_tag($tag){
			$this->tag=$tag;
		}
	}

	?>