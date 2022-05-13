<div class="home">
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
    ?>
    </div>
</div>