<?php
include 'C:\xampp\htdocs\Configuration\config2.php';
include_once 'C:\xampp\htdocs\Configuration\Model\admins.php';
class adminsC {
    function afficheradmins(){
        $sql="SELECT * FROM admin_c";
        $db = config2::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
    
    function supprimeradmins($id_a){
        $sql="DELETE FROM admin_c WHERE id_a=:id_a";
        $db = config2::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_a', $id_a);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeSsage());
        }
    }

    function ajouteradmins($admins){
        $sql="INSERT INTO admin_c (id_a,nom_a,prenom_a,mail_a) 
        VALUES (:id_a,:nom_a,:prenom_a,:mail_a)";
        $db = config2::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'id_a'=> $admins->getid_a(),
                'nom_a'=> $admins->getnom_a(),
                'prenom_a'=> $admins->getprenom_a(),
                'mail_a'=> $admins->getmail_a()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function recupereradmins($id_a){
        $sql="SELECT * from admin_c where id_a=$id_a";
        $db = config2::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $admins=$query->fetch();
            return $admins;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
    function modifieradmins($admins, $id_a){
        try {
            $db = config2::getConnexion();
            $query = $db->prepare(
                'UPDATE admin_c SET 
                    nom_a= :nom_a,
                    prenom_a= :prenom_a,
                    mail_a= :mail_a
                    
                WHERE id_a= :id_a'
            );
            $query->execute([
                
                'id_a' =>$id_a,
                'nom_a' => $admins->getnom_a(),
                'prenom_a' => $admins->getprenom_a(),
                'mail_a'=> $admins->getmail_a()
                
                

                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	}
 ?>