<div class="homePhone">
    <ul class="list-unstyled">
<?php

 
//**************************** NIVEAU 1
$ligne= $lesCommandes->fetch() ;
        $nb=1;
        $nbD = 1 ;

        while($ligne)
        {
            //rupture mois
            $mois = substr($ligne['dateMenu'],5,2)."/".substr($ligne['dateMenu'],0,4) ;
            $nbCommandes = getNbCommandesUtilMois(substr($ligne['dateMenu'],5,2), substr($ligne['dateMenu'],0,4), $_SESSION['idUtil']) ;
            $montant = $nbCommandes * getPrixRepas() ;
            echo '<li class="list-group-item">
                  <input class="input_menu" type="checkbox" id="cc'.$nb.'" />            
                <label for="cc'.$nb.'">mois/année : '.$mois.'&nbsp;('.$nbCommandes.'&nbsp;repas = '.$montant.' €)</label>
                <ul class="list-unstyled">' ;
        
            $nb++;
            while ($ligne && $mois == substr($ligne['dateMenu'],5,2)."/".substr($ligne['dateMenu'],0,4))
            {
            
                echo '<li class="list-group-item list-group-item-warning">'
                . '<input class="input_menu_jaune" type="checkbox" id="cd'.$nbD.'" />
                    <label for="cd'.$nbD.'">'.
                    $ligne['dateMenu'].'</label><ul class="list-unstyled">                      
                    <li class="list-group-item list-group-item-success">'.
                    $ligne['descriptionMenu'].                          
                    '</li>'
                        . '</ul></li>' ;
                $ligne= $lesCommandes->fetch() ;    
                $nbD++;
            }
            echo '</ul>'
            . '</li>' ;            
        }
?>
    </ul>
</div>