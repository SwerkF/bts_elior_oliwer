
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<p>Ajouter un élève :<a href="index.php?uc=gestion&action=ajouter"><img src="includes/img/plus2.png" width=" 20px" /></a></p>';
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."<br /></div>";
              echo 'Afficher les soldes des comptes élèves<br />' ;
           
                 //entête tableau 
                           
                 echo '<div id="list_paiements" class="table-responsive"><table><tr>'
                           . '<th>Nom</th>'
                           . '<th>Prénom</th>'
                           . '<th>Classe</th>'
                           . '<th>Solde</th>'                                              
                           . '</tr>' ;
                   foreach($lesComptes as $leCompte) {

                   if (isset($_REQUEST['action']) && ($_REQUEST['action'] == 'modifUtilisateur') 
                    && isset($_REQUEST['id']) && ($_REQUEST['id'] == $leCompte['id']))
                    {
                        echo '<tr>'
                        . '<form method="POST" action="index.php?uc=gestion&action=valider&id='.$leCompte['id'].'">'
                        . '<td>' . '<input type="text" size="15" maxlength="40" name="modifNom" style="color:#000000" value="' . $leCompte['nom'] . '" >' . '</td>'
                        . '<td>' . '<input type="text" size="15" maxlength="40" name="modifPrenom" style="color:#000000" value="' . $leCompte['prenom'] . '" >' . '</td>'
                        . '<td>' . '<input type="text" size="15" maxlength="40" name="modifClasse" style="color:#000000"  value="' . $leCompte['idClasse'] . '" >' . '</td>'
                        . '<td>'.$leCompte['creditRepas'].'</td>'
                        . '<td>' . '<input type="submit" class="btn btn-info connectbt" value="Valider" >' . '</td>'
                        . '</form>'
                        . '<td>' . '<a href="index.php?uc=gestion&action=compte"><input type="submit" class="btn btn-info connectbt" value="Annuler" ></a>' . '</td>'
                        . '<td>' 
                        . '</tr>';
                    }else{
                        echo '<tr>'
                        . '<td>'.$leCompte['nom'].'</td>'
                        . '<td>'.$leCompte['prenom'].'</td>'
                        . '<td>BTS'.$leCompte['idClasse'].'</td>'
                        . '<td>'.$leCompte['creditRepas'].'</td>'
                        . '<td>' . '<a href="index.php?uc=gestion&action=modifUtilisateur&id='.$leCompte['id'].'"><button type="submit" class="btn btn-info connectbt">Modifier</button></a>' . '</td>'
                        . '<td>' . '<a href="index.php?uc=gestion&action=supUtilisateur&id='.$leCompte['id'].'"><button type="submit" class="btn btn-info connectbt">Supprimer</button></a>' . '</td>'
                        . '</tr>';
                        }
            
            

        }
                 

                        
                      
            
                    
              echo '</table></div>' ;

              ?>
            
          </div>

      </div>