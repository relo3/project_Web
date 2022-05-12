<?php
	include 'C:/xampp/htdocs/Configuration/config3.php';
	include_once 'C:/xampp/htdocs/Configuration/Model/abonnement.php';
	class AbonnementC {
		function afficherabonnement(){
			$sql="SELECT * FROM lieux";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficher_abonnement($id_pack) 
 {


	$sql="SELECT * FROM musicien where lieu=$id_pack";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}

	
		}
		function afficherlieuxpage()
    {
        if(isset($_GET['page'])){
        $page=(int)$_GET['page'] ;
        }
        
        if($page=="" || $page=="1")
{
        $page1=0;
}
        else
{
        $page1=($page*3)-3;
}    


        $sql="SELECT * FROM lieux LIMIT $page1,3";
        $db = config3::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
    }
	
		function afficherfrontabonnement(){
			$sql="SELECT nom,capacite,type FROM lieux";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function classementlieux(){
			$sql="SELECT nom,capacite,type FROM lieux order by capacite desc";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerabonnement($id){
			$sql="DELETE FROM lieux WHERE id=:id";
			$db = config3::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterabonnement($abonnement){
			$sql="INSERT INTO lieux (nom, capacite,type) 
			VALUES (:nom,:capacite, :type)";
			$db = config3::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					'nom' => $abonnement->get_nom(),
					'capacite' => $abonnement->get_capacite(),
					'type' => $abonnement->get_type(),
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererabonnement($id){
			$sql="SELECT * from lieux where id=$id";
			$db = config3::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$abonnement=$query->fetch();
				return $abonnement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierabonnement($abonnement, $id){
			try {
				$db = config3::getConnexion();
				$query = $db->prepare(
					"UPDATE lieux set
						nom=:nom, 
						capacite=:capacite, 
						type=:type
						
					where id=:id"
				);
			   $query->execute([
				'nom' => $abonnement->get_nom(),
				'capacite' => $abonnement->get_capacite(),
				'type' => $abonnement->get_type(),
				
				'id'=>$id
			]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

function afficher_musicien($idlieu)
 {


try{

$pdo=getConnexion();
$query=$pdo->prepare('SELECT * FROM musicien where lieu=:idlieu');


$query->execute(['lieu'=>$idlieu]);
$liste=$query->fetchAll();
return $liste;



}
 catch (PDOException $e) {
    $e->getMessage();
}



 }
		
	}


	
?>