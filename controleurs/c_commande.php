<?php

if (!isset($_SESSION['idUtil'])) header("Location:index.php");
if (!isset($_SESSION['statut'])) header("Location:index.php");
if ($_SESSION['statut']!=1) header("Location:index.php");

if ($_SESSION['changerMdp'])
{
    $action = "mdp" ;
}
 else {
    if (!isset($_REQUEST['action']))
            $action = "afficher" ;
    else
            $action = $_REQUEST['action'] ;
 }
	
switch ($action)
{
	case "afficher" : { 
            $ladateAMJ = getDateCommande() ;
            $ladateJMA = getDateJMA($ladateAMJ) ;
            //JOUR AVANT
            if (isset($ladateAMJ))
            {
                //A t-il déjà commandé ?              
                $nb=getCommandeAujourdhui($ladateAMJ,$_SESSION['idUtil'] );
                if ($nb>=1)
                {
                    //erreur : déjà commandé
                    $message = "Vous avez déjà commmandé pour la date du ".$ladateJMA ;
                    require "vues/v_erreur.php" ; 
                }
                else 
                {
                    $nbMenus = getNbMenusJour($ladateAMJ) ;
                    if ($nbMenus==0)
                    {
                        //erreur : déjà commandé
                        $message = "Aucun menu disponible pour la date du ".$ladateJMA ;
                        require "vues/v_erreur.php" ; 
                    }
                    else 
                    {
                        $lesMenus = getLesMenusDate($ladateAMJ) ;
                        $nbMenus = getNbMenusDate($ladateAMJ) ;
                        $solde = getSolde($_SESSION['idUtil']);  
                        $params = getParams();
                        $prixRepas = $params['prixRepas'];
                        $nbRepasDecouvert = $params['nbRepasDecouvert'] ;
                        $nbRepasPossibles = floor(($solde + $prixRepas * $nbRepasDecouvert)/$prixRepas) ;
                        if ($nbRepasPossibles < 1)
                        {
                            //erreur : solde insuffisant
                            $message = "Votre solde est de ".$solde." € et ne vous permet pas de commander" ;
                            require "vues/v_erreur.php" ; 
                        }
                        else
                        {
                            $_SESSION['plus'] = false ;
                            require "vues/v_commande_saisie.php" ;  
                        }
                    }                   
                }
            }
            else
            {
                //erreur délai dépassé
                $message = "Vous ne pouvez plus commander pour le ".$ladateJMA.", </ br>il faut passer commande avant ".$TimeDebut ;
                require "vues/v_erreur.php" ; 
            }
            break ;             
        }
        
        case "plus" : {
            $ladateAMJ = getDateCommande() ;
            $lesDates = getLesDatesNonCommandes($ladateAMJ, $_SESSION['idUtil']);
            require "vues/v_dates.php" ; 
            break ;
        }
        
        case "choixDate" : {
            $_SESSION['plus'] = true ;
            $ladateURL = $_REQUEST['date'] ;
            $ladateAMJ = substr($ladateURL,0,4)."-".substr($ladateURL,4,2)."-".substr($ladateURL,6,2) ;
            $ladate = getDateCommande() ;
            $lesDates = getLesDatesNonCommandes($ladate, $_SESSION['idUtil']);
            $ladateJMA = getDateJMA($ladateAMJ) ;
            if (isset($ladateAMJ))
            {
                //A t-il déjà commandé ?              
                $nb=getCommandeAujourdhui($ladateAMJ,$_SESSION['idUtil'] );
                if ($nb>=1)
                {
                    //erreur : déjà commandé
                    $message = "Vous avez déjà commmandé pour la date du ".$ladateJMA ;
                    require "vues/v_erreur.php" ; 
                    if ($_SESSION['plus']) require "vues/v_dates.php" ;
                }
                else 
                {
                    $nbMenus = getNbMenusJour($ladateAMJ) ;
                    if ($nbMenus==0)
                    {
                        //erreur : déjà commandé
                        $message = "Aucun menu disponible pour la date du ".$ladateJMA ;
                        require "vues/v_erreur.php" ; 
                        if ($_SESSION['plus']) require "vues/v_dates.php" ;
                    }
                    else 
                    {
                        $lesMenus = getLesMenusDate($ladateAMJ) ;
                        $nbMenus = getNbMenusDate($ladateAMJ) ;
                        $solde = getSolde($_SESSION['idUtil']);  
                        $params = getParams();
                        $prixRepas = $params['prixRepas'];
                        $nbRepasDecouvert = $params['nbRepasDecouvert'] ;
                        $nbRepasPossibles = floor(($solde + $prixRepas * $nbRepasDecouvert)/$prixRepas) ;
                        if ($nbRepasPossibles < 1)
                        {
                            //erreur : solde insuffisant
                            $message = "Votre solde est de ".$solde." € et ne vous permet pas de commander" ;
                            require "vues/v_erreur.php" ; 
                        }
                        else
                        {
                            $lesMenus = getLesMenusDate($ladateAMJ) ;
                            $nbMenus = getNbMenusDate($ladateAMJ) ;
                            require "vues/v_commande_saisie.php" ;    
                        }
                    }                   
                }
            }
            else
            {
                //erreur délai dépassé
                $message = "Vous ne pouvez plus commander pour le ".$ladateJMA.", </ br>il faut passer commande avant ".$TimeDebut ;
                require "vues/v_erreur.php" ; 
                if ($_SESSION['plus']) require "vues/v_dates.php" ;
            }
            break ;
        }
        //%%%%%%%%%%%%%%%%%%%%%%%%%%%
        case "valider" : { 
            $numMenu = $_REQUEST['numMenu'];
            $ladateAMJ = $_REQUEST['date'] ;
            $ladateJMA  = getDateJMA($ladateAMJ) ;
            $lesDates = getLesDatesNonCommandes($ladateAMJ, $_SESSION['idUtil']);
            $lesMenus = getLesMenusDate($ladateAMJ) ;
            $nbMenus = getNbMenusDate($ladateAMJ) ;
            $prixFormule = getFormule1($numMenu, $ladateAMJ);
            if (isset($_REQUEST['numMenu']) ) 
            {
                $nb=getCommandeAujourdhui($ladateAMJ,$_SESSION['idUtil'] );
                if ($nb>=1)
                {
                    //erreur : déjà commandé
                    $message = "Vous avez déjà commmandé pour la date du ".$ladateJMA ;
                    require "vues/v_erreur.php" ; 
                    
                    if ($_SESSION['plus']) 
                    {
                        $lesDates = getLesDatesNonCommandes($ladateAMJ, $_SESSION['idUtil']);
                        require "vues/v_dates.php" ;
                    }
                }
                else
                {
                    //enregistrement repas$ladateAMJ
                    enregistrerCommande($ladateAMJ, $_REQUEST['numMenu'], $_SESSION['idUtil']) ;
                    $message = "Votre commande pour le ".$ladateJMA." a bien été enregistrée" ; 
                    require "vues/v_ok.php" ; 
                    
                    if ($_SESSION['plus']) 
                    {
                        $lesDates = getLesDatesNonCommandes($ladateAMJ, $_SESSION['idUtil']);
                        require "vues/v_dates.php" ;
                    }
                }
            }
            else
            {
                //erreur
                $message = "ERREUR : veuillez sélectionner un repas" ;
                require "vues/v_erreur.php" ; 
                require "vues/v_commande_saisie.php" ; 
            }
            
            break ;             
        }
        
        
        case "annuler" : { 
            $ladateAMJ = getDateCommande() ;
            $ladateJMA = getDateJMA($ladateAMJ) ;
            $lesDates = getLesDatesCommandes($ladateAMJ, $_SESSION['idUtil']);
            require "vues/v_dates_annulation.php" ; 
            break;
        }
        
        case "validok" : {
            $ladateURL = $_REQUEST['date'] ;
            $ladateAMJ = substr($ladateURL,0,4)."-".substr($ladateURL,4,2)."-".substr($ladateURL,6,2) ;
            $ladateJMA = getDateJMA($ladateAMJ) ;
            $nb=getCommandeAujourdhui($ladateAMJ,$_SESSION['idUtil'] );
            if ($nb==1)
            {
                //annuler repas
                annulerCommande($ladateAMJ, $_SESSION['idUtil']) ;
                $message = "Votre commande du ".$ladateJMA." a bien été annulée" ;
                require "vues/v_ok.php" ; 
            }
            else
            {
                $message = "Annulation impossible, vous n'avez pas commmandé le ".$ladateJMA ;
                require "vues/v_erreur.php" ; 
            }          
            break ;             
        }
        
        case "voir" : { 
            $ladateAMJ = date("Y-m-d") ;
            $ladateJMA = date("d/m/Y") ;
            $lesCommandes = getLesCommandesUtil($_SESSION['idUtil']) ;
            require "vues/v_commande_voir.php" ; 
            
            break ;             
        }
        
        case "menu" : { 
            $lesMenus = getLesMenus() ;
            require "vues/v_menus_voir.php" ;    
            break ;             
        }
        
        case "solde" : {
            $solde = getSolde($_SESSION['idUtil']);  
            $params = getParams();
            $prixRepas = $params['prixRepas'];
            $nbRepasDecouvert = $params['nbRepasDecouvert'] ;
            $nbRepasPossibles = floor(($solde + $prixRepas * $nbRepasDecouvert)/$prixRepas) ;
            require "vues/v_voir_solde.php" ;
            break ;
        }
        
        case "mdp" : { 
            $_SESSION['changerMdp'] = false ;
            //affiche la vue de saisie des menus
            require "vues/v_mdp_saisir.php" ;
            break ;                        
        }
        
        case "mdpenregistrer" : { 
            //affiche la vue de saisie des menus
            $mdp = $_REQUEST['mdp1'] ;
            enrmdp($mdp, $_SESSION['idUtil']);
            $message = "Votre mot de passe a été modifié" ;
            require "vues/v_ok.php" ; 
            break ;                        
        }
}
?>
