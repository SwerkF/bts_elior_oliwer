
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">'.$_SESSION['ident']."</div>";
              echo 'Paramètres<br /><br />' ;
              ?>
          </div>
          
         
        <?php
          
            echo '<form name="param_saisie" method="POST" action="index.php?uc=gestion&action=paramenregistrer" autocomplete="off">'
            . 'Heure limite pour la commande du jour : <input type="text" class="input_text2" name="heureDebutCde" value ="'.$params['heureDebutCde'].'" size=10><br />'
            . 'Nombre de repas autorisés à crédit : <input type="text" class="input_text2" name="nbRepasDecouvert" value ="'.$params['nbRepasDecouvert'].'" size=5><br /><br />'
            . '<input type="submit" value="Enregistrer" class="btn btn-info connectbt">'
            . '</form>' ;
        

        ?>
      </div>