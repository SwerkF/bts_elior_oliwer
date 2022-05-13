
      <div class="home">
          <form name="dates_saisie" autocomplete="off">
          <div id="Home_title_ss">
              
              <?php
              echo '<select name="dateMenu" onchange="javascript:chargerPageVoirCde(this.value)">'
              . '<option value="0">-- choisir date --' ;
              
              foreach ($lesDates as $laDate)
            {
                echo '<option value="'.$laDate['dateMenu'].'">'.$laDate['dateMenu'] ;
            }
            
            echo '</select>' ;
        ?>
       </div>
          </form>
      </div>