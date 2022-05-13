
      <div class="home">
          
          <div id="Home_title_ss">
              <br /><br />
              <?php
              echo '<div id="Titles">'.$_SESSION['ident']."</div>";
              echo 'Menus du ' ;
              echo '<input type="date" class="input_text2" name="dateMenu" value="'.$ladateAMJ.'" onchange="javascript:chargerPageSaisirMenu(this.value)">' ;
              echo '<input type="hidden" name="date" value="'.$ladateAMJ.'">' ;
              ?>
          </div>
          
         
        <?php
        $nb=0 ;
        foreach ($lesMenus as $leMenu)
        {
            $nbCommandes = getNbCommandesMenuJour($ladateAMJ, $leMenu['numMenu']) ;
            
            echo '<form name="repas_saisie'.$leMenu['numMenu'].'" method="POST" action="index.php?uc=gestion&action=menuenregistrer" autocomplete="off">'
            . '<input type="hidden" name="dateMenu" value="'.$ladateAMJ.'">'
            . '<input type="hidden" name="numMenu" value="'.$leMenu['numMenu'].'">'       
            . '<b>'.$leMenu['numMenu'].'</b>&nbsp;&nbsp;'
            . '<input type="text" class="input_text2" name="descMenu'.$leMenu['numMenu'].'" value ="'.$leMenu['descriptionMenu'].'" size=100>&nbsp;&nbsp;'
            . '<img src="includes/img/notification_done.png" title="valider ce menu" onclick="javascript:submitMenu('.$leMenu['numMenu'].')">&nbsp;&nbsp;' ;
            
            // pas de suppression si déjà des commandes
            
            if ($nbCommandes == 0)
            {
                echo 
             '<img src="includes/img/notification_remove.png" title="supprimer ce menu" onclick="javascript:supprMenu(\''.$ladateJMA.'\',\''.$ladateAMJ.'\','.$leMenu['numMenu'].')"></a><br />' ;
            }
            else
            {
                echo '<img src="includes/img/notification_warning.png" title="'.$nbCommandes.' repas commandés"></a><br />' ;
            }
            echo ''
            . '</form>' ;
            $nb=$leMenu['numMenu'];
        }

        
        //nouveau menu
        $nb++;
        echo 'Nouveau menu à enregistrer<br />'
        . '<form name="repas_saisie'.$nb.'" method="POST" action="index.php?uc=gestion&action=menuajouter" autocomplete="off">'
                . '<input type="hidden" name="dateMenu" value="'.$ladateAMJ.'">'
                . '<input type="hidden" name="numMenu" value="'.$nb.'">'  
        . '<b>'.$nb.'</b>&nbsp;&nbsp;'
        . '<tr>'
        . '<td> <input type="text" class="input_text2" name="descMenu'.$nb.'" value ="" size=100>&nbsp;&nbsp;</td>'
        . '<td> <select name ="Formule">';
        foreach($lesFormules as $laFormule) {
            echo '<option value='.$laFormule['numFormule'].'>'.$laFormule['Formule'].'</option>';
        }
        echo '</select></td></tr>'
        . '<img src="includes/img/notification_done.png" title="enregistrer ce menu" onclick="javascript:validerMenu('.$nb.')"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '</form>' ;

        ?>
       
          </form>
      </div>