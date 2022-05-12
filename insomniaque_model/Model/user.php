<?php
	class user{
		
		private $id=null;
		private $usercall=null;
		private $pass=null;
		private $mail=null;
		private $nom=null;
		private $prenom=null;
		private $vkey=null;
		private $verified=null;
		private $createdate;
		private $sexe=null;

		function __construct($usercall,$pass,$mail, $nom, $prenom, $sexe){
			$this->usercall=$usercall;
			$this->pass=$pass;
			$this->mail=$mail;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->sexe=$sexe;
		}
		function get_id(){
			return $this->id;
		}
		
		function get_usercall(){
			return $this->usercall;
		}
		function get_pass(){
			return $this->pass;
		}
		function get_mail(){
			return $this->mail;
		}
		function get_nom(){
			return $this->nom;
		}
		function get_prenom(){
			return $this->prenom;
		}
		function get_vkey(){
			return $this->vkey;
		}
		function get_verified(){
			return $this->verified;
		}
		function get_createdate(){
			return $this->createdate;
		}
		function get_sexe(){
			return $this->sexe;
		}
		function set_usercall(string $usercall){
			$this->usercall=$usercall;
		}
			function set_pass(string $pass){
			$this->pass=$pass;
		}
		function set_mail(string $mail){
			$this->mail=$mail;
		}
		function set_nom(string $nom){
			$this->nom=$nom;
		}
		function set_penom(string $prenom){
			$this->prenom=$prenom;
		}
		function set_vkey(string $vkey){
			$this->vkey=$vkey;
		}
		function set_verified(string $verified){
			$this->verified=$verified;
		}
		function set_createdate(string $createdate){
			$this->createdate=$createdate;
		}
		function set_sexe(string $sexe){
			$this->sexe=$sexe;
		}
		
	}


?>