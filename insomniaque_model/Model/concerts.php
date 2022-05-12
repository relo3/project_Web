<?php
	class concerts{
		private $id=null;
		private $concert=null;
		private $artiste=null;
		private $date_c=null;
		private $adresse=null;
		private $prix=null;
		private $id_admin=null;
		private $image_f=null;
		
		function __construct($id, $concert,$artiste,$date_c, $adresse, $prix, $id_admin, $image_f){
            $this->id=$id;
			$this->concert=$concert;
			$this->artiste=$artiste;
			$this->date_c=$date_c;
			$this->adresse=$adresse;
			$this->prix=$prix;
			$this->id_admin=$id_admin;
			$this->image_f=$image_f;
		}


        function getid(){
			return $this->id;
		}
		

		function getconcert(){
			return $this->concert;
		}

		function getartiste(){
			return $this->artiste;
		}

		function getdate(){
			return $this->date_c;
		}
        function getadresse(){
            return $this->adresse;
        }

		function getprix(){
            return $this->prix;
        }

		function getid_admin(){
            return $this->id_admin;
        }

		function getimage_f(){
            return $this->image_f;
        }

        function setconcert(string $concert){
			$this->concert=$concert;
		}
	
		function setartiste(string $artiste){
			$this->artiste=$artiste;
		}
		function setdate(date $date_c){
			$this->date_c=$date_c;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setprix(string $prix){
			$this->prix=$prix;
		}
		function setid_admin(int $id_admin){
			$this->id_admin=$id_admin;
		}
		
		function setimage_f(int $image_f){
			$this->image_f=$image_f;
		}
		
    }

    ?>