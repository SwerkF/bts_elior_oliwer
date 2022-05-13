
      <div class="home">

          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."</div><br />";

              if ($_SESSION['typeRepas'] == 3)
              echo 'Total de repas par formules <br />' ;
              else if ($_SESSION['typeRepas'] == 2)
                  echo 'Liste détaillée des repas par date<br />' ;
              else if($_SESSION['typeRepas'] == 1)
                  echo 'Cumul des repas par date<br />' ;

              echo ''
              . '<form method="POST" name="listerepas-filtres" action="index.php?uc=gestion&action=listerepas&role=traiter" onsubmit="return verifFiltresRepas()" autocomplete="off">'
                      . 'du : <input type="date" class="input_text2" name="dateDebut" value="'.$dateDebut.'"> '
                      . 'au : <input type="date" class="input_text2" name="dateFin" value="'.$dateFin.'"><br />'
                      . 'Nombre total de repas par date <input type="radio" checked name="typeRepas" value="1">&nbsp;&nbsp;'
                      . 'Détail des repas pris par date <input type="radio" name="typeRepas" value="2"><br />'
                      . 'Nombre total de repas par formule <input type="radio" name="typeRepas" value="3"><br />'
              . '<input type="submit" class="btn btn-info connectbt" value="valider">&nbsp;&nbsp;&nbsp;&nbsp;'
              . '<a href="index.php?uc=gestion&action=listerepas&role=export"><input type="button" class="btn btn-info connectbt" value="Export Excel"></a>'
                              . '</form><br/>' ;

            if ($lesRepasPris)
                echo '<a href="#" onclick="javascript:ouvrirPage(\'vues/liste_repas.php\')">Afficher la liste au format PDF</a>' ;
            else {
                echo 'Aucun repas pour cette période'  ;
            }

             if ($excel)
             {
                echo '<p align="center">
                    La liste des repas au format Excel a été générée.<br>
                    <a href="bts_listerepas_export.csv">Cliquer <b>ICI</b> pour ouvrir ce fichier.</a></p>' ;
             }

             $cpt = 0 ;
             $cumulNbRepas = 0 ;
             foreach ($lesRepasPris as $leRepas) {
                 //entête tableau
                 if ($cpt==0)
                 {
                    if($_SESSION['typeRepas'] == 3) {
                        echo '<div id="list_paiements" class="table-responsive"><table><tr>'
                        . '<th>Nombre de repas</th>'
                        . '<th>Type formule</th>'
                        . '</tr>' ;
                    }
                    if ($_SESSION['typeRepas'] == 2)
                    {
                         echo '<div id="list_paiements" class="table-responsive"><table><tr>'
                        . '<th>Date</th>'
                        . '<th>Nom</th>'
                        . '<th>Prénom</th>'
                        . '</tr>' ;
                    }
                    else if($_SESSION['typeRepas'] == 1)
                    {
                     echo '<div id="list_paiements" class="table-responsive"><table><tr>'
                        . '<th>Date</th>'
                        . '<th>Nombre</th>'
                        . '</tr>' ;
                    }
                 }
                 $cpt++ ;

                if($_SESSION['typeRepas'] == 3) {
                    echo '<tr>'
                    . '<td>'.$leRepas['NBR'].'</td>'
                    . '<td>'.$leRepas['Formule'].'</td>'
                    . '</tr>';
                    $cumulNbRepas++;
                }
                if ($_SESSION['typeRepas'] == 2)
                {
                    echo '<tr>'
                    . '<td>'.$leRepas['dateMenu'].'</td>'
                    . '<td>'.$leRepas['nom'].'</td>'
                    . '<td>'.$leRepas['prenom'].'</td>'
                    . '</tr>' ;
                    $cumulNbRepas++;
                }
                else if($_SESSION['typeRepas'] == 1) {
                    echo '<tr>'
                    . '<td>'.$leRepas['dateMenu'].'</td>'
                    . '<td>'.$leRepas['nbRepas'].'</td>'
                    . '</tr>' ;
                    $cumulNbRepas+=$leRepas['nbRepas'] ;
                }

              }
              echo '</table>' ;

              if ($cpt==0)
                  echo '<br /><br />Aucun repas' ;
              else
                  echo '<br /><br />Nombre total de repas pour la période : '.$cumulNbRepas ; ;
              ?>

          </div>

      </div>