<?php
	class event{
		private $numEvent=null;
		private $max=null;
		private $nbrTicket=null;	
		
		function __construct($numEvent,$nbrTicket, $max){
			$this->numEvent=$numEvent;
			$this->max=$max;
			$this->nbrTicket=$nbrTicket;
	
		}

		function getnumEvent(){
			return $this->numEvent;
		}

		function getmax(){
			return $this->max;
		}

		function getnbrTicket(){
			return $this->nbrTicket;
		}
	
	

		function setnumEvent(string $numEvent){
			$this->numEvent=$numEvent;
		}

		function setmax(int $max){
			$this->max=$max;
		}
		
		
		
	}


?>