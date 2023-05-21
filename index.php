<?php
    require_once "./controleur/OrdiControleur.class.php";
    require_once './controleur/UserControleur.class.php';
    require_once "outil/outils.php";
    session_start();
    $OrdiControleur = new OrdiControleur;
    $userControleur = new UserControleur();
    
try{    
    if (empty($_GET['action']) || !isset($_GET['action'])) {
        $livreController->afficherAccueil();
    } else {
        switch ($_GET['action']) {

            case "tab": $OrdiControleur->afficherOrdis();
                break;
            case "suppr" : $OrdiControleur->supprimerOrdi($_GET['id']);
                break;
            case "lire" : $OrdiControleur->afficherOrdi($_GET['id']);
                break;
            case "creer" : $OrdiControleur->creerOrdinateur($_GET['id']);
                break;
            case "valid-creer" : $OrdiControleur->creerValidationOrdinateur();
                break;
            case "catalogue" : $OrdiControleur->afficherCardOrdis(); 
                break;
            case "addpanier" : $OrdiControleur->ajouerterOrdinateurPanier($_GET['id']); 
                break;
            case "panier" : $OrdiControleur->afficherCommande(); 
                break;            
            case "supprpanier" : $OrdiControleur->supprimerCommande(); 
                break;
     
            default: throw new Exception("La page n'existe pas");
        }
    }
}catch(Exception $e){
    $title = "Erreur";
    $erreurMsg = $e->getMessage();
    require "vue/erreur.view.php";
}
    
    
    
     
    /*
        
        

            elseif($_GET['action']=="supprpanier"){ 
                echo "Supprimer commande";
                $OrdiControleur->supprimerCommande();
            }
            
            elseif($_GET['action'] == 'modifier'){ 
                $OrdiControleur->modifierOrdinateur($_GET['id']);
            }
            elseif($_GET['action'] == 'valid-modifier'){            
                $OrdiControleur->modifierValidationOrdinateur();
            }
            
            
            
            
            
            
            
            elseif($_GET['action'] == 'connexion'){            
                $AdminControleur->connexion();
            }    
            
            elseif($_GET['action'] == 'valid-connexion'){            
                $AdminControleur->validConnexion();
            }            
            
            elseif($_GET['action'] == 'deconnexion'){            
                $AdminControleur->deconnexion();
            }            
             




            
            
            
            elseif($_GET['action'] == 'tabAdmin'){            
                $AdminControleur->afficherAdmin();
            } 

            elseif($_GET['action'] == 'creerAdmin'){            
                $AdminControleur->creerAdmin();
            } 
            
            elseif($_GET['action'] == 'valid-creer-admin'){            
                $AdminControleur->creerValidationAdmin();
            }  
            
            elseif($_GET['action'] == 'supprAdmin'){
                $AdminControleur->supprimerAdmin($_GET['id']);
            }  

            elseif($_GET['action'] == 'modifAdmin'){
                $AdminControleur->modifierAdmin($_GET['id']);
            } 

            elseif($_GET['action'] == 'valid-modif-admin'){            
                $AdminControleur->modifierValidationAdmin();
            }
            
            elseif($_GET['action'] == 'error404'){
                throw new Exception("La page n'existe pas - erreur 404");
            }            
    }
}catch(Exception $e){
    $erreurMsg = $e->getMessage();
    require "vue/erreurs/erreurs.view.php";
}*/
?>


