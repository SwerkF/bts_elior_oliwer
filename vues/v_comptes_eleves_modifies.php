<div class="home">
    <?php
    $trouve = false;
        foreach($lesEleves as $unEleve){
            if($unEleve['nom'] == $modifnom && $unEleve['prenom'] == $modifprenom && $unEleve['idClasse'] == $modifclasse){
                $trouve = true;
                
            }
        }
            if($trouve == true){
                $mess = "L'élève";
                    echo '<div class="homeB">'
                    . '<p style="color:#ff0000">'. $mess . ' ' . $modifnom . ' ' . $modifprenom . ' existe déja !</p>' 
                    . '<br><a href="index.php?uc=gestion&action=modifUtilisateur"> Retour </a>'  ;
            }else{
                $messageV = "L'élève possède désormais les informations suivantes :";
                    EleveModification($id, $modifnom, $modifprenom, $modifclasse, $modiflogin) ;
                    echo '<div class="homeB">'  
                    . '<p style="color:#00ff00">' . $messageV . ' ' . $modifnom . ' ' . $modifprenom . ' en classe de BTS' . $modifclasse . '</p>' 
                    . '<br><a href="index.php?uc=gestion&action=compte"> Retour </a>' ;
            }
 ?>   
</div>