
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">'.$_SESSION['ident']."</div>";
              echo 'Changer votre mot de passe<br /><br />' ;
              ?>
          </div>
          
         
        <?php
        
        if ($_SESSION['statut']==1) $action="index.php?uc=commande&action=mdpenregistrer" ; else $action="index.php?uc=gestion&action=mdpenregistrer" ;
          
            echo '<form name="mdp_saisie" method="POST" action="'.$action.'"  onsubmit="return verifForm()" autocomplete="off">'
            . 'Nouveau mot de passe (8 caractères minimum) : <input type="password" class="input_text2" name="mdp1" size=10><br />'
            . 'Confirmer le mot de passe : <input type="password" class="input_text2" name="mdp2" size=10><br /><br /><br />' 
            . '<input type="submit" value="Enregistrer" class="btn btn-info connectbt">'
            . '</form>' ;
        

        ?>
      </div>