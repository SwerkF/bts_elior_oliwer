
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."</div><br />";
        
              echo 'Modifier un paiement<br />' ;
              
              if ($lePaiement['typeReglement'] == 1) $checked1 = " checked" ; else $checked1 = "";
              if ($lePaiement['typeReglement'] == 2) $checked2 = " checked" ; else $checked2 = "";
              
              echo ''
              . '<form method="POST" name="modif-regl" action="index.php?uc=gestion&action=paiement&role=modifier&id='.$lePaiement['id'].'" onsubmit="return verifMajRegl()" autocomplete="off">' ;
              var_dump($lePaiement) ;

              echo '<select name="idEleve">' ;
              foreach ($lesEleves as $leEleve)
              {
                  if ($leEleve['id'] == $lePaiement['idEleve'])
                      echo '<option selected value="'.$leEleve['id'].'">'.$leEleve['nom']." ".$leEleve['prenom']." (BTS".$leEleve['idClasse'].")";
                  else
                    echo '<option value="'.$leEleve['id'].'">'.$leEleve['nom']." ".$leEleve['prenom']." (BTS".$leEleve['idClasse'].")";
              }
              echo '</select><br />' ;
              
              echo ''
                      . 'Date : <input type="date" class="input_text2" name="datePaiement" value="'.$lePaiement['datePaiement'].'"><br />'
                      . 'Montant : <input type="text" class="input_text2" size="8" name="montant" value="'.$lePaiement['montant'].'"><br />'
                      . 'Espèces <input type="radio" name="typeReglement" value="1"'.$checked1.'>&nbsp;&nbsp;'
                      . 'Chèque <input type="radio" name="typeReglement" value="2"'.$checked2.'><br />'  
                      . 'Remarques : <input type="text" class="input_text2" name="remarques" value="'.$lePaiement['remarques'].'"><br />'   ;

              
              echo ''
              . '<input type="submit" class="btn btn-info connectbt" value="valider">
                              .</form>' ;
              ?>
          </div>

      </div>