<?php
include 'C:\xampp\htdocs\Configuration\config.php';
include_once 'C:\xampp\htdocs\Configuration\Model\concerts.php';
class concertsC {
    function afficherconcerts(){
        $sql="SELECT * FROM tabconcert";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
    function supprimerconcerts($id){
        $sql="DELETE FROM tabconcert WHERE id=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }

    function ajouterconcerts($concerts){
        $sql="INSERT INTO tabconcert (id,concert,artiste,date_c,adresse,prix,id_admin,image_f) 
        VALUES (:id,:concert,:artiste,:date_c,:adresse,:prix,:id_admin,:image_f)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $concerts->getid(),
                'concert' => $concerts->getconcert(),
                'artiste' => $concerts->getartiste(),
                'date_c'=> $concerts-> getdate(),
                'adresse'=>$concerts->getadresse(),
                'prix'=> $concerts->getprix(),
                'id_admin'=> $concerts->getid_admin(),
                'image_f'=> $concerts->getimage_f()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
   
    function recupererconcerts($id){
        $sql="SELECT * from tabconcert where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $concerts=$query->fetch();
            return $concerts;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
    function modifierconcerts($concerts, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE tabconcert SET 
                    concert= :concert,
                    artiste= :artiste,
                    date_c= :date_c,
                    adresse= :adresse,
                    prix= :prix,
                    id_admin=:id_admin,
                    image_f=::image_f
                    
                WHERE id= :id'
            );
            $query->execute([
                
                'id' =>$id,
                'concert' => $concerts->getconcert(),
                'artiste' => $concerts->getartiste(),
                'date_c'=> $concerts-> getdate(),
                'adresse'=>$concerts->getadresse(),
                'prix'=>$concerts->getprix(),
                'id_admin'=>$concerts->getid_admin(),
                'image_f'=>$concerts->getimage_f()

                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function classementconcerts1(){
        $sql="SELECT id,concert,artiste,date_c,adresse,prix,id_admin FROM tabconcert order by id asc";
        $db = config::getConnexion();
        try{
            $listeconcerts = $db->query($sql);
            return $listeconcerts;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }

    function classementconcerts2(){
        $sql="SELECT id,concert,artiste,date_c,adresse,prix,id_admin FROM tabconcert order by date_c asc";
        $db = config::getConnexion();
        try{
            $listeconcerts = $db->query($sql);
            return $listeconcerts;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }

    function classementconcerts3(){
        $sql="SELECT id,concert,artiste,date_c,adresse,prix,id_admin FROM tabconcert order by prix asc";
        $db = config::getConnexion();
        try{
            $listeconcerts = $db->query($sql);
            return $listeconcerts;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
	}
 ?>










