<?php
if (isset($_REQUEST['action'])) 
{
    $action = $_REQUEST['action'];
    switch ($action)
    {
        case "verif" :    {   
                                $login = $_REQUEST['login'];
                                $mdp = md5($_REQUEST['mdp']);                           
                                $result= verifierIdentification($login, $mdp) ;
                                if ($login == $mdp) $_SESSION['changerMdp'] = true ; else $_SESSION['changerMdp'] = false ;
                                if ($result)    
                                {
                                    if ($_SESSION['statut']==1)
                                    {
                                        header ("Location:index.php?uc=commande") ; }
                                    else
                                    {
                                        header ("Location:index.php?uc=gestion") ; }
                                }
                                else 
                                {
                                    $_SESSION['error'] = "Identification incorrecte";
                                    header ("Location:index.php") ;
                                }
                                break ;
                           }

    }
}
?>
