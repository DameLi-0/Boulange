<?php
    require_once "./outil/outils.php";
    require_once "./model/manager/OrdiManager.class.php";

    
class OrdiControleur{
    private $ordiManager;
    
    public function __construct(){
        $this->ordiManager = new OrdiManager();
        //$this->livreManager->chargementLivres();
    }
    
        // AFFICHER L ACCUEIL
        function afficherAccueil(){
            session_status();
            require "vue/accueil.view.php";
        }

        //AFFICHER ORDINATEURS
        function afficherOrdis(){
            $tabOrdis=$this->ordiManager->lireOrdis();
            require "vue/liste/afficherOrdis.view.php";
        }

        // SUPPRIMER UN ORDINATEURS
        function supprimerOrdi($id){
            $nomImage = $this->ordiManager->lireOrdinateurById($id)->getImage();
            unlink("public/images/".$nomImage);
            $this->ordiManager->supprimerOrdiBD($id);
            header("Location: index.php?action=tab");
        }

        // AFFICHER ORDINATEUR PAR SON ID
        function afficherOrdi($id){
            $ordi= $this->ordiManager->lireOrdinateurById($id);
            require "vue/client/afficherOrdi.view.php";
    }

        // CREATION D UN ORDINATEUR
        function creerOrdinateur(){
            require "vue/form/ordi/formulaireOrdi.view.php";
        }

        // VALIDATION DE L'ORDINATEUR
        function creerValidationOrdinateur(){
            $file = $_FILES['image'];
            $repertoire = "public/images/";
            $nomImageAjoute = ajouterImage($file,$repertoire);
            $this->ordiManager->ajouterOrdiBd($_POST['denomination'],$_POST['prix'],$_POST['processeur'],$_POST['ecran'],$_POST['vive'],$nomImageAjoute,$_POST['lien']);
            header("Location: index.php?action=tab");
        }

        //AFFICHER CARTE D'ORDINATEUR
        function afficherCardOrdis(){
            $bddOrdis=$this->ordiManager->lireOrdis();
            require "vue/client/cardOrdis.view.php";
        }

        //AJOUTER ORDINATEUR AU PANIER
        function ajouerterOrdinateurPanier($id){
            echo "controleur ajouerterOrdinateurPanier id=".$id;
            if(!isset($_SESSION['ordi'])){
                $_SESSION['ordi'] = array();
            }
            if(in_array($id, $_SESSION['ordi'])){
                echo $id." est déjà commander<br>";
            }
            else {
                $_SESSION['ordi'][]=$id;
            }
            afficherTableau($_SESSION['ordi'],"SESSION['ordi']");
            header("Location: index.php?action=catalogue");
            }

            // AFFICHER LA COMMANDE
            function afficherCommande(){
                foreach($_SESSION['ordi'] as $id){
                    $ordi[]= $this->ordiManager->lireOrdinateurById($id);
                }
                if (isset($ordi)) {
                    if (count($ordi) > 0) {
                    require "vue/client/afficherCommande.view.php";
                }
            }
        }

            // SUPPRIMER LA COMMANDE
            function supprimerCommande(){
                $_SESSION['ordi'] = array();
                afficherTableau($_SESSION,"controleur - supprimerCommand _SESSION");
                header("Location: index.php");
            }

            // MODIFIER UN ORDINATEUR
            function modifierOrdinateur($id){
                $ordi=$this->ordiManager->lireOrdinateurById($id);
                require "vue/form/ordi/modifierOrdinateur.view.php";
            }
            

            
            function modifierValidationOrdinateur(){
                $repertoire = "public/images/";
                $nomImageAjoute = $_POST['image'];
                $file = $_FILES['image'];
                $repertoire = "public/images/";
                
                if($_FILES['image']['size'] > 0){
                    $nomImageAjoute = ajouterImage($file,$repertoire);
                }
                $ordi= $this->ordiManager->modificationOrdinateurBD($_POST['id'],$_POST['denomination'], $_POST['prix'],$_POST['processeur'],$_POST['ecran'],$_POST['vive'],$nomImageAjoute,$_POST['lien']); 
                header("Location: index.php?action=tab");
                
            }            
}
?>