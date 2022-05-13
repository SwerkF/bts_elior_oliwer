
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."</div><br />";
              echo 'Créditer le compte de <b>'.$leEleve['nom']." ".$leEleve['prenom']."</b> : solde actuel = ".$leEleve['creditRepas']."<br /><br />"
                      . "</div>" ;
              echo '<b>Enregistrer un règlement :</b><br /><br />' ;
              
              echo ''
              . '<form method="POST" name="saisie-regl" action="index.php?uc=gestion&action=crediter&role=enregistrer&id='.$leEleve['id'].'" onsubmit="return verifRegl()" autocomplete="off">'
                      . 'Date : <input type="date" class="input_text2" name="datePaiement" value="'.date("Y-m-d").'"><br />'
                      . 'Montant : <input type="text" class="input_text2" size="8" name="montant"><br />'
                      . 'Espèces <input type="radio" name="typeReglement" value="1">&nbsp;&nbsp;'
                      . 'Chèque <input type="radio" name="typeReglement" value="2"><br />'  
                      . 'Remarques : <input type="text" class="input_text2" name="remarques"><br />'  
                          . '<input type="submit" class="btn btn-info connectbt" value="valider">
                              .</form>' ;
                      

              ?>
          </div>

      </div>