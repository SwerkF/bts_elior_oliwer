
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."</div>";
              
              if ($messageValid != '') echo $messageValid.'<br /><br >' ;
              
              
              echo 'Créditer le compte d\'un étudiant<br />' ;
              echo '<select name="idEleve" onchange="javascript:chargerPageCrediterCompte(this.value)">'
              . '<option value="0">-- choisir élève --' ;
              
              foreach ($lesEleves as $leEleve)
              {
                  echo '<option value="'.$leEleve['id'].'">'.$leEleve['nom']." ".$leEleve['prenom']." (BTS".$leEleve['idClasse'].")";
              }
              echo '</select>' ;
              ?>
          </div>

      </div>