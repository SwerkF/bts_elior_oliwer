<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="includes/img/repas.ico" width="16" height="16">
    <script src="https://kit.fontawesome.com/b20eb41686.js" crossorigin="anonymous"></script>

    <title>Repas BTS</title>
    

    <!-- Bootstrap core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/jquery-ui.min.css" rel="stylesheet">
    <link href="includes/css/animate.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
    
  </head>
  <body>
    <div class="loader"></div>
    <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
               Repas BTS
            </a>
        </li>
        
        <?php
        //Menu ETUDIANT
        if (isset($_SESSION['statut']))
        {
            if ($_SESSION['statut']==1)
            {
                echo '     
            <li>
                <a href="index.php?uc=commande" id="bthome">Commande du jour</a>
            </li>
            <li>
                <a href="index.php?uc=commande&action=plus" id="bthome">Commande ++</a>
            </li>
            <li>
                <a href="index.php?uc=commande&action=solde" id="bthome">Voir solde</a>
            </li>
            <li>
                <a href="index.php?uc=commande&action=menu" id="bthome">Voir menus</a>
            </li>
            <li>
                <a href="index.php?uc=commande&action=voir" id="bthome">Voir commandes</a>
            </li>
            <li>
                <a href="index.php?uc=commande&action=annuler" id="bthome">Annuler commande</a>
            </li>
            <li>
                <a href="index.php?uc=commande&action=mdp" id="bthome">Changer mot de passe</a>
            </li>
            <li>
                <a href="index.php?uc=decnx" id="admin">Déconnexion</a>
            </li>' ;
            }
            //AGNES
            if ($_SESSION['statut']==2)
            {
                echo '     
            <li>
                <a href="index.php?uc=gestion&action=afficher" id="bthome">Repas du jour</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=plus" id="bthome">Repas ++</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=menu" id="bthome">Saisir menus</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=formule" id="bthome">Formules</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=crediter" id="bthome">Créditer compte élève</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=compte" id="bthome">Voir comptes élèves</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=paiement" id="bthome">Liste des paiements</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=listerepas" id="bthome">Repas période</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=param" id="bthome">Paramètres</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=mdp" id="bthome">Changer mot de passe</a>
            </li>
            <li>
                <a href="index.php?uc=decnx" id="admin">Déconnexion</a>
            </li>' ;
            }
            //ELIOR
            if ($_SESSION['statut']==4)
            {
                echo '     
            <li>
                <a href="index.php?uc=gestion&action=afficher" id="bthome">Repas du jour</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=formule" id="bthome">Formules</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=plus" id="bthome">Repas ++</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=listerepas" id="bthome">Repas période</a>
            </li>
            <li>
                <a href="index.php?uc=gestion&action=mdp" id="bthome">Changer mot de passe</a>
            </li>
            <li>
                <a href="index.php?action=decnx" id="admin">Déconnexion</a>
            </li>' ;
            }
        }
        ?>
        
    </ul>
</nav>
        
<div id="page-content-wrapper">
<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
    <span class="hamb-top"></span>
<span class="hamb-middle"></span>
<span class="hamb-bottom"></span>
</button>