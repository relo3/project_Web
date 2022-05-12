<?php
	include '../config.php';
	include_once '../Model/user.php';
	class userC {
		function afficherusers(){
			$sql="SELECT * FROM loginform";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherusersF(){
			$sql="SELECT ID FROM loginform where sexe like'%F%'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherusersM(){
			$sql="SELECT ID FROM loginform where sexe LIKE '%M%'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		

			function logusers($usercall,$pass){
				$sql="SELECT count(ID) as num FROM loginform where usercall='".$usercall."' and pass='".$pass."' ";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMeesage());
				}
		}
		function verif($usercall){
			$sql="SELECT count(ID) as num FROM loginform where usercall='".$usercall."' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
	}function logadmin($usercall){
		$sql="SELECT count(*) as num FROM loginform where usercall='".$usercall."'and adm=1 ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
}
		function supprimeruser($id){
			$sql="DELETE FROM loginform WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouteruser($user){
			$sql="INSERT INTO loginform (usercall,pass,mail, nom, prenom,sexe) 
			VALUES (:usercall,:pass,:mail, :nom, :prenom,:sexe)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'usercall' => $user->get_usercall(),
					'pass' => $user->get_pass(),
					'mail' => $user->get_mail(),
					'nom' => $user->get_nom(),
					'prenom' => $user->get_prenom(),
					'sexe' => $user->get_sexe()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereruser($id){
			$sql="SELECT * from loginform where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieruser($user, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE loginform SET 
						usercall= :usercall, 
						pass= :pass, 
						mail= :mail, 
						nom= :nom, 
						prenom= :prenom
					WHERE id= :id'
				);
				$query->execute([
					'usercall' => $user->get_usercall(),
					'pass' => $user->get_pass(),
					'mail' => $user->get_mail(),
					'nom' => $user->get_nom(),
					'prenom' => $user->get_prenom(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>