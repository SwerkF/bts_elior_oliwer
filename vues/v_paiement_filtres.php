
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."</div><br />";
              
              if ($messageValid != '') echo $messageValid.'<br /><br >' ;
        
              echo 'Afficher les paiements<br />' ;
              
              echo ''
              . '<form method="POST" name="paiement-filtres" action="index.php?uc=gestion&action=paiement&role=traiter" onsubmit="return verifFiltres()" autocomplete="off">'
                      . 'du : <input type="date" class="input_text2" name="dateDebut"> au : <input type="date" class="input_text2" name="dateFin"><br />'
                      . 'Espèces <input type="radio" name="typeReglement" value="1">&nbsp;&nbsp;'
                      . 'Chèque <input type="radio" name="typeReglement" value="2">&nbsp;&nbsp;'
                      . 'Tous <input type="radio" name="typeReglement" value="3"><br />'  
                      . 'Elève(s) : ' ;
              
              echo '<select name="idEleve">'
              . '<option value="0">-- Tous --' ;
              
              foreach ($lesEleves as $leEleve)
              {
                  echo '<option value="'.$leEleve['id'].'">'.$leEleve['nom']." ".$leEleve['prenom']." (BTS".$leEleve['idClasse'].")";
              }
              echo '</select><br />' 
              . '<input type="submit" class="btn btn-info connectbt" value="valider">
                              .</form>' ;
              ?>
          </div>

      </div>