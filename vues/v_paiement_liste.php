
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."</div><br />";
        
              echo 'Afficher les paiements<br />' ;
              
              if ($typeReglement == 1) $checked1 = " checked" ; else $checked1 = "";
              if ($typeReglement == 2) $checked2 = " checked" ; else $checked2 = "";
              if ($typeReglement == 3) $checked3 = " checked" ; else $checked3 = "";
              
              echo ''
              . '<form method="POST" name="paiement-filtres" action="index.php?uc=gestion&action=paiement&role=traiter" onsubmit="return verifFiltres()" autocomplete="off">'
                      . 'du : <input type="date" class="input_text2" name="dateDebut" value="'.$dateDebut.'"> '
                      . 'au : <input type="date" class="input_text2" name="dateFin" value="'.$dateFin.'"><br />'
                      . 'Espèces <input type="radio" name="typeReglement" value="1"'.$checked1.'>&nbsp;&nbsp;'
                      . 'Chèque <input type="radio" name="typeReglement" value="2"'.$checked2.'>&nbsp;&nbsp;'
                      . 'Tous <input type="radio" name="typeReglement" value="3"'.$checked3.'><br />'  
                      . 'Elève(s) : ' ;
              
              echo '</div>'
                      . '<select name="idEleve">'
              . '<option value="0">-- Tous --' ;
              
              foreach ($lesEleves as $leEleve)
              {
                  if (isset($idEleve) && ($idEleve ==$leEleve['id']))
                    echo '<option selected value="'.$leEleve['id'].'">'.$leEleve['nom']." ".$leEleve['prenom']." (BTS".$leEleve['idClasse'].")";
                  else
                    echo '<option value="'.$leEleve['id'].'">'.$leEleve['nom']." ".$leEleve['prenom']." (BTS".$leEleve['idClasse'].")";
              }
              echo '</select><br />' 
              . '<input type="submit" class="btn btn-info connectbt" value="valider">&nbsp;&nbsp;&nbsp;&nbsp;'
              . '<a href="index.php?uc=gestion&action=paiement&role=export"><input type="button" class="btn btn-info connectbt" value="Export Excel"></a>'
                              . '</form>' ;
              
             if ($excel)
             {
                echo '<p align="center">
                    La liste des paiements au format Excel a été générée.<br>
                    <a href="bts_paiements_export.csv">Cliquer <b>ICI</b> pour ouvrir ce fichier.</a></p>' ;
             }
              
             $cpt = 0 ;            
             foreach ($lesPaiements as $lePaiement) {
                 //entête tableau 
                 if ($cpt==0)
                 {
                     echo '<div id="list_paiements" class="table-responsive"><table><tr>'
                        
                        . '<th>Date</th>'
                        . '<th>Nom</th>'
                        . '<th>Prénom</th>'
                        . '<th>Montant</th>'
                        . '<th>Type Règl.</th>'
                        . '<th>Remarques</th>' 
                        . '<th></th>'                                               
                        . '</tr>' ;
                 }
                 $cpt++ ;
                 if ($lePaiement['typeReglement'] == 1) $typeRegl = "Espèces" ; else $typeRegl = "Chèque" ; 
                 
                 echo '<tr>'

              . '<td>'.$lePaiement['datePaiement'].'</td>'
              . '<td>'.$lePaiement['nom'].'</td>'
              . '<td>'.$lePaiement['prenom'].'</td>'
              . '<td>'.$lePaiement['montant'].'</td>'
              . '<td>'.$typeRegl.'</td>'
              . '<td>'.$lePaiement['remarques'].'</td>'
                                       . '<td>
                    <div class="input-group">
                    <div class="input-group-btn">
                    <button type="button" class="btn btn-default">Actions</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                    <li><a href="index.php?uc=gestion&action=paiement&role=maj&id='.$lePaiement['id'].'" title="Modifier le paiement du '.getDateJMA($lePaiement['datePaiement']).' pour '.$lePaiement['nom'].' '.$lePaiement['prenom'].'">Modifier</a></li>
                    <li><a href="index.php?uc=gestion&action=paiement&role=suppr&id='.$lePaiement['id'].'" title="Supprimer le paiement du '.getDateJMA($lePaiement['datePaiement']).' pour '.$lePaiement['nom'].' '.$lePaiement['prenom'].'">Supprimer</a></li>
                    </ul>
                    </div>
                    </td>'
              . '</tr>' ;
    
              }
              echo '</table>' ;
              
              if ($cpt==0)
                  echo '<br /><br />Aucun paiement' ;
              ?>
            
          </div>

      </div>