
      <div class="home">
          <form name="repas_saisie" action="index.php?uc=commande&action=valider" method="POST" autocomplete="off">
          <div id="Home_title_ss">
              <?php
              
            if ($solde < $prixRepas)
            {
                echo '<div id="Titles"><b>'.$_SESSION['ident'].'</b>'
                        . '<br />Solde = '.$solde.' €.</div>'
                        . '<div id="Home_title_struct">Veuillez recharger votre compte.'
                        . '<br />Crédit autorisé : '.$nbRepasPossibles.' repas</div>';
            }
            else {
                echo '<div id="Titles"><b>'.$_SESSION['ident'].'</b>'
                        . '<br />Solde = '.$solde." €, soit ".$nbRepasPossibles." repas</div>";
            }
 
            echo 'Commande repas du '.$ladateJMA.'</br></br>' ;
            echo '<input type="hidden" name="date" value="'.$ladateAMJ.'">' ;
              ?>
          </div>
          
         
        <?php
        if ($nbMenus == 1) $checked = " checked " ; else $checked = "" ;
        foreach ($lesMenus as $leMenu)
        {
            echo '<input type="radio" name="numMenu" method = "POST" value ="'.$leMenu['numMenu'].'"'.$checked.'">&nbsp;&nbsp;&nbsp;'.$leMenu['descriptionMenu'].'<br />' ;
        }

        echo '</br>
            <input type="submit" class="btn btn-info connectbt" name="valider" value="Valider">&nbsp;&nbsp;' ;      
        ?>
       
          </form>
      </div>