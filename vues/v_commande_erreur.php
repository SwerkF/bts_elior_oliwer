
      <div class="home">
          <div id="Home_title_ss">
              <?php
              echo '<div id="Home_title_struct">ERREUR : veuillez sélectionner un repas</div></br></br>' ;
              ?>
              
              
              <form name="repas_saisie" action="index.php?uc=commande&action=valider" method="POST" autocomplete="off">

              <?php
              echo '<div id="Titles">'.$_SESSION['ident']."</div>";
              echo 'Commande repas du '.$ladateJMA.'</br></br>' ;
              ?>

          
          
        <?php
            foreach ($lesMenus as $leMenu)
            {
                echo $leMenu['descriptionMenu'].'&nbsp;&nbsp;&nbsp;<input type="radio" name="numMenu" value ="'.$leMenu['numMenu'].'"><br />' ;
            }
            
            echo '</br>
                <input type="submit" class="btn btn-info connectbt" name="valider" value="Valider">&nbsp;&nbsp;' ;      
        ?>
       
          </form>
          </div>
      </div>