<div class="homePhone">
    <ul class="list-unstyled">
<?php

if ($lesCommandes->rowCount() > 0)
    echo '<a href="#" onclick="javascript:ouvrirPage(\'vues/liste_commande.php\')">Afficher les commandes au format PDF</a>' ;
else {
    echo 'Aucune commande enregistrée pour le '.$ladateJMA  ;
}
        
$ligne= $lesCommandes->fetch() ;
        $nb=1;
        $nbD = 1 ;

        while($ligne)
        {
            //rupture date
            $laDateAffiche = $ligne['dateMenu'] ;
            $laDateView=  getDateJMA($laDateAffiche) ;
            $nbCommandes = getNbCommandesJour($laDateAffiche) ;
            $montant = $nbCommandes * getPrixRepas() ;
            echo '<li class="list-group-item">
                  <input class="input_menu" type="checkbox" id="cc'.$nb.'" />            
                <label for="cc'.$nb.'">date : '.$laDateView.'&nbsp;('.$nbCommandes.'&nbsp;repas)</label>
                <ul class="list-unstyled">' ;
            $nb++;
            //rupture menu
            while ($ligne && $laDateAffiche == $ligne['dateMenu'] )
            {
                $numMenu=$ligne['numMenu'] ;
                $nbCommandesMenu = getNbCommandesMenuJour($laDateAffiche, $numMenu) ;
                $descriptionMenu = getDescriptionMenu($ligne['dateMenu'],$ligne['numMenu']) ;

                echo '<li class="list-group-item list-group-item-warning">'
                    . '<input class="input_menu_jaune" type="checkbox" id="cd'.$nbD.'" />
                    <label for="cd'.$nbD.'">Menu n°'.
                    $ligne['numMenu'].'&nbsp;('.$nbCommandesMenu.'&nbsp;repas) : '.$descriptionMenu.'</label><ul class="list-unstyled">' ;
                $nbD++ ;
                
                
                while ($ligne && $laDateAffiche == $ligne['dateMenu'] && $numMenu == $ligne['numMenu'])
                {
            
                    echo '                      
                        <li class="list-group-item list-group-item-success">'.
                        $ligne['nom'].' '.$ligne['prenom'].                         
                        '</li>' ;
                           
                        $ligne= $lesCommandes->fetch() ;    
                }
                echo  '</ul></li>' ;
            }
            echo '</ul>'
            . '</li>' ;            
        }
?>


    </ul>
</div>