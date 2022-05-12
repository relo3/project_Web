<?php
	class admins{
		private $id_a=null;
		private $nom_a=null;
		private $prenom_a=null;
		private $mail_a=null;
		function __construct($id_a, $nom_a, $prenom_a, $mail_a, $id_c){
            $this->id_a=$id_a;
			$this->nom_a=$nom_a;
			$this->prenom_a=$prenom_a;
			$this->mail_a=$mail_a;
			
		}


        function getid_a(){
			return $this->id_a;
		}
		

		function getnom_a(){
			return $this->nom_a;
		}

		function getprenom_a(){
			return $this->prenom_a;
		}

		function getmail_a(){
			return $this->mail_a;
		}


        function setnom_a(string $nom_a){
			$this->nom_a=$nom_a;
		}
	
		function setprenom_a(string $prenom_a){
			$this->prenom_a=$prenom_a;
		}
		function setmail_a(string $mail_c){
			$this->mail_c=$mail_c;
		}

    }

    ?>