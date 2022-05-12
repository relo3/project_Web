<?php
	include 'C:/xampp/htdocs/Configuration/config3.php';
	include_once 'C:/xampp/htdocs/Configuration/model/musicien.php';
	class musicienC {
		function affichermusicien(){
			$sql="SELECT * FROM musicien";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		function classementmusicien(){
			$sql="SELECT nom,prenom,revenu FROM musicien order by revenu desc";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimermusicien($id){
			$sql="DELETE FROM musicien WHERE id=:id";
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
		
		function ajoutermusicien($musicien){
			$sql="INSERT INTO musicien (prenom,nom,revenu,lieu) 
			VALUES (:prenom,:nom,:revenu,:lieu)";
			$db = config3::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					'prenom'=> $musicien->get_prenom(),
					'nom' => $musicien->get_nom(),
					'revenu' => $musicien->get_revenu(),
					'lieu' => $musicien->get_lieu()
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperermusicien($id){
			$sql="SELECT * from musicien where id=$id";
			$db = config3::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$musicien=$query->fetch();
				return $musicien;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		

         
		function modifiermusicien($musicien, $id){
			try {
				$db = config3::getConnexion();
				$query = $db->prepare(
					"UPDATE musicien set
						prenom=:prenom, 
						nom=:nom, 
						revenu=:revenu,
						lieu=:lieu
						
					where id=:id"
				);
			$query->execute([
				'prenom' => $musicien->get_prenom(),
				'nom' => $musicien->get_nom(),
				'revenu' => $musicien->get_revenu(),
				'lieu' => $musicien->get_lieu(),
				
				'id'=>$id
			]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function Select_id_lieu()
	{

		$sql="SELECT  id FROM  lieux";
		$db = config3::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());


		}

	}
	function affichermusicienpage()
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

        $sql="SELECT * FROM musicien LIMIT $page1,3";
        $db = config3::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
    }

function afficherfrontmusicien(){
			$sql="SELECT prenom,nom,revenu FROM musicien";
			$db = config3::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

}


	
?>