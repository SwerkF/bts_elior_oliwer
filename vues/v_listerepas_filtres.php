
      <div class="home">

          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."</div><br />";

              if ($messageValid != '') echo $messageValid.'<br /><br >' ;

              echo 'Liste des repas<br />' ;

              echo ''
              . '<form method="POST" name="listerepas-filtres" action="index.php?uc=gestion&action=listerepas&role=traiter" onsubmit="return verifFiltresRepas()" autocomplete="off">'
                      . 'du : <input type="date" class="input_text2" name="dateDebut"> au : <input type="date" class="input_text2" name="dateFin"><br />'
                      . 'Nombre total de repas par date <input type="radio" name="typeRepas" checked value="1">&nbsp;&nbsp;'
                      . 'Détail des repas pris par date <input type="radio" name="typeRepas" value="2"><br />'
                      . 'Nombre total de repas par formule <input type="radio" name="typeRepas" value="3"><br />'
              . '<input type="submit" class="btn btn-info connectbt" value="valider">
                              .</form>' ;
              ?>
          </div>

      </div>