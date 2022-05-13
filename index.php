<?php
session_start();
date_default_timezone_set('Europe/Paris');


if (!isset($_REQUEST['uc']))
{
    include "vues/v_authentification.php" ;
}
else
{
    if ($_REQUEST['uc']=='decnx') {
        session_destroy();
        header("Location:index.php");
    }
 else {
        include "includes/header.php" ; 
        include "includes/modele/connexion.php" ;
        include "includes/modele/gestion_bdd.php" ;
        include "includes/fonc/fonctions_date.php" ;
        include "vues/FPDF.class.php" ;
        include "controleurs/c_principal.php" ;
        include "includes/footer.php" ;
    }
}
?>
