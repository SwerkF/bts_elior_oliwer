<?php
session_start();
include "includes/header.php" ;
include "includes/modele/connexion.php" ;
include "includes/modele/gestion_bdd.php" ;
include "includes/fonc/fonctions_date.php" ;
?>

<body>
	
	<!--========================================================
                        	CONTENT
	=========================================================-->
	<div id="content">
		<div class="page-404 bg-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Erreur 404</h2>
						<h3>Désolé, la page demandée n'existe pas.</h3>
						<h5>La page demandée a peut-être été supprimée, déplacée ou est temporairement indisponible.
                                                    Cliquez sur le lien pour <a href="index.php?uc=accueil">retour à la page d'accueil.</a></h5>
                                        </div>
				</div>
			</div>
		</div>
	</div>
<?php
include "includes/footer.php" ;
?>
</body>

</html>