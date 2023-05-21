<?php
    require_once "./model/connexionBDD.class.php";
    require_once './model/class/Ordi.class.php';

    
class OrdiManager extends Connexion {
    private $ordis;//tableau d'Ordinateurs
    public function getOrdis(){
        return $this->ordis;
    }    
        function lireOrdis(){
        $stmt = $this->getBdd()->prepare("SELECT * FROM ordis");
        $stmt->execute();
        $bddOrdis = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        foreach($bddOrdis as $ordi){
            $l=new Ordi($ordi['id'], $ordi['denomination'], $ordi['prix'], $ordi['processeur'], $ordi['ecran'], $ordi['vive'], $ordi['image'], $ordi['lien']);
            $this->ordis[]=$l;
        }
        return $this->ordis;
        }

        function ajouterOrdiBd($denomination,$prix,$processeur,$ecran,$vive,$image,$lien){
            $pdo = $this->getBdd();
            $req = "
            INSERT INTO ordis (denomination, prix , processeur, ecran, vive, image, lien)
            values (:denomination, :prix, :processeur, :ecran, :vive, :image, :lien)";
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(":denomination",$denomination,PDO::PARAM_STR);
            $stmt->bindValue(":prix",$prix,PDO::PARAM_STR);
            $stmt->bindValue(":processeur",$processeur,PDO::PARAM_STR);
            $stmt->bindValue(":ecran",$ecran,PDO::PARAM_STR);
            $stmt->bindValue(":vive",$vive,PDO::PARAM_STR);
            $stmt->bindValue(":image",$image,PDO::PARAM_STR);
            $stmt->bindValue(":lien",$lien,PDO::PARAM_STR);
            $resultat = $stmt->execute();
            $stmt->closeCursor();
            if($resultat > 0){
                echo "ordi insérer id=".$pdo->lastInsertId()."<br>";
            }        
        }

        function supprimerOrdiBD($id){
            $pdo = $this->getBdd();
            $req = "Delete from ordis where id = :idOrdi";
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(":idOrdi",$id,PDO::PARAM_INT);
            $resultat = $stmt->execute();
            $stmt->closeCursor();
            if($resultat > 0){
                //echo "ordi supprimer id=".$id."<br>";  --- Test affichage ID ordi supprimer ---
                header("Location: index.php?action=tab");
            }
        }

        function lireOrdinateurById($id){
        $stmt = $this->getBdd()->prepare("SELECT * FROM ordis WHERE id=:id");
        $stmt->bindValue(":id",$id,PDO::PARAM_STR);
        $cpt = $stmt->execute();
        $ordi = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();  
        //echo "id=".$id."<br>";
        $l=new Ordi($ordi['id'], $ordi['denomination'], $ordi['prix'], $ordi['processeur'], $ordi['ecran'], $ordi['vive'], $ordi['image'], $ordi['lien']);
        return $l;
        }

        function modificationOrdinateurBD($id,$denomination,$prix,$processeur,$ecran,$vive,$image,$lien){
            $pdo = $this->getBdd();
            $req = "
            update ordis 
            set denomination = :denomination, prix = :prix, processeur = :processeur, ecran = :ecran, vive = :vive, image = :image, lien = :lien
            where id = :id";
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(":id",$id,PDO::PARAM_INT);
            $stmt->bindValue(":denomination",$denomination,PDO::PARAM_STR);
            $stmt->bindValue(":prix",$prix,PDO::PARAM_INT);
            $stmt->bindValue(":processeur",$processeur,PDO::PARAM_STR);
            $stmt->bindValue(":ecran",$ecran,PDO::PARAM_STR);
            $stmt->bindValue(":vive",$vive,PDO::PARAM_STR);
            $stmt->bindValue(":image",$image,PDO::PARAM_STR);
            $stmt->bindValue(":lien",$lien,PDO::PARAM_STR);
            $resultat = $stmt->execute();
            $stmt->closeCursor();

            if($resultat > 0){
                echo "ordi modifier id=".$id."<br>";
            }
        }
    }
?>