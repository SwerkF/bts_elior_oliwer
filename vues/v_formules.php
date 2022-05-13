<div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<p>Ajouter une formule : <a href="index.php?uc=gestion&action=ajoutFormule"><img src="includes/img/plus2.png" width=" 20px" /></a></p>';
              echo '<div id="Titles">Utilisateur connecté : '.$_SESSION['ident']."<br /></div>";
           
                 //entête tableau 
                           
                 echo '<div id="list_paiements" class="table-responsive"><table><tr>'
                           . '<th>Formule</th>'
                           . '<th>Prix</th>'                                              
                           . '</tr>' ;
                   foreach($lesFormules as $laFormule) {

                   if (isset($_REQUEST['action']) && ($_REQUEST['action'] == 'modifFormule') 
                    && isset($_REQUEST['id']) && ($_REQUEST['id'] == $laFormule['numFormule']))
                    {
                        echo '<tr>'
                        . '<form method="POST" action="index.php?uc=gestion&action=validerModif&id='.$laFormule['numFormule'].'">'
                        . '<td>' . '<input type="text" size="15" maxlength="40" name="modifFormule" style="color:#000000" value="' . $laFormule['Formule'] . '" >' . '</td>'
                        . '<td>' . '<input type="number" step="0.25" maxlength="20" name="modifPrix" style="color:#000000" value="' . $laFormule['prixRepas'] . '" >' . '</td>'
                        . '<td>' . '<input type="submit" class="btn btn-info connectbt" value="Valider" >' . '</td>'
                        . '</form>'
                        . '<td>' . '<a href="index.php?uc=gestion&action=formule"><input type="submit" class="btn btn-info connectbt" value="Annuler" ></a>' . '</td>'
                        . '<td>' 
                        . '</tr>';
                    }else{
                        echo '<tr>'
                        . '<td>'.$laFormule['Formule'].'</td>'
                        . '<td>'.$laFormule['prixRepas'].'</td>'
                        . '<td>' . '<a href="index.php?uc=gestion&action=modifFormule&id='.$laFormule['numFormule'].'"><button type="submit" class="btn btn-info connectbt">Modifier</button></a>' . '</td>'
                        . '<td>' . '<a href="index.php?uc=gestion&action=supFormule&id='.$laFormule['numFormule'].'" ><button type="submit" class="btn btn-info connectbt">Supprimer</button></a>' . '</td>'
                        . '</tr>';
                        }
            
            

        }
                 

                        
                      
            
                    
              echo '</table></div>' ;

              ?>
            
          </div>

      </div>