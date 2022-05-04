<?php

class ticket
{
    private $id = null;
    private $nom = null;
    private $prenom = null;
    private $email = null;
    private $dateConcert;
    private $idUser;
    private $paye;

    function __construct($id, $nom, $prenom, $email, $dateConcert, $idUser, $paye)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->dateConcert = $dateConcert;
        $this->idUser = $idUser;
        $this->paye = $paye;
    }

    function getId()
    {
        return $this->id;
    }

    function getNom()
    {
        return $this->nom;
    }

    function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail(string $email)
    {
        $this->email = $email;
    }

    function getdateConcert()
    {
        return $this->dateConcert;
    }

    function setdateConcert(string $dateConcert)
    {
        $this->dateConcert = $dateConcert;
    }

    function getidUser()
    {
        return $this->idUser;
    }

    function setiduser(string $idUser)
    {
        $this->idUser = $idUser;
    }

    function setnumEvent(string $numEvent)
    {
        $this->numEvent = $numEvent;
    }

    function getpaye()
    {
        return $this->paye;
    }

    function setpaye(string $paye)
    {
        $this->paye = $paye;
    }
}


?>