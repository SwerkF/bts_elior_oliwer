<!DOCTYPE html><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="includes/img/repas.ico" width="16" height="16">

    <title>Repas BTS</title>
<html lang="fr">
<head>
    

    <!-- Bootstrap core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/jquery-ui.min.css" rel="stylesheet">
    <link href="includes/css/animate.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
    <link href="includes/css/dashboard.css" rel="stylesheet">
</head>

<body>
<div class="loader"></div>
<div class="bgloader"></div>
<div id="background"></div>
    <!--<h1 class="titre" style="text-align:center;">Connexion <br> Administrateur</h1>-->
    <center>
    <div class="titre">
      <div class="glyphicon glyphicon-cutlery" id="usericon"></div>
    </div>
  </center>
<div class="container">
    <div class="col-lg-6 col-md-10 col-lg-offset-3 col-md-offset-5" id="formulaire">
        <p><?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }

            ?></p>
        <form id="connect" method="POST" action="index.php?uc=auth&action=verif" style="margin-top:8%;">
            <?php
            if (isset($_SESSION['error'])) echo '<div class="homePhone"><center>'.$_SESSION['error'].'</center></div>' ;
            ?>
            <center><input type="text" id="loginUser" size="32" class="form-control loginconnect" placeholder="Votre Pseudo" name="login" required></center>
            <center><input type="password" id="passwordUser" size="32" class="form-control passwordconnect" placeholder="******" name="mdp" required></center>
            <center><button type="submit" class="btn btn-info connectbt">Valider</button></center>
        </form>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="includes/js/connexionstyle.js"></script>
</html>